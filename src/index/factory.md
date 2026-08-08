# Factory
A factory is a design pattern used to create objects without exposing the instantiation logic, i.e., the new keyword, to the client code. Instead of the client knowing exactly which class to instantiate, it asks the factory to produce the object for it.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/factory.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/factory.html","name":"Factory","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 04 Jul 2026 08:15:54 +0000","dateModified":"Sat, 04 Jul 2026 08:15:54 +0000","description":"A factory is a design pattern used to create objects without exposing the instantiation logic, i","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Factory.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Factory"}]}]}</script>
```php
<?php

// LoggerFactory.php
class LoggerFactory
{
    // Logger is an interface
    public static function createLogger(string $type): Logger
    {
        switch (strtolower($type)) {
            case 'file':
                return new FileLogger();
            case 'database':
            case 'db':
                return new DatabaseLogger();
            default:
                throw new InvalidArgumentException("Unknown logger type:" . $type);
        }
    }
}

?>
```

**[Documentation](https://refactoring.guru/design-patterns/factory-method/php/example)**
## See Also

+ [Exploring the Factory Pattern in PHP 8.2](https://medium.com/@bluznierca1/exploring-the-factory-pattern-in-php-8-2-d75f2de6f22e)
+ [PHP Tips | Exploring the Factory Pattern 🤖](https://dev.to/razielrodrigues/php-creational-patterns-factory-429c)

## Related

+ [Abstract Factory](abstract-factory.html)
