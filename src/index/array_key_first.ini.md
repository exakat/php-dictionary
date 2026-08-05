# array\_key\_first()
``array_key_first()`` is a native PHP function that returns the first key of an array, or null if the array is empty.

This function does not modify the internal pointer of the array, unlike using ``reset()`` and ``key()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_key_first.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_key_first.ini.html","name":"array_key_first()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 12 Jul 2026 20:12:52 +0000","dateModified":"Sun, 12 Jul 2026 20:12:52 +0000","description":"``array_key_first()`` is a native PHP function that returns the first key of an array, or null if the array is empty","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_key_first().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $array = ['a' => 1, 'b' => 2, 'c' => 3];
    
    $key = array_key_first($array);
    // 'a'

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-key-first.php)**
## Related

+ [Array, []](array.ini.html)
+ [array\_search](array_search.ini.html)
