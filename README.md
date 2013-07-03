# php_component_servicelocator

## General

After taking a look to the symfony dependency injection and the zend framework 2 service manager, i want to build up my own service locator.
Of course it will be heavily influenced by both and i'm happy that i can have a look at this well designed frameworks. Especially the fact that both are dealing a lot with magic call methods is a fact i don't like. Depending on how far the journey will go, i will provide a [generator](https://github.com/propelorm/Propel/tree/master/generator "generator of propelorm") like [propelorm](https://github.com/propelorm/Propel/tree/master "propelorm") by creating files with setter and getter methods or by annotations.

If it turns out to be useful, i will slice some components into separate components.

## Ideas And Structure

### Terms

* Arguments are parameter used in an constructor
* methodCalls are having a name and an array of parameters

### Components

#### ServiceLocator

The service locator is the main parted of this component. Is is using all following parts to build up a central point for creating object instances. It also handles the alias dealing for the internal components.
The service locator can be instantiated by using a configuration.

#### Invoke

The invoke is a class, that is directly instantiated without using a factory method. It can use a manager for dependency injection if needed.
A invoke can have an alias.

#### Service

The service uses the manger to provide a factory that provides the ability to create an object instance from a class with fully injected dependencies.
A service can provide a single instance of a class or multiple instances of a class. This behaviour can be configured by the shared flag.
A service can have an alias.

#### Manager

The manager provides the dependency handling for services or invokes.
A manager can have an alias.

#### Initializer

Initialize classes by using reflection api or iterating over implemented interface (like injecting ServiceLocator if ServiceLocatorAwareInterface is implemented)

#### ParameterContainer

Component to provide exchange between components.

#### Builder

A Builder is a component that knows how to build up the class by providing the "addMethodCall(string $methodName, array $values" and "setParameters(array $parameterNamesToValue)".
A Builder can be configured by an configuration file or by using a factory.
[Reference](http://symfony.com/doc/current/components/dependency_injection/introduction.html)
It is using the ParamterContainer to store defined parameters.

#### Definition

A definition represents what should be done to instantiate a class.
[Reference](http://symfony.com/doc/current/components/dependency_injection/definitions.html)

#### Configuration

A configuration is used to configure the service locator and its internal components via a configuration file (php, yaml, xml, json).
The configuration is able to read from a file, compile this configuration and writes the service locator to a php file.

### Connection Between Components

## Example

Example of an service locator configuration

    ```php
    return array(
        'service' => array(
            'getMyClassService' => array(
                'factoryClass' => 'myFactory',
                'alias' => 'getClassService',   //optional, default is no alias
                'isShared' => true              //optional, default is false
            )
        ),
        'manager' => array(
            'myManagerOne' => array(
                'factoryClass' => 'myFactory',
                'methodCalls' => array(
                    'setMethodOne' => array(
                        'parameterOne' => 'valueOne',
                        'parameterTwo' => 'valueTwo'
                    )
                ),
                'is_abstract' => true,                  //optional
                'parentManager' => 'myManagerMaster',   //optional
                'alias' => 'managerOne'                 //optional
            )
        ),
        'alias' => array(
            'superManager' => 'myManagerOne'
        )
    );

## Thanks

Thanks to the [symfony framework](http://symfony.com/doc/current/components "symfony current components"), the [dependency component](http://symfony.com/doc/current/components/dependency_injection/ "dependency component of symfony"), the [zend framework 2](http://framework.zend.com/manual/2.2/en/ "manual of zend framework 2.2"), its [service manager](http://framework.zend.com/manual/2.2/en/index.html#zend-servicemanager "service manager manual of zend framework 2.2") and the [dependecy injection](http://framework.zend.com/manual/2.2/en/modules/zend.di.introduction.html "dependency injection manual of zend framework 2.2").
