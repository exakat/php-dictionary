# List
``list()`` acts as the contrary to ``array()``: it will break an array into individual elements, and assign them to the arguments of the list. 

``list()`` also has a short array version, which is ``[ ]`` the square brackets. Those square brackets are only appearing on the left side of an assignation. 

``list()`` may omit extracted values by skipping their value, and leaving seemingly empty arguments. ``list()`` also supports double-arrow notation, where the key is provided. 

``list()`` may be nested. It may also be used with ``foreach()`` structures.

``list()`` looks like a function, though it is the only one to appears on the left part of an assignation, and is actually a language-construct.

A list is also the name given to arrays where the index are the automatic ones. 

``list()`` is the only expression where successive commas may be used.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/list.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/list.ini.html","name":"List","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:21:22 +0000","dateModified":"Tue, 14 Jul 2026 06:21:22 +0000","description":"``list()`` acts as the contrary to ``array()``: it will break an array into individual elements, and assign them to the arguments of the list","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/List.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    list($a, $b, $c) = [1,2,3];
    
    [$a, , [$c]] = [1,2,[3],4];
    
    [2 => $c, 0 => $a] = [1,2,3,4];
    
    $rows = [[1,2], [3, 4]];
    foreach($rows as [$a, $b]) {
        print "$a + $b\n";
    }
    
    // Only values are important here
    $list = range(10, 12);
    
    // some keys are missing => not a list
    $array = array(10, 4 => 12);

?>
```

**[Documentation](https://www.php.net/manual/en/function.list.php)**
## See Also

+ [List-o-mania](https://markbakeruk.net/2022/06/06/list-o-mania/)

## Related

+ [Array, []](array.ini.html)
+ [Comma](comma.ini.html)
+ [Double Arrow](double-arrow.ini.html)
+ [Square Brackets](square-bracket.ini.html)
+ [Tree](tree.ini.html)
+ [foreach()](foreach.ini.html)
+ [Sequence](sequence.ini.html)
+ [Swap](swap.ini.html)
+ [Assignment](assignment.ini.html)
+ [Multiple Return Values](multiple-return-value.ini.html)
+ [Structural Pattern Matching](structural-pattern-matching.ini.html)
+ [Tuple](tuple.ini.html)
