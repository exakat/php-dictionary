# List
``list()`` acts as the contrary to ``array()``: it will break an array into individual elements, and assign them to the arguments of the list. 

``list()`` also has a short array version, which is ``[ ]`` the square brackets. Those square brackets are only appearing on the left side of an assignation. 

``list()`` may omit extracted values by skipping their value, and leaving seemingly empty arguments. ``list()`` also supports double-arrow notation, where the key is provided. 

``list()`` may be nested. It may also be used with ``foreach()`` structures.

``list()`` looks like a function, though it is the only one to appears on the left part of an assignation, and is actually a language-construct.

A list is also the name given to arrays where the index are the automatic ones. 

``list()`` is the only expression where successive commas may be used.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/list.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/list.html","name":"List","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"list() acts as the contrary to array(): it will break an array into individual elements, and assign them to the arguments of the list","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/List.html"]}],"keywords":["native function","_arrayOK","language construct"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/comma.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/double-arrow.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/square-bracket.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tree.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/foreach.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sequence.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/swap.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assignment.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multiple-return-value.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/structural-pattern-matching.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tuple.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/destructuring.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.list.php"},{"@type":"CreativeWork","name":"List-o-mania","url":"https:\/\/markbakeruk.net\/2022\/06\/06\/list-o-mania\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"list"}]}]}</script>
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

+ [Array, []](array.html)
+ [Comma](comma.html)
+ [Double Arrow](double-arrow.html)
+ [Square Brackets](square-bracket.html)
+ [Tree](tree.html)
+ [foreach()](foreach.html)
+ [Sequence](sequence.html)
+ [Swap](swap.html)
+ [Assignment](assignment.html)
+ [Multiple Return Values](multiple-return-value.html)
+ [Structural Pattern Matching](structural-pattern-matching.html)
+ [Tuple](tuple.html)
+ [Destructuring](destructuring.html)
