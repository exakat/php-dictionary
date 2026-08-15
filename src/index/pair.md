# Pair
A pair is a data structure that holds exactly two related values, often a key and a value, or two correlated items. It is one of the simplest compound data structures.

Pairs are commonly represented as a two-element indexed array, a two-element associative array, or a simple object with two properties. PHP does not have a built-in pair type, but the ``Ds\Pair`` class from the Data Structures extension provides a typed key–value pair.

Pairs appear in many contexts: iterating over associative arrays yields key–value pairs, ``array_map()`` with ``null`` as the callback zips arrays into indexed pairs, and functions such as ``array_combine()`` associate two arrays as paired keys and values.

Pairs are also the basis of more complex structures such as maps and dictionaries.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pair.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pair.html","name":"Pair","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 16:03:17 +0000","dateModified":"Wed, 08 Jul 2026 16:03:17 +0000","description":"A pair is a data structure that holds exactly two related values, often a key and a value, or two correlated items","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Pair.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pair"}]}]}</script>
```php
<?php

    // Native: two-element array as a pair
    $pair = ['key' => 'value'];
    
    // Ds\Pair from the Data Structures extension
    $pair = new \Ds\Pair('name', 'Alice');
    echo $pair->key;   // name
    echo $pair->value; // Alice
    
    // Iterating key-value pairs
    $map = ['a' => 1, 'b' => 2];
    foreach ($map as $key => $value) {
        echo "$key => $value\n";
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.ds-pair.php)**
## Related

+ [Array, []](array.html)
+ [Associative Array](associative-array.html)
+ [Data Structure](ds.html)
+ [Data Structure](datastructure.html)
+ [Map](map.html)
+ [Tuple](tuple.html)
