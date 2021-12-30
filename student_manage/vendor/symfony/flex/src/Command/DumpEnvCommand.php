<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Flex\Command;

use Composer\Command\BaseCommand;
use Composer\Config;
use Composer\Factory;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Flex\Options;

class DumpEnvCommand extends BaseCommand
{
    private $config;
    private $options;

    public function __construct(Config $config, Options $options)
    {
        $this->config = $config;
        $this->options = $options;

        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('symfony:dump-env')
            ->setAliases(['dump-env'])
            ->setDescription('Compiles .env files to .env.local.php.')
            ->setDefinition([
                new InputArgument('env', InputArgument::OPTIONAL, 'The application environment to dump .env files for - e.g. "prod".'),
            ])
            ->addOption('empty', null, InputOption::VALUE_NONE, 'Ignore the content of .env files')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        if ($env = $input->getArgument('env')) {
            $_SERVER['APP_ENV'] = $env;
        }

        $path = $this->options->get('root-dir').'/.env';

        if (!$env || !$input->getOption('empty')) {
            $vars = $this->loadEnv($path, $env);
            $env = $vars['APP_ENV'];
        }

        if ($input->getOption('empty')) {
            $vars = ['APP_ENV' => $env];
        }

        $vars = var_export($vars, true);
        $vars = <<<EOF
<?php

// This file was generated by running "composer dump-env $env"

return $vars;

EOF;
        file_put_contents($path.'.local.php', $vars, \LOCK_EX);

        $this->getIO()->writeError('Successfully dumped .env files in <info>.env.local.php</>');

        return 0;
    }

    private function loadEnv(string $path, ?string $env): array
    {
        if (!file_exists($autoloadFile = $this->config->get('vendor-dir').'/autoload.php')) {
            throw new \RuntimeException(sprintf('Please run "composer install" before running this command: "%s" not found.', $autoloadFile));
        }

        require $autoloadFile;

        if (!class_exists(Dotenv::class)) {
            throw new \RuntimeException('Please run "composer require symfony/dotenv" to load the ".env" files configuring the application.');
        }

        $globalsBackup = [$_SERVER, $_ENV];
        unset($_SERVER['APP_ENV']);
        $_ENV = ['APP_ENV' => $env];
        $_SERVER['SYMFONY_DOTENV_VARS'] = implode(',', array_keys($_SERVER));
        putenv('SYMFONY_DOTENV_VARS='.$_SERVER['SYMFONY_DOTENV_VARS']);

        try {
            if (method_exists(Dotenv::class, 'usePutenv')) {
                $dotenv = new Dotenv();
            } else {
                $dotenv = new Dotenv(false);
            }

            if (!$env && file_exists($p = "$path.local")) {
                $env = $_ENV['APP_ENV'] = $dotenv->parse(file_get_contents($p), $p)['APP_ENV'] ?? null;
            }

            if (!$env) {
                throw new \RuntimeException('Please provide the name of the environment either by passing it as command line argument or by defining the "APP_ENV" variable in the ".env.local" file.');
            }

            $config = @json_decode(file_get_contents(Factory::getComposerFile()), true);
            $testEnvs = $config['extra']['runtime']['test_envs'] ?? ['test'];

            if (method_exists($dotenv, 'loadEnv')) {
                $dotenv->loadEnv($path, 'APP_ENV', 'dev', $testEnvs);
            } else {
                // fallback code in case your Dotenv component is not 4.2 or higher (when loadEnv() was added)
                $dotenv->load(file_exists($path) || !file_exists($p = "$path.dist") ? $path : $p);

                if (!\in_array($env, $testEnvs, true) && file_exists($p = "$path.local")) {
                    $dotenv->load($p);
                }

                if (file_exists($p = "$path.$env")) {
                    $dotenv->load($p);
                }

                if (file_exists($p = "$path.$env.local")) {
                    $dotenv->load($p);
                }
            }

            unset($_ENV['SYMFONY_DOTENV_VARS']);
            $env = $_ENV;
        } finally {
            list($_SERVER, $_ENV) = $globalsBackup;
        }

        return $env;
    }
}
