# Autowiring
Autowiring is the ability of the framework to inject dependencies, based on the constructor signature.

Autowiring is based on types, in the signature of the controller.

Autowiring is  commonly used in dependency injection, ``DI`` containers.

Autowiring reduce boilerplate code, enhance type usage and make refactoring easier.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/autowiring.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/autowiring.html","name":"Autowiring","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:00:45 +0000","dateModified":"Tue, 07 Jul 2026 05:00:45 +0000","description":"Autowiring is the ability of the framework to inject dependencies, based on the constructor signature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Autowiring.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class Renderer {
        private View $view;
    
        function __construct(View $view) {
            $this->view = $view;
        }
    }

?>
```

**[Documentation](https://symfony.com/doc/current/service_container/autowiring.html)**
## See Also

+ [Autowiring - php-di](https://php-di.org/doc/autowiring.html)

## Related

+ [Dependency Injection](dependency-injection.ini.html)
+ [Constructor](constructor.ini.html)
+ [Boilerplate](boilerplate.ini.html)
+ [Type System](type.ini.html)
+ [Refactoring](refactoring.ini.html)

## Related packages

+ [nette/di](https://packagist.org/packages/nette/di)
+ [php-di/php-di](https://packagist.org/packages/php-di/php-di)
