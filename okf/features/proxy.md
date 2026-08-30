---
type: "PHP Feature"
title: "Proxy"
description: "A proxy class is a structural design pattern that provides a substitute or placeholder for another object."
resource: "https://refactoring.guru/design-patterns/proxy/php/example"
tags: ["design pattern", "object", "code architecture"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Proxy

A proxy class is a structural design pattern that provides a substitute or placeholder for another object. The proxy controls access to the original object, allowing actions to be performed before or after the request reaches it.

A proxy implements the same interface as the real subject, so it can be used wherever the original object is expected. The actual object is stored inside the proxy, which delegates calls to it.

Common proxy types are: virtual proxy, for lazy initialization, protection proxy, for access control, logging proxy, for recording operations for audit or debugging, and caching proxy, for storing results to avoid repeated work.

Proxy classes are often built using magic methods such as ``__call()``, ``__get()``, and ``__set()`` to intercept and forward access transparently. PHP 8.4 also introduced native lazy objects in the engine, which implement the virtual proxy pattern at the language level.

```php
<?php

    interface UserRepository {
        public function find(int $id): array;
    }
    
    class RealUserRepository implements UserRepository {
        public function find(int $id): array {
            // expensive database call
            return ['id' => $id, 'name' => 'Alice'];
        }
    }
    
    class CachingUserRepositoryProxy implements UserRepository {
        private array $cache = [];
    
        public function __construct(private UserRepository $real) {}
    
        public function find(int $id): array {
            if (!isset($this->cache[$id])) {
                $this->cache[$id] = $this->real->find($id);
            }
    
            return $this->cache[$id];
        }
    }
    
    $repo = new CachingUserRepositoryProxy(new RealUserRepository());
    $user = $repo->find(1); // hits the database
    $user = $repo->find(1); // served from cache

?>
```

## Documentation
- [https://refactoring.guru/design-patterns/proxy/php/example](https://refactoring.guru/design-patterns/proxy/php/example)

## See Also
- [PHP: The Right Way — Design Patterns](https://phptherightway.com/pages/Design-Patterns.html)
- [Revisiting Lazy-Loading Proxies in PHP](https://nicolas-grekas.medium.com/revisiting-lazy-loading-proxies-in-php-ef813eabeb67)

## Related
- [Lazy Loading](/features/lazy-loading.md)
- [Lazy Objects](/features/lazy-objects.md)
- [Interface](/features/interface.md)
- [__call() Method](/features/__call.md)
- [Aspect-Oriented](/features/aspect-oriented.md)
- [Facade](/features/facade.md)
- [Proxy Class](/features/proxy-class.md)

## Details
- Packagist: [ocramius/proxy-manager](https://packagist.org/packages/ocramius/proxy-manager)

