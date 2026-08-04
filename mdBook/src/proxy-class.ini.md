# Proxy Class
A proxy class is a class that stands in for another class, intercepting calls and delegating them to the real object. Proxy classes are used to add behaviour transparently: lazy initialisation, access control, logging, or caching.

PHP 8.4 introduced native lazy objects at the engine level, enabling the creation of proxy instances that defer construction of the wrapped object until it is first accessed. This replaces many library-based approaches for virtual proxies.

Before PHP 8.4, proxy classes were typically generated at runtime using tools such as ``ocramius/proxy-manager`` or Symfony's lazy service proxies. These tools generate a subclass that overrides every method to intercept calls, then delegates to the real instance.

A proxy class must implement the same interface or extend the same base class as the proxied object so that it is transparent to callers.
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

Related : [Proxy](Proxy), [Lazy Objects](Lazy Objects), [Lazy Loading](Lazy Loading), [Interface](Interface), [Design Pattern](Design Pattern), [Decorator Pattern](Decorator Pattern), [Direct Output](Direct Output), [Flexibility](Flexibility)
