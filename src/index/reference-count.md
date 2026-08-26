# Reference Count
Reference counting is the way PHP keeps track of the usage of a value.

The count starts at 1 when the value is created, and it is increased when the value is passed around. It is decreased when the value is deleted or modified. When the reference count is zero, the value may be removed from the memory safely. 

Reference counting is a feature of the PHP engine: code usually uses it transparently. The only possible interaction is when using the garbage collector.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference-count.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference-count.html","name":"Reference Count","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:09:51 +0000","dateModified":"Fri, 14 Aug 2026 08:09:51 +0000","description":"Reference counting is the way PHP keeps track of the usage of a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference-count.html"]}],"keywords":["memory","engine"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/garbage-collection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zval.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/features.gc.refcounting-basics.php"},{"@type":"CreativeWork","name":"Garbage Collection","url":"https:\/\/www.php.net\/manual\/en\/features.gc.php"},{"@type":"CreativeWork","name":"gc_collect_cycles","url":"https:\/\/www.php.net\/manual\/en\/function.gc-collect-cycles.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"reference-count"}]}]}</script>
**[Documentation](https://www.php.net/manual/en/features.gc.refcounting-basics.php)**
## See Also

+ [Garbage Collection](https://www.php.net/manual/en/features.gc.php)
+ [gc_collect_cycles](https://www.php.net/manual/en/function.gc-collect-cycles.php)

## Related

+ [Garbage Collection](garbage-collection.html)
+ [Zval](zval.html)
