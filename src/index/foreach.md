# foreach()
``foreach()`` is the most popular type of loop. 

The ``foreach()`` loop uses all the elements of the source, and assign them to blind variables. By default, only the value is assigned; when using the ``$key => $value`` syntax, the key is also assigned. Then the block is executed with the assigned values. 

The source may be an array, or an object with the ``Traversable`` interface: this includes iterators and generators, but also custom classes. Other types are forbidden.

Part of the block execution may be skipped by using the ``continue`` keyword.

The value may be a reference: then it actually references the original value, which then may be modified in the source. Do not forget to unset referenced variables after the loop, to avoid the dangling reference syndrome, when the last value is changed.

The value may be an array, collecting several values at the same time. 

The value may be an ``list()`` construct: it sets several variables at the same time, to be used in the loop block. Any missing value yields a warning. 

``foreach()`` may also be replaced by array functions, such as ``array_map()``, ``implode()`` or ``array_merge()``, for specific operations. It is usually recommended to use native functions, when available.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/foreach.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/foreach.html","name":"foreach()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"foreach() is the most popular type of loop","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/foreach().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"foreach"}]}]}</script>
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

+ [Continue](continue.html)
+ [For](for.html)
+ [Loops](loop.html)
+ [While](while.html)
+ [Do While](do-while.html)
+ [As](as.html)
+ [Control Flow](control-flow.html)
+ [Control Structures](control-structure.html)
+ [Iterator](iterator.html)
+ [List](list.html)
+ [Blind Variable](blind-variable.html)
+ [Blind Variable](blind-key.html)
+ [ClosedGeneratorException](closedgeneratorexception.html)
+ [IteratorAggregate](iteratoraggregate.html)
+ [Traversal](traversal.html)
