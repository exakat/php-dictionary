# Constructor Property Promotion
Constructor property promotion lets a class declare its properties directly in the constructor signature. Adding a visibility modifier, such as ``public``, ``protected`` or ``private``, to a constructor parameter declares a property with that name and assigns the argument to it.

Before PHP 8.0, the same class needed a property declaration, a parameter and an assignment for each value. Promotion removes the repetition:

``class Client { public function __construct(private string $token, private int $timeout = 10) {} }``

The promoted parameters can have default values, types and ``readonly``. Promotion works well with dependency injection, where a class receives its dependencies in the constructor.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constructor-property-promotion.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constructor-property-promotion.html","name":"Constructor Property Promotion","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 14 Oct 2026 16:37:45 +0000","dateModified":"Wed, 14 Oct 2026 16:37:45 +0000","description":"Constructor property promotion lets a class declare its properties directly in the constructor signature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constructor-property-promotion.html"]}],"alternateName":["promoted constructor properties"],"keywords":["oop","php 8","syntax"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constructor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dependency-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-promotion.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readonly.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/named-constructor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.decon.php#language.oop5.decon.constructor.promotion"},{"@type":"CreativeWork","name":"PHP RFC: Constructor Property Promotion","url":"https:\/\/wiki.php.net\/rfc\/constructor_promotion"},{"@type":"CreativeWork","name":"PHP manual: Constructors and Destructors","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.decon.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"constructor-property-promotion"}]}]}</script>
```php
<?php

    class Client {
        public function __construct(
            private readonly string $token,
            private int $timeout = 10,
        ) {}
    }

```

**[Documentation](https://www.php.net/manual/en/language.oop5.decon.php#language.oop5.decon.constructor.promotion)**
## See Also

+ [PHP RFC: Constructor Property Promotion](https://wiki.php.net/rfc/constructor_promotion)
+ [PHP manual: Constructors and Destructors](https://www.php.net/manual/en/language.oop5.decon.php)

## Related

+ [Constructor](constructor.html)
+ [Dependency Injection](dependency-injection.html)
+ [Type Widening](type-promotion.html)
+ [Readonly](readonly.html)
+ [Named Constructors](named-constructor.html)
+ [Properties](property.html)
