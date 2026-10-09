# WeakReference
``WeakReference`` is a final class that holds a reference to an object without keeping that object alive. The referenced object is destroyed as soon as its reference count drops to zero, and ``WeakReference::get()`` then returns ``null``.

Objects are wrapped with the static factory ``WeakReference::create()``, which takes an object and returns a ``WeakReference``. Calling ``create()`` twice on the same object returns the same ``WeakReference`` instance. The constructor is blocked, so ``new WeakReference()`` throws an ``Error``.

``WeakReference`` cannot be serialized. It is useful for cache-like structures, where the cache should not keep its entries alive. For a map keyed by objects, see ``WeakMap``.

The class was introduced in version 7.4. Since version 8.4, ``var_dump()`` on a ``WeakReference`` shows the referenced object, or ``null`` if it has been destroyed.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/weakreference.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/weakreference.html","name":"WeakReference","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 09 Oct 2026 17:25:55 +0000","dateModified":"Fri, 09 Oct 2026 17:25:55 +0000","description":"WeakReference is a final class that holds a reference to an object without keeping that object alive","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/weakreference.html"]}],"alternateName":["weak-reference-class"],"keywords":["php class","memory","reference"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/weak-reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/weakmap.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/garbage-collection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference-count.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circular-reference.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.weakreference.php"},{"@type":"CreativeWork","name":"PHP Manual: WeakReference","url":"https:\/\/www.php.net\/manual\/en\/class.weakreference.php"},{"@type":"CreativeWork","name":"PHP Manual: WeakReference::create()","url":"https:\/\/www.php.net\/manual\/en\/weakreference.create.php"},{"@type":"CreativeWork","name":"PHP 8.0 feature focus: Weak maps","url":"https:\/\/platform.sh\/blog\/php-80-feature-focus-weak-maps\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.38","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"weakreference"}]}]}</script>
```php
<?php

$obj = new stdClass;
$weakref = WeakReference::create($obj);

var_dump($weakref->get());   // object(stdClass)#1 (0) {}

unset($obj);

var_dump($weakref->get());   // NULL

// new WeakReference();      // Error: Direct instantiation of WeakReference is not allowed, use WeakReference::create instead

// WeakReference::create(42); // TypeError: WeakReference::create(): Argument #1 ($object) must be of type object

?>
```

**[Documentation](https://www.php.net/manual/en/class.weakreference.php)**
## See Also

+ [PHP Manual: WeakReference](https://www.php.net/manual/en/class.weakreference.php)
+ [PHP Manual: WeakReference::create()](https://www.php.net/manual/en/weakreference.create.php)
+ [PHP 8.0 feature focus: Weak maps](https://platform.sh/blog/php-80-feature-focus-weak-maps/)

## Related

+ [Weak References](weak-reference.html)
+ [Weakmap](weakmap.html)
+ [Garbage Collection](garbage-collection.html)
+ [References](reference.html)
+ [Reference Count](reference-count.html)
+ [Circular Reference](circular-reference.html)
