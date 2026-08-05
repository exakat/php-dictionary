# foreach()
``foreach()`` is the most popular type of loop. 

The ``foreach()`` loop uses all the elements of the source, and assign them to blind variables. By default, only the value is assigned; when using the ``$key => $value`` syntax, the key is also assigned. Then the block is executed with the assigned values. 

The source may be an array, or an object with the ``Traversable`` interface: this includes iterators and generators, but also custom classes. Other types are forbidden.

Part of the block execution may be skipped by using the ``continue`` keyword.

The value may be a reference: then it actually references the original value, which then may be modified in the source. Do not forget to unset referenced variables after the loop, to avoid the dangling reference syndrome, when the last value is changed.

The value may be an array, collecting several values at the same time. 

The value may be an ``list()`` construct: it sets several variables at the same time, to be used in the loop block. Any missing value yields a warning. 

``foreach()`` may also be replaced by array functions, such as ``array_map()``, ``implode()`` or ``array_merge()``, for specific operations. It is usually recommended to use native functions, when available.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/foreach.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/foreach.ini.html","name":"foreach()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 18 Jun 2026 13:53:43 +0000","dateModified":"Thu, 18 Jun 2026 13:53:43 +0000","description":"``foreach()`` is the most popular type of loop","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/foreach().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    /*
    foreach($source as $key => $value) {
        // block
    }
    */
    
    foreach([11,12,13] as $id => $value) {
        print "$id => $value\n";
        // 0 => 11
        // 1 => 12
        // 2 => 13
    }
    
    //foreach([[21,22], [33, 34]] as list($a, $b)) {
    foreach([[21,22], [33, 34]] as [$a, $b]) {
        print "$a $b\n";
        // 21 22
        // 33 34
    }

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.foreach.php)**
## See Also

+ [Introduction To The Foreach Loop In PHP (With Code Examples)](https://zerotomastery.io/blog/PHP-foreach-loop-explained/)
+ [PHP foreach](https://zetcode.com/php/foreach/)

## Related

+ [Continue](continue.ini.html)
+ [For](for.ini.html)
+ [Loops](loop.ini.html)
+ [While](while.ini.html)
+ [Do While](do-while.ini.html)
+ [As](as.ini.html)
+ [Control Flow](control-flow.ini.html)
+ [Control Structures](control-structure.ini.html)
+ [Iterator](iterator.ini.html)
+ [List](list.ini.html)
+ [Blind Variable](blind-variable.ini.html)
+ [Blind Variable](blind-key.ini.html)
+ [ClosedGeneratorException](closedgeneratorexception.ini.html)
+ [IteratorAggregate](iteratoraggregate.ini.html)
+ [Traversal](traversal.ini.html)
