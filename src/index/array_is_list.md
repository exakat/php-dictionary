# array\_is\_list()
``array_is_list()`` is a native PHP function that checks if the given array is a list.

An array is considered a list if its keys are sequential integers starting from 0. Associative arrays or arrays with gaps, non-integer or out of sequence keys are not considered lists. This function was introduced in version 8.1 to help distinguish between sequential and associative arrays, which is useful when working with functions like ``json_encode()`` that treat lists as JSON arrays and associative arrays as JSON objects.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_is_list.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_is_list.html","name":"array_is_list()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:16:10 +0000","dateModified":"Mon, 13 Jul 2026 09:16:10 +0000","description":"array_is_list() is a native PHP function that checks if the given array is a list","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_is_list.html"]}],"keywords":["native function","array"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json_encode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/count.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_keys.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array-is-list.php"},{"@type":"CreativeWork","name":"How to Encode an Array in JSON with PHP (Production-Ready Guide)","url":"https:\/\/thelinuxcode.com\/how-to-encode-an-array-in-json-with-php-production-ready-guide\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_is_list"}]}]}</script>
```php
<?php

    $list = [1, 2, 3];
    var_dump(array_is_list($list)); // true
    
    $assoc = ['a' => 1, 'b' => 2];
    var_dump(array_is_list($assoc)); // false
    
    $empty = [];
    var_dump(array_is_list($empty)); // true
    
    $gapped = [0 => 'a', 2 => 'c'];
    var_dump(array_is_list($gapped)); // false

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-is-list.php)**
## See Also

+ [How to Encode an Array in JSON with PHP (Production-Ready Guide)](https://thelinuxcode.com/how-to-encode-an-array-in-json-with-php-production-ready-guide/)

## Related

+ [is\_array()](is_array.html)
+ [json\_encode()](json_encode.html)
+ [count()](count.html)
+ [array\_keys()](array_keys.html)
