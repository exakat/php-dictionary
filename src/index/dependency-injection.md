# Dependency Injection
Dependency injection is a design pattern in which an object receives other objects that it depends on.Dependency injection is a design pattern where an object receives its dependencies from external sources rather than creating them internally. This promotes loose coupling, easier testing, and greater flexibility in code maintenance. By injecting dependencies, developers can swap implementations more easily, making systems more modular and adaptable to change.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dependency-injection.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dependency-injection.html","name":"Dependency Injection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Dependency injection is a design pattern in which an object receives other objects that it depends on","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Dependency Injection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Dependency Injection"}]}]}</script>
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

+ [Autowiring](autowiring.html)
+ [Clock](clock.html)
+ [Dependency Injection Container](dependency-injection-container.html)
+ [Injection](injection.html)
+ [Interoperability](interoperability.html)
+ [Dependency Inversion (DIP)](dependency-inversion.html)
+ [Greenfield](green-field.html)
+ [Magento](magento.html)
+ [Ports And Adapters](ports-and-adapters.html)
