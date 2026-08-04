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

## See Also

+ [PHP: The Right Way — Design Patterns](https://phptherightway.com/pages/Design-Patterns.html)
+ [Revisiting Lazy-Loading Proxies in PHP](https://nicolas-grekas.medium.com/revisiting-lazy-loading-proxies-in-php-ef813eabeb67)

Related : [Lazy Loading](Lazy Loading), [Lazy Objects](Lazy Objects), [Interface](Interface), [__call() Method](__call() Method), [Aspect-Oriented](Aspect-Oriented), [Facade](Facade), [Proxy Class](Proxy Class)
