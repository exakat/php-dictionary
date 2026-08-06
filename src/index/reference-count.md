# Reference Count
Reference counting is the way PHP keeps track of the usage of a value.

The count starts at 1 when the value is created, and it is increased when the value is passed around. It is decreased when the value is deleted or modified. When the reference count is zero, the value may be removed from the memory safely. 

Reference counting is a feature of the PHP engine: code usually uses it transparently. The only possible interaction is when using the garbage collector.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/reference-count.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/reference-count.html","name":"Reference Count","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Reference counting is the way PHP keeps track of the usage of a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Reference Count.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://www.php.net/manual/en/features.gc.refcounting-basics.php)**
## Related

+ [Garbage Collection](garbage-collection.ini.html)
+ [Zval](zval.ini.html)
