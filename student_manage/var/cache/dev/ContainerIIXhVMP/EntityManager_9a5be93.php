<?php

namespace ContainerIIXhVMP;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf712f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer656c1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5be71 = [
        
    ];

    public function getConnection()
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'getConnection', array(), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'getMetadataFactory', array(), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'getExpressionBuilder', array(), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'beginTransaction', array(), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'getCache', array(), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'transactional', array('func' => $func), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'commit', array(), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->commit();
    }

    public function rollback()
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'rollback', array(), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'getClassMetadata', array('className' => $className), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'createQuery', array('dql' => $dql), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'createNamedQuery', array('name' => $name), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'createQueryBuilder', array(), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'flush', array('entity' => $entity), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'clear', array('entityName' => $entityName), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->clear($entityName);
    }

    public function close()
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'close', array(), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->close();
    }

    public function persist($entity)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'persist', array('entity' => $entity), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'remove', array('entity' => $entity), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'refresh', array('entity' => $entity), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'detach', array('entity' => $entity), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'merge', array('entity' => $entity), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'contains', array('entity' => $entity), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'getEventManager', array(), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'getConfiguration', array(), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'isOpen', array(), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'getUnitOfWork', array(), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'getProxyFactory', array(), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'initializeObject', array('obj' => $obj), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'getFilters', array(), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'isFiltersStateClean', array(), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'hasFilters', array(), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return $this->valueHolderf712f->hasFilters();
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

        $instance->initializer656c1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf712f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf712f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf712f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, '__get', ['name' => $name], $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        if (isset(self::$publicProperties5be71[$name])) {
            return $this->valueHolderf712f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf712f;

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

        $targetObject = $this->valueHolderf712f;
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
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf712f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf712f;
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
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, '__isset', array('name' => $name), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf712f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf712f;
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
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, '__unset', array('name' => $name), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf712f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf712f;
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
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, '__clone', array(), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        $this->valueHolderf712f = clone $this->valueHolderf712f;
    }

    public function __sleep()
    {
        $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, '__sleep', array(), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;

        return array('valueHolderf712f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer656c1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer656c1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer656c1 && ($this->initializer656c1->__invoke($valueHolderf712f, $this, 'initializeProxy', array(), $this->initializer656c1) || 1) && $this->valueHolderf712f = $valueHolderf712f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf712f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf712f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
