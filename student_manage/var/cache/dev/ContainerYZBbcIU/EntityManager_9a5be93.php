<?php

namespace ContainerYZBbcIU;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder93c4d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4da53 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb1014 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'getConnection', array(), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'getMetadataFactory', array(), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'getExpressionBuilder', array(), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'beginTransaction', array(), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'getCache', array(), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'transactional', array('func' => $func), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'commit', array(), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->commit();
    }

    public function rollback()
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'rollback', array(), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'getClassMetadata', array('className' => $className), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'createQuery', array('dql' => $dql), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'createNamedQuery', array('name' => $name), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'createQueryBuilder', array(), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'flush', array('entity' => $entity), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'clear', array('entityName' => $entityName), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->clear($entityName);
    }

    public function close()
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'close', array(), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->close();
    }

    public function persist($entity)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'persist', array('entity' => $entity), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'remove', array('entity' => $entity), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'refresh', array('entity' => $entity), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'detach', array('entity' => $entity), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'merge', array('entity' => $entity), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'contains', array('entity' => $entity), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'getEventManager', array(), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'getConfiguration', array(), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'isOpen', array(), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'getUnitOfWork', array(), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'getProxyFactory', array(), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'initializeObject', array('obj' => $obj), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'getFilters', array(), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'isFiltersStateClean', array(), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'hasFilters', array(), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return $this->valueHolder93c4d->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer4da53 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder93c4d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder93c4d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder93c4d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, '__get', ['name' => $name], $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        if (isset(self::$publicPropertiesb1014[$name])) {
            return $this->valueHolder93c4d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93c4d;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder93c4d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93c4d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder93c4d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, '__isset', array('name' => $name), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93c4d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder93c4d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, '__unset', array('name' => $name), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93c4d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder93c4d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, '__clone', array(), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        $this->valueHolder93c4d = clone $this->valueHolder93c4d;
    }

    public function __sleep()
    {
        $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, '__sleep', array(), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;

        return array('valueHolder93c4d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4da53 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4da53;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4da53 && ($this->initializer4da53->__invoke($valueHolder93c4d, $this, 'initializeProxy', array(), $this->initializer4da53) || 1) && $this->valueHolder93c4d = $valueHolder93c4d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder93c4d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder93c4d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
