# Lazy Objects
Lazy objects is a application of lazy-loading, directly available in the PHP engine, and available as an engine feature since PHP 8.4.

The traditional way to create an object is to use ``new``. The object is immediately created, and then, accessed later if needed.

Lazy objects defer the actual instantiation of the object until it is actually accessed. Nothing happens until the object is used. In the case of large applications, where lots of services or assets are created systematically, lazy objects postpone initialization, and may even skip it entirely if it is not needed. 

Lazy objects are good for objects that takes a lot of resources to initialize, or when there are lots of such objects, with a good proportion of them not being used, in the end.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lazy-objects.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lazy-objects.html","name":"Lazy Objects","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 16 Jun 2026 15:35:46 +0000","dateModified":"Tue, 16 Jun 2026 15:35:46 +0000","description":"Lazy objects is a application of lazy-loading, directly available in the PHP engine, and available as an engine feature since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Lazy Objects.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"lazy-objects"}]}]}</script>
```php
<?php

    // taken from the RFC (https://wiki.php.net/rfc/lazy-objects)
    class MyClass
    {
        public function __construct(private int $foo)
        {
            // Heavy initialization logic here.
        }
     
        // ...
    }
     
    $initializer = static function (MyClass $ghost): void {
        $ghost->__construct(123);
    };
     
    $reflector = new ReflectionClass(MyClass::class);
    $object = $reflector->newLazyGhost($initializer);
     
    // At this point, $object is a lazy ghost object.

?>
```

**[Documentation](https://wiki.php.net/rfc/lazy-objects)**
## See Also

+ [Lazy objects in PHP 8.4](https://chrastecky.dev/programming/lazy-objects-in-php-8-4)
+ [Using PHP 8.4’s Lazy Objects](https://www.phparch.com/2025/01/using-php-8-4s-lazy-objects/)
+ [PHP Object Lazy-Loading is More Than What You Think](https://jolicode.com/blog/php-object-lazy-loading-is-more-than-what-you-think)

## Related

+ [Lazy Loading](lazy-loading.html)
+ [Class](class.html)
+ [Proxy Class](proxy-class.html)
+ [Proxy](proxy.html)
