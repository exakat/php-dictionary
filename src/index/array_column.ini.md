# array\_column
``array_column()`` extracts the index or property of the second argument from a list of arrays or objects passed as first argument. 

It may also assign a key in regards to that value, from a second index or property. 

``array_column()`` omits silently any missing index or property. 

``array_column()`` uses the whole array or object as value, when the second argument is null.

``array_column()`` is more efficient than custom code to convert an array into a map.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_column.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_column.ini.html","name":"array_column","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``array_column()`` extracts the index or property of the second argument from a list of arrays or objects passed as first argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_column.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [array\_combine()](array_combine.ini.html)
+ [Hash](hash.ini.html)
+ [Map](map.ini.html)
+ [Array, []](array.ini.html)
+ [Index For Arrays](index-array.ini.html)
