# unset()
``unset()`` removes a variable, an array item or an property. This feature used to be available as a function call ``unset()`` or as a type cast ``(unset)``. The type-cast was removed in version 7.2. 

It is not possible to remove a static property, but it is possible to remove a property: a defined property will be reverted to its definition, while an undefined property is removed. It may end up being uninitialized if it does not have a default value.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unset.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unset.html","name":"unset()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"unset() removes a variable, an array item or an property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unset.html"]}],"keywords":["keyword","cast","removed feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index-array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/garbage-collection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/local-variable.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.unset.php"},{"@type":"CreativeWork","name":"PHP unset Keyword","url":"https:\/\/zetcode.com\/php\/unset-keyword\/"},{"@type":"CreativeWork","name":"Demystifying PHP\u2018s Unset() Function","url":"https:\/\/thelinuxcode.com\/php-unset-function\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"unset"}]}]}</script>
```php
<?php

    $a = ['b' => 1];
    unset($a['b']); // unset an element
    unset($a);      // unset the whole array
    
    var_dump(isset($a)); // false

?>
```

**[Documentation](https://www.php.net/manual/en/function.unset.php)**
## See Also

+ [PHP unset Keyword](https://zetcode.com/php/unset-keyword/)
+ [Demystifying PHP‘s Unset() Function](https://thelinuxcode.com/php-unset-function/)

## Related

+ [Variables](variable.html)
+ [Index For Arrays](index-array.html)
+ [Garbage Collection](garbage-collection.html)
+ [Local Variable](local-variable.html)
