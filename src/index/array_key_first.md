# array\_key\_first()
``array_key_first()`` is a native PHP function that returns the first key of an array, or null if the array is empty.

This function does not modify the internal pointer of the array, unlike using ``reset()`` and ``key()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_key_first.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_key_first.html","name":"array_key_first()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 26 Aug 2026 10:16:27 +0000","dateModified":"Wed, 26 Aug 2026 10:16:27 +0000","description":"array_key_first() is a native PHP function that returns the first key of an array, or null if the array is empty","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_key_first.html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_search.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array-key-first.php"},{"@type":"CreativeWork","name":"Introduced array_key_first() and array_key_last() functions - PHP 7.3","url":"https:\/\/php.watch\/versions\/7.3\/array-key-first-last"},{"@type":"CreativeWork","name":"array_key_last()","url":"https:\/\/www.php.net\/manual\/en\/function.array-key-last.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_key_first"}]}]}</script>
```php
<?php

    $array = ['a' => 1, 'b' => 2, 'c' => 3];
    
    $key = array_key_first($array);
    // 'a'

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-key-first.php)**
## See Also

+ [Introduced array_key_first() and array_key_last() functions - PHP 7.3](https://php.watch/versions/7.3/array-key-first-last)
+ [array_key_last()](https://www.php.net/manual/en/function.array-key-last.php)

## Related

+ [Array, []](array.html)
+ [array\_search](array_search.html)
