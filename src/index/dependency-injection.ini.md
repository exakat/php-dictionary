# Dependency Injection
Dependency injection is a design pattern in which an object receives other objects that it depends on.Dependency injection is a design pattern where an object receives its dependencies from external sources rather than creating them internally. This promotes loose coupling, easier testing, and greater flexibility in code maintenance. By injecting dependencies, developers can swap implementations more easily, making systems more modular and adaptable to change.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dependency-injection.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dependency-injection.ini.html","name":"Dependency Injection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 08:30:00 +0000","dateModified":"Mon, 06 Jul 2026 08:30:00 +0000","description":"Dependency injection is a design pattern in which an object receives other objects that it depends on","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Dependency Injection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Dependency_injection)**
## See Also

+ [Road to dependency injection](https://matthiasnoback.nl/2018/06/road-to-dependency-injection/)
+ [PHP-di](https://php-di.org/)
+ [Dependency Injection in PHP: Laravel’s Magic vs. Symfony’s Explicitness](https://lukaszzychal.medium.com/dependency-injection-in-php-laravels-magic-vs-symfony-s-explicitness-ce0170a30403)

## Related

+ [Autowiring](autowiring.ini.html)
+ [Clock](clock.ini.html)
+ [Dependency Injection Container](dependency-injection-container.ini.html)
+ [Injection](injection.ini.html)
+ [Interoperability](interoperability.ini.html)
+ [Dependency Inversion (DIP)](dependency-inversion.ini.html)
+ [Greenfield](green-field.ini.html)
+ [Magento](magento.ini.html)
+ [Ports And Adapters](ports-and-adapters.ini.html)
