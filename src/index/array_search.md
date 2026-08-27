# array\_search
``array_search()`` is a native PHP function that searches an array for a value and returns the corresponding key if found, or ``false`` if not found.

It is often used to check if a value exists in an array. When the presence of the value is the main goal of the check, it is advantageously replaced by ``in_array()``. Otherwise, this function is prone to the same trap as ``strpos()``: the returned key may be ``0``, the first element, which is confused with ``false`` in a loose comparison.

``array_search()`` performs a loose comparison by default. Pass ``true`` as the third argument to enable strict comparison.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_search.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_search.html","name":"array_search","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:36:53 +0000","dateModified":"Mon, 13 Jul 2026 09:36:53 +0000","description":"array_search() is a native PHP function that searches an array for a value and returns the corresponding key if found, or false if not found","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_search.html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strpos-syndrom.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identical.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/in_array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_find.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_find_key.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_key_first.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sentinel.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array-search.php"},{"@type":"CreativeWork","name":"How to Search in a PHP Associative Array \u2014 Fast tips","url":"https:\/\/medium.com\/@valerio_27709\/how-to-search-in-a-php-associative-array-fast-tips-5890cdf818e0"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_search"}]}]}</script>
```php
<?php

    $colors = ['red', 'green', 'blue'];

    if(array_search('red', $colors)) {
        print "Found red.";
    }

    // Error! 'red' is at key 0, which is confused with false
    if(array_search('red', $colors)) {
        print "Found red.";
    }

    // This is OK
    if(array_search('red', $colors) !== false) {
        print "Found red.";
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-search.php)**
## See Also

+ [How to Search in a PHP Associative Array — Fast tips](https://medium.com/@valerio_27709/how-to-search-in-a-php-associative-array-fast-tips-5890cdf818e0)

## Related

+ [Strpos() Syndrome](strpos-syndrom.html)
+ [Identical Operator](identical.html)
+ [in\_array()](in_array.html)
+ [array\_find()](array_find.html)
+ [array\_find\_key()](array_find_key.html)
+ [array\_key\_first()](array_key_first.html)
+ [Sentinel](sentinel.html)
