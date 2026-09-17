# Ghost Object
A ghost object is a design pattern, catalogued by Martin Fowler as one of the four varieties of ``Lazy Load``, where an object is created empty, without any of its real data, and silently loads its full state the first time one of its properties or methods is actually accessed.

Unlike a plain ``proxy``, which typically wraps a separate real object behind a shared interface, a ghost object *is* an instance of the real class itself: it has the right type, passes ``instanceof`` checks, and can be passed around freely, but starts out hollow. Only when it is actually touched does it trigger the expensive work, a database query, a remote call, a heavy computation, to fill itself in.

Doctrine ORM has long generated ghost-like proxy classes for its entities to defer loading related objects until they are accessed. PHP 8.4 brought this pattern into the engine itself with native ``lazy-objects``: ``ReflectionClass::newLazyGhost()`` creates a genuine instance of a class that stays uninitialized until first accessed, without any code generation or subclassing, making the ghost object pattern a language feature rather than a library trick.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ghost-object.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ghost-object.html","name":"Ghost Object","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 17 Sep 2026 08:02:33 +0000","dateModified":"Thu, 17 Sep 2026 08:02:33 +0000","description":"A ghost object is a design pattern, catalogued by Martin Fowler as one of the four varieties of Lazy Load, where an object is created empty, without any of its real data, and silently loads its full state the first time one of its properties or methods is actually accessed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ghost-object.html"]}],"alternateName":["ghost"],"keywords":["design pattern","object","performance"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lazy-objects.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lazy-loading.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/proxy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/proxy-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/instanceof.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/martinfowler.com\/eaaCatalog\/lazyLoad.html"},{"@type":"CreativeWork","name":"Doctrine ORM: Proxy Objects","url":"https:\/\/www.doctrine-project.org\/projects\/doctrine-orm\/en\/stable\/reference\/advanced-configuration.html"},{"@type":"CreativeWork","name":"PHP RFC: Lazy Objects","url":"https:\/\/wiki.php.net\/rfc\/lazy-objects"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.36","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ghost-object"}]}]}</script>
```php
<?php

    class Invoice
    {
        public function __construct(
            private int $id,
            private array $lines = [],
            private float $total = 0.0,
        ) {
            // Imagine this constructor also runs a heavy computation
            // or a database query to compute $lines and $total.
        }
    
        public function getTotal(): float
        {
            return $this->total;
        }
    }
    
    // Build a ghost: an Invoice instance that looks real, but has no data yet
    $initializer = static function (Invoice $ghost): void {
        // Runs only once, the first time the ghost is actually touched
        [$lines, $total] = loadInvoiceFromDatabase(42);
        $ghost->__construct(42, $lines, $total);
    };
    
    $reflector = new ReflectionClass(Invoice::class);
    $invoice = $reflector->newLazyGhost($initializer);
    
    // Nothing has been loaded yet: $invoice is still a hollow ghost
    echo $invoice->getTotal(); // first access: the initializer fires, filling in the real data

?>
```

**[Documentation](https://martinfowler.com/eaaCatalog/lazyLoad.html)**
## See Also

+ [Doctrine ORM: Proxy Objects](https://www.doctrine-project.org/projects/doctrine-orm/en/stable/reference/advanced-configuration.html)
+ [PHP RFC: Lazy Objects](https://wiki.php.net/rfc/lazy-objects)

## Related

+ [Lazy Objects](lazy-objects.html)
+ [Lazy Loading](lazy-loading.html)
+ [Proxy](proxy.html)
+ [Proxy Class](proxy-class.html)
+ [instanceof](instanceof.html)
+ [Object](object.html)

## Related packages

+ [ocramius/proxy-manager](https://packagist.org/packages/ocramius/proxy-manager)
+ [doctrine/orm](https://packagist.org/packages/doctrine/orm)
