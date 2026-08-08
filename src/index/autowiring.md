# Autowiring
Autowiring is the ability of the framework to inject dependencies, based on the constructor signature.

Autowiring is based on types, in the signature of the controller.

Autowiring is  commonly used in dependency injection, ``DI`` containers.

Autowiring reduce boilerplate code, enhance type usage and make refactoring easier.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autowiring.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autowiring.html","name":"Autowiring","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Autowiring is the ability of the framework to inject dependencies, based on the constructor signature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Autowiring.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Autowiring"}]}]}</script>
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

+ [Dependency Injection](dependency-injection.html)
+ [Constructor](constructor.html)
+ [Boilerplate](boilerplate.html)
+ [Type System](type.html)
+ [Refactoring](refactoring.html)

## Related packages

+ [nette/di](https://packagist.org/packages/nette/di)
+ [php-di/php-di](https://packagist.org/packages/php-di/php-di)
