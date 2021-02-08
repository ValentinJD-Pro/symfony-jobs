<?php

namespace ContainerIb5G89v;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder11adc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7c558 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4ea25 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'getConnection', array(), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'getMetadataFactory', array(), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'getExpressionBuilder', array(), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'beginTransaction', array(), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'getCache', array(), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'transactional', array('func' => $func), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->transactional($func);
    }

    public function commit()
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'commit', array(), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->commit();
    }

    public function rollback()
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'rollback', array(), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'getClassMetadata', array('className' => $className), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'createQuery', array('dql' => $dql), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'createNamedQuery', array('name' => $name), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'createQueryBuilder', array(), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'flush', array('entity' => $entity), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'clear', array('entityName' => $entityName), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->clear($entityName);
    }

    public function close()
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'close', array(), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->close();
    }

    public function persist($entity)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'persist', array('entity' => $entity), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'remove', array('entity' => $entity), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'refresh', array('entity' => $entity), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'detach', array('entity' => $entity), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'merge', array('entity' => $entity), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'contains', array('entity' => $entity), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'getEventManager', array(), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'getConfiguration', array(), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'isOpen', array(), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'getUnitOfWork', array(), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'getProxyFactory', array(), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'initializeObject', array('obj' => $obj), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'getFilters', array(), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'isFiltersStateClean', array(), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'hasFilters', array(), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return $this->valueHolder11adc->hasFilters();
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

        $instance->initializer7c558 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder11adc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder11adc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder11adc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, '__get', ['name' => $name], $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        if (isset(self::$publicProperties4ea25[$name])) {
            return $this->valueHolder11adc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11adc;

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

        $targetObject = $this->valueHolder11adc;
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
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11adc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder11adc;
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
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, '__isset', array('name' => $name), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11adc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder11adc;
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
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, '__unset', array('name' => $name), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11adc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder11adc;
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
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, '__clone', array(), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        $this->valueHolder11adc = clone $this->valueHolder11adc;
    }

    public function __sleep()
    {
        $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, '__sleep', array(), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;

        return array('valueHolder11adc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7c558 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7c558;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7c558 && ($this->initializer7c558->__invoke($valueHolder11adc, $this, 'initializeProxy', array(), $this->initializer7c558) || 1) && $this->valueHolder11adc = $valueHolder11adc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder11adc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder11adc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
