# Monkey Patch
A monkey patch is a runtime change to the behavior of existing code, typically a function, method, or built-in, without modifying its original source file. It is usually done to work around a bug, add missing behavior temporarily, or, most commonly, to isolate tests from non-deterministic dependencies such as ``time()``, ``rand()``, or the filesystem.

PHP does not support ``open-class``, reopening a previously declared class or redefining an already-declared function directly: doing either a second time raises a fatal error. Real-world PHP monkey-patching instead relies on two mechanisms. The first, used almost exclusively in tests, exploits ``fallback-to-global``: an unqualified call to a built-in function, made from inside a namespace, resolves to a same-named function declared in that namespace first, and only falls back to the global one if none exists. Declaring a namespaced ``time()`` therefore patches every unqualified call to ``time()`` made from code living in that namespace, without touching the real global function. This is exactly how the ``php-mock/php-mock`` package works.

The second mechanism, more invasive and closer to what other languages call monkey-patching, uses the ``uopz`` extension to redefine an existing function or method's body in place, anywhere it is called from, no namespace trick required. This is more powerful, but also more dangerous: it mutates the engine's own view of the function, for the rest of the process.

Monkey patches are invisible from the patched code's own source: nothing in ``Order`` hints that ``time()`` has been swapped out. They should generally be confined to test suites, and removed, ``disable()``-d, or scoped as narrowly as possible once the test that needed them is done.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monkey-patch.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monkey-patch.html","name":"Monkey Patch","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 17 Sep 2026 07:50:45 +0000","dateModified":"Thu, 17 Sep 2026 07:50:45 +0000","description":"A monkey patch is a runtime change to the behavior of existing code, typically a function, method, or built-in, without modifying its original source file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monkey-patch.html"]}],"alternateName":["monkey-patching","duck-punching"],"keywords":["test","concept","namespace"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fallback-to-global.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/open-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uopz.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mock.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__call.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decorator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test-data-provider.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Monkey_patch"},{"@type":"CreativeWork","name":"php-mock\/php-mock","url":"https:\/\/github.com\/php-mock\/php-mock"},{"@type":"CreativeWork","name":"PHP: Namespace fallback rule","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.fallback.php"},{"@type":"CreativeWork","name":"UOPZ repository","url":"https:\/\/github.com\/krakjoe\/uopz"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.37","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"monkey-patch"}]}]}</script>
```php
<?php

    namespace App;
    
    // A namespaced time() shadows the global one for every unqualified
    // call made from within the App namespace: a classic test-only monkey patch.
    function time(): int {
        return 1700000000; // frozen clock, no real system time involved
    }
    
    class Order {
        public function createdAt(): int {
            return time(); // resolves to App\time(), not the global \time()
        }
    }
    
    $order = new Order();
    echo $order->createdAt(); // 1700000000, every time, regardless of the real clock

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Monkey_patch)**
## See Also

+ [php-mock/php-mock](https://github.com/php-mock/php-mock)
+ [PHP: Namespace fallback rule](https://www.php.net/manual/en/language.namespaces.fallback.php)
+ [UOPZ repository](https://github.com/krakjoe/uopz)

## Related

+ [Fallback To Global](fallback-to-global.html)
+ [Open Class](open-class.html)
+ [User Operations For Zend (UOPZ)](uopz.html)
+ [Mock](mock.html)
+ [Namespaces](namespace.html)
+ [\_\_call() Method](__call.html)
+ [Decorator Pattern](decorator.html)
+ [Test Data Provider](test-data-provider.html)

## Related packages

+ [php-mock/php-mock](https://packagist.org/packages/php-mock/php-mock)
+ [php-mock/php-mock-phpunit](https://packagist.org/packages/php-mock/php-mock-phpunit)
