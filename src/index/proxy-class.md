# Proxy Class
A proxy class is a class that stands in for another class, intercepting calls and delegating them to the real object. Proxy classes are used to add behaviour transparently: lazy initialisation, access control, logging, or caching.

PHP 8.4 introduced native lazy objects at the engine level, enabling the creation of proxy instances that defer construction of the wrapped object until it is first accessed. This replaces many library-based approaches for virtual proxies.

Before PHP 8.4, proxy classes were typically generated at runtime using tools such as ``ocramius/proxy-manager`` or Symfony's lazy service proxies. These tools generate a subclass that overrides every method to intercept calls, then delegates to the real instance.

A proxy class must implement the same interface or extend the same base class as the proxied object so that it is transparent to callers.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/proxy-class.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/proxy-class.html","name":"Proxy Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:48:17 +0000","dateModified":"Mon, 13 Jul 2026 18:48:17 +0000","description":"A proxy class is a class that stands in for another class, intercepting calls and delegating them to the real object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Proxy Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Proxy](proxy.ini.html)
+ [Lazy Objects](lazy-objects.ini.html)
+ [Lazy Loading](lazy-loading.ini.html)
+ [Interface](interface.ini.html)
+ [Design Pattern](design-pattern.ini.html)
+ [Decorator Pattern](decorator.ini.html)
+ [Direct Output](direct-output.ini.html)
+ [Flexibility](flexibility.ini.html)

## Related packages

+ [ocramius/proxy-manager](https://packagist.org/packages/ocramius/proxy-manager)
