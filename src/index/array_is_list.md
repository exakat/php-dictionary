# array\_is\_list()
``array_is_list()`` is a native PHP function that checks if the given array is a list.

An array is considered a list if its keys are sequential integers starting from 0. Associative arrays or arrays with gaps, non-integer or out of sequence keys are not considered lists. This function was introduced in version 8.1 to help distinguish between sequential and associative arrays, which is useful when working with functions like ``json_encode()`` that treat lists as JSON arrays and associative arrays as JSON objects.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_is_list.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_is_list.html","name":"array_is_list()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:16:10 +0000","dateModified":"Mon, 13 Jul 2026 09:16:10 +0000","description":"``array_is_list()`` is a native PHP function that checks if the given array is a list","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_is_list().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [is\_array()](is_array.ini.html)
+ [json\_encode()](json_encode.ini.html)
+ [count()](count.ini.html)
+ [array\_keys()](array_keys.ini.html)
