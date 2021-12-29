<?php

namespace Container8Y35nMP;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder38b8f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf61ad = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties78b90 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'getConnection', array(), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'getMetadataFactory', array(), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'getExpressionBuilder', array(), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'beginTransaction', array(), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'getCache', array(), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'transactional', array('func' => $func), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'commit', array(), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->commit();
    }

    public function rollback()
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'rollback', array(), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'getClassMetadata', array('className' => $className), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'createQuery', array('dql' => $dql), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'createNamedQuery', array('name' => $name), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'createQueryBuilder', array(), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'flush', array('entity' => $entity), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'clear', array('entityName' => $entityName), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->clear($entityName);
    }

    public function close()
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'close', array(), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->close();
    }

    public function persist($entity)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'persist', array('entity' => $entity), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'remove', array('entity' => $entity), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'refresh', array('entity' => $entity), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'detach', array('entity' => $entity), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'merge', array('entity' => $entity), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'contains', array('entity' => $entity), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'getEventManager', array(), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'getConfiguration', array(), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'isOpen', array(), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'getUnitOfWork', array(), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'getProxyFactory', array(), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'initializeObject', array('obj' => $obj), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'getFilters', array(), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'isFiltersStateClean', array(), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'hasFilters', array(), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return $this->valueHolder38b8f->hasFilters();
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

        $instance->initializerf61ad = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder38b8f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder38b8f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder38b8f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, '__get', ['name' => $name], $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        if (isset(self::$publicProperties78b90[$name])) {
            return $this->valueHolder38b8f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38b8f;

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

        $targetObject = $this->valueHolder38b8f;
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
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38b8f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder38b8f;
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
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, '__isset', array('name' => $name), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38b8f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder38b8f;
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
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, '__unset', array('name' => $name), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38b8f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder38b8f;
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
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, '__clone', array(), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        $this->valueHolder38b8f = clone $this->valueHolder38b8f;
    }

    public function __sleep()
    {
        $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, '__sleep', array(), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;

        return array('valueHolder38b8f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf61ad = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf61ad;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf61ad && ($this->initializerf61ad->__invoke($valueHolder38b8f, $this, 'initializeProxy', array(), $this->initializerf61ad) || 1) && $this->valueHolder38b8f = $valueHolder38b8f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder38b8f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder38b8f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
