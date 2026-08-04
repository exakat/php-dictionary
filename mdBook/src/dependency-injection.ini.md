# Dependency Injection
Dependency injection is a design pattern in which an object receives other objects that it depends on.Dependency injection is a design pattern where an object receives its dependencies from external sources rather than creating them internally. This promotes loose coupling, easier testing, and greater flexibility in code maintenance. By injecting dependencies, developers can swap implementations more easily, making systems more modular and adaptable to change.
```php
<?php

    class MyObject {
        function __construct(private readonly Connection $database) {}
        
        function load(int $id): self {
            return $this->connection->select($id);
        }
    }

?>
```

## See Also

+ [Road to dependency injection](https://matthiasnoback.nl/2018/06/road-to-dependency-injection/)
+ [PHP-di](https://php-di.org/)
+ [Dependency Injection in PHP: Laravel’s Magic vs. Symfony’s Explicitness](https://lukaszzychal.medium.com/dependency-injection-in-php-laravels-magic-vs-symfony-s-explicitness-ce0170a30403)

Related : [Autowiring](Autowiring), [Clock](Clock), [Dependency Injection Container](Dependency Injection Container), [Injection](Injection), [Interoperability](Interoperability), [Dependency Inversion (DIP)](Dependency Inversion (DIP)), [Greenfield](Greenfield), [Magento](Magento), [Ports And Adapters](Ports And Adapters)
