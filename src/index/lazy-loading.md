# Lazy Loading
Lazy loading is a programming pattern that postpone the actual loading of a resource to the moment it is actually used. 

This prevents the application from loading resources that may not be used later: it improves efficiency. 

Lazy loading happens with data and source code. Some entities may be loaded only when they are actually needed, to avoid loading too much data from the repositories, while they are not used. 

PHP also uses lazy loading: some structures are checked at linting time, when they are available. Otherwise, their validation is deferred to execution. For example, method signature compatibility with parents, or class constant values.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lazy-loading.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lazy-loading.html","name":"Lazy Loading","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Lazy loading is a programming pattern that postpone the actual loading of a resource to the moment it is actually used","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Lazy Loading.html"]}],"keywords":["concept","design pattern","lint"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lazy-objects.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/proxy-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/proxy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stealth-generator.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Lazy_loading"},{"@type":"CreativeWork","name":"Revisiting Lazy-Loading Proxies in PHP","url":"https:\/\/nicolas-grekas.medium.com\/revisiting-lazy-loading-proxies-in-php-ef813eabeb67"},{"@type":"CreativeWork","name":"Lazy loading design pattern in PHP","url":"https:\/\/docs.php.earth\/php\/ref\/oop\/design-patterns\/lazy-loading\/"},{"@type":"CreativeWork","name":"Lazy Loading Data Objects in PHP 8.4 with Doctrine ORM Example","url":"https:\/\/tideways.com\/profiler\/blog\/lazy-loading-data-objects-in-php-8-4-with-doctrine-orm-example"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"lazy-loading"}]}]}</script>
```php
<?php

class File {
    private $path;
    private $content = null;

    function __construct($path) {
        $this->path = $path;
    }

    function get() {
        if ($this->content === null) {
            $this->content = file_get_contents($path);
        }
        
        return $this->content;
    }
}

$file = new File($path);
// some more code
echo $file->getContent();

class ErroneousConstant {
    const VALID = 1;
    // invalid value for the INVALID constant
    const INVALID = [] + 1;
}

// displays 1
echo ErroneousConstant::VALID;
// This produces a Fatal error, even though it could be detected before. 
echo ErroneousConstant::INVALID;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Lazy_loading)**
## See Also

+ [Revisiting Lazy-Loading Proxies in PHP](https://nicolas-grekas.medium.com/revisiting-lazy-loading-proxies-in-php-ef813eabeb67)
+ [Lazy loading design pattern in PHP](https://docs.php.earth/php/ref/oop/design-patterns/lazy-loading/)
+ [Lazy Loading Data Objects in PHP 8.4 with Doctrine ORM Example](https://tideways.com/profiler/blog/lazy-loading-data-objects-in-php-8-4-with-doctrine-orm-example)

## Related

+ [Lazy Objects](lazy-objects.html)
+ [Proxy Class](proxy-class.html)
+ [Proxy](proxy.html)
+ [Stealth Generator](stealth-generator.html)

## Related packages

+ [ocramius/proxy-manager](https://packagist.org/packages/ocramius/proxy-manager)
