# Proxy Class
A proxy class is a class that stands in for another class, intercepting calls and delegating them to the real object. Proxy classes are used to add behaviour transparently: lazy initialisation, access control, logging, or caching.

PHP 8.4 introduced native lazy objects at the engine level, enabling the creation of proxy instances that defer construction of the wrapped object until it is first accessed. This replaces many library-based approaches for virtual proxies.

Before PHP 8.4, proxy classes were typically generated at runtime using tools such as ``ocramius/proxy-manager`` or Symfony's lazy service proxies. These tools generate a subclass that overrides every method to intercept calls, then delegates to the real instance.

A proxy class must implement the same interface or extend the same base class as the proxied object so that it is transparent to callers.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/proxy-class.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/proxy-class.html","name":"Proxy Class","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 18 Aug 2026 05:24:21 +0000","dateModified":"Tue, 18 Aug 2026 05:24:21 +0000","description":"A proxy class is a class that stands in for another class, intercepting calls and delegating them to the real object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/proxy-class.html"]}],"alternateName":["lazy-proxy","virtual-proxy"],"keywords":["design pattern","object","php 8.4"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/proxy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lazy-objects.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lazy-loading.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/design-pattern.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decorator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/direct-output.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/flexibility.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.lazy-objects.php"},{"@type":"CreativeWork","name":"Using PHP 8.4's Lazy Objects","url":"https:\/\/www.phparch.com\/2025\/01\/using-php-8-4s-lazy-objects\/"},{"@type":"CreativeWork","name":"PHP 8.4: Lazy Objects\u2014Ghost vs Proxy (When to Use Which)","url":"https:\/\/idnasirasira.com\/blog\/php-84-lazy-objects-ghost-vs-proxy"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"proxy-class"}]}]}</script>
```php
<?php

// PHP 8.4 native lazy proxy
class HeavyService
{
    public function __construct()
    {
        // Expensive initialization
    }

    public function compute(): int
    {
        return 42;
    }
}

$reflector = new ReflectionClass(HeavyService::class);
$proxy = $reflector->newLazyProxy(function (HeavyService $proxy): HeavyService {
    return new HeavyService(); // called only on first access
});

// HeavyService::__construct() has not been called yet
echo $proxy->compute(); // triggers initialisation, outputs 42

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.lazy-objects.php)**
## See Also

+ [Using PHP 8.4's Lazy Objects](https://www.phparch.com/2025/01/using-php-8-4s-lazy-objects/)
+ [PHP 8.4: Lazy Objects—Ghost vs Proxy (When to Use Which)](https://idnasirasira.com/blog/php-84-lazy-objects-ghost-vs-proxy)

## Related

+ [Proxy](proxy.html)
+ [Lazy Objects](lazy-objects.html)
+ [Lazy Loading](lazy-loading.html)
+ [Interface](interface.html)
+ [Design Pattern](design-pattern.html)
+ [Decorator Pattern](decorator.html)
+ [Direct Output](direct-output.html)
+ [Flexibility](flexibility.html)

## Related packages

+ [ocramius/proxy-manager](https://packagist.org/packages/ocramius/proxy-manager)
