# Index For Arrays
A index is the identifier of an specific element in an array. They may automatically generated, by simply omitting them at creation time. 

PHP index may be integers or strings only. Other data types generate an error or a type conversion. For example, floats are turned into integer. integer-shaped strings will also be turned into integer.

PHP index start at 0. They may be automatically assigned by appending a new value with the ``[]`` operator: then, they use the greatest available index + 1.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index-array.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index-array.html","name":"Index For Arrays","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A index is the identifier of an specific element in an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index-array.html"]}],"alternateName":["key"],"keywords":["array","data-container"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-container.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/collection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/map.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/negative-index.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/square-bracket.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-element.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_keys.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/automatic-index.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unset.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-dot-notation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_column.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_push.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/offset.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multidimensional-array.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.array.php"},{"@type":"CreativeWork","name":"PHP: Frankenstein arrays","url":"https:\/\/vazaha.blog\/en\/9\/php-frankenstein-arrays"},{"@type":"CreativeWork","name":"Filtering an array by keys in PHP","url":"https:\/\/yellowduck.be\/posts\/filtering-an-array-by-keys-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"index-array"}]}]}</script>
```php
<?php

    $array = ['a', 'b', 'c'];

    echo $array[0];

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.array.php)**
## See Also

+ [PHP: Frankenstein arrays](https://vazaha.blog/en/9/php-frankenstein-arrays)
+ [Filtering an array by keys in PHP](https://yellowduck.be/posts/filtering-an-array-by-keys-in-php)

## Related

+ [Array, []](array.html)
+ [Data Container](data-container.html)
+ [Collection](collection.html)
+ [Index](index.html)
+ [Map](map.html)
+ [Negative Index](negative-index.html)
+ [Square Brackets](square-bracket.html)
+ [Array Element](array-element.html)
+ [array\_keys()](array_keys.html)
+ [Automatic Index](automatic-index.html)
+ [unset()](unset.html)
+ [Array Dot Notation](array-dot-notation.html)
+ [array\_column](array_column.html)
+ [array\_push()](array_push.html)
+ [Offset](offset.html)
+ [Multidimensional Array](multidimensional-array.html)
