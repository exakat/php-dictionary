---
type: "PHP Feature"
title: "Proxy Class"
description: "A proxy class is a class that stands in for another class, intercepting calls and delegating them to the real object."
resource: "https://www.php.net/manual/en/language.oop5.lazy-objects.php"
tags: ["design pattern", "object", "php 8.4"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/language.oop5.lazy-objects.php](https://www.php.net/manual/en/language.oop5.lazy-objects.php)

## See Also
- [Using PHP 8.4's Lazy Objects](https://www.phparch.com/2025/01/using-php-8-4s-lazy-objects/)
- [PHP 8.4: Lazy Objects—Ghost vs Proxy (When to Use Which)](https://idnasirasira.com/blog/php-84-lazy-objects-ghost-vs-proxy)

## Related
- [Proxy](/features/proxy.md)
- [Lazy Objects](/features/lazy-objects.md)
- [Lazy Loading](/features/lazy-loading.md)
- [Interface](/features/interface.md)
- [Design Pattern](/features/design-pattern.md)
- [Decorator Pattern](/features/decorator.md)
- [Direct Output](/features/direct-output.md)
- [Flexibility](/features/flexibility.md)

## Details
- PHP since: 8.4
- Packagist: [ocramius/proxy-manager](https://packagist.org/packages/ocramius/proxy-manager)

