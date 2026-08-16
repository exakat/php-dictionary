# Weak References
Weak references allow the programmer to retain a reference to an object which does not prevent the object from being destroyed. They are useful for implementing cache like structures. 
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/weak-reference.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/weak-reference.html","name":"Weak References","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Weak references allow the programmer to retain a reference to an object which does not prevent the object from being destroyed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Weak References.html"]}],"keywords":["memory"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circular-reference.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.weakreference.php"},{"@type":"CreativeWork","name":"PHP 8.0 feature focus: Weak maps","url":"https:\/\/platform.sh\/blog\/php-80-feature-focus-weak-maps\/"},{"@type":"CreativeWork","name":"WeakReferences","url":"https:\/\/www.cmuir.co.nz\/post\/weakreferences\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"weak-reference"}]}]}</script>
```php
<?php

$obj = new stdClass;
$weakref = WeakReference::create($obj);

var_dump($weakref->get());
unset($obj);

var_dump($weakref->get());
// NULL

?>
```

**[Documentation](https://www.php.net/manual/en/class.weakreference.php)**
## See Also

+ [PHP 8.0 feature focus: Weak maps](https://platform.sh/blog/php-80-feature-focus-weak-maps/)
+ [WeakReferences](https://www.cmuir.co.nz/post/weakreferences/)

## Related

+ [References](reference.html)
+ [Circular Reference](circular-reference.html)
