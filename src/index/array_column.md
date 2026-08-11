# array\_column
``array_column()`` extracts the index or property of the second argument from a list of arrays or objects passed as first argument. 

It may also assign a key in regards to that value, from a second index or property. 

``array_column()`` omits silently any missing index or property. 

``array_column()`` uses the whole array or object as value, when the second argument is null.

``array_column()`` is more efficient than custom code to convert an array into a map.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_column.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_column.html","name":"array_column","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 17:07:50 +0000","dateModified":"Mon, 10 Aug 2026 17:07:50 +0000","description":"``array_column()`` extracts the index or property of the second argument from a list of arrays or objects passed as first argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_column.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_column"}]}]}</script>
```php
<?php

    $list = [
        ['a' => 1, 'b' => 'x'],
        ['a' => 2, 'b' => 'y'],
        ['a' => 3, 'd' => 'z'],
    ];
    
    array_column($list, 'a'); // [1, 2, 3]
    
    array_column($list, 'b'); // [x, y]
    
    array_column($list, 'a', 'b'); // [x => 1, y => 2, 0 => 3]
    
    class X {
        function __construct(public int $a, public string $b, public string $c) {}
    }
    
    $list = [
        new X(a: 1, b: 'x'),
        new X(a: 2, b: 'y'),
        new X(a: 3, d: 'z'),
    ];
    
    array_column($list, 'a'); // [1, 2, 3]

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-column.php)**
## See Also

+ [array_column() on 3v4l.org](https://3v4l.org/Nc1uL#veol)

## Related

+ [array\_combine()](array_combine.html)
+ [Hash](hash.html)
+ [Map](map.html)
+ [Array, []](array.html)
+ [Index For Arrays](index-array.html)
