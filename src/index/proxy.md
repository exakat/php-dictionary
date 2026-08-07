# Proxy
A proxy class is a structural design pattern that provides a substitute or placeholder for another object. The proxy controls access to the original object, allowing actions to be performed before or after the request reaches it.

A proxy implements the same interface as the real subject, so it can be used wherever the original object is expected. The actual object is stored inside the proxy, which delegates calls to it.

Common proxy types are: virtual proxy, for lazy initialization, protection proxy, for access control, logging proxy, for recording operations for audit or debugging, and caching proxy, for storing results to avoid repeated work.

Proxy classes are often built using magic methods such as ``__call()``, ``__get()``, and ``__set()`` to intercept and forward access transparently. PHP 8.4 also introduced native lazy objects in the engine, which implement the virtual proxy pattern at the language level.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/proxy.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/proxy.html","name":"Proxy","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:48:06 +0000","dateModified":"Mon, 13 Jul 2026 18:48:06 +0000","description":"A proxy class is a structural design pattern that provides a substitute or placeholder for another object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Proxy.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Proxy"}]}]}</script>
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

**[Documentation](https://refactoring.guru/design-patterns/proxy/php/example)**
## See Also

+ [PHP: The Right Way — Design Patterns](https://phptherightway.com/pages/Design-Patterns.html)
+ [Revisiting Lazy-Loading Proxies in PHP](https://nicolas-grekas.medium.com/revisiting-lazy-loading-proxies-in-php-ef813eabeb67)

## Related

+ [Lazy Loading](lazy-loading.html)
+ [Lazy Objects](lazy-objects.html)
+ [Interface](interface.html)
+ [\_\_call() Method](__call.html)
+ [Aspect-Oriented](aspect-oriented.html)
+ [Facade](facade.html)
+ [Proxy Class](proxy-class.html)

## Related packages

+ [ocramius/proxy-manager](https://packagist.org/packages/ocramius/proxy-manager)
