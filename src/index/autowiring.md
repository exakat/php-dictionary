# Autowiring
Autowiring is the ability of the framework to inject dependencies, based on the constructor signature.

Autowiring is based on types, in the signature of the controller.

Autowiring is  commonly used in dependency injection, ``DI`` containers.

Autowiring reduces boilerplate code, enhances type usage and makes refactoring easier.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autowiring.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autowiring.html","name":"Autowiring","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:53:21 +0000","dateModified":"Tue, 11 Aug 2026 20:53:21 +0000","description":"Autowiring is the ability of the framework to inject dependencies, based on the constructor signature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Autowiring.html"]}],"alternateName":["auto-wiring"],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dependency-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constructor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/boilerplate.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/refactoring.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/symfony.com\/doc\/current\/service_container\/autowiring.html"},{"@type":"CreativeWork","name":"Autowiring - php-di","url":"https:\/\/php-di.org\/doc\/autowiring.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"autowiring"}]}]}</script>
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
