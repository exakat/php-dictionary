# Loops
A loop is a control structure that allows to execute a block of code repeatedly based on a specified condition. Loops are essential for automating repetitive tasks and processing arrays or collections of data. PHP provides several types of loops, including: for, while, do...while and foreach.

The most popular loop is ``foreach()``.

Loops may hide in certain functions: for example, ``array_map()`` and ``array_walk()`` apply a method to every element in an array. 

Generators are closely related to the ``foreach()`` loop.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/loop.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/loop.html","name":"Loops","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 09:03:03 +0000","dateModified":"Tue, 11 Aug 2026 09:03:03 +0000","description":"A loop is a control structure that allows to execute a block of code repeatedly based on a specified condition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Loops.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"loop"}]}]}</script>
```php
<?php

    foreach([11,12,13] as $id => $value) {
        print "$id => $value\n";
    }
    
    for ($i = 1; $i <= 10; $i++) {
        echo $i;
    }
    
    $i = 10;
    while ($i <= 10) {
        echo $i++;  
    }
    
    $i = 10;
    do {
        echo $i++;  
    } while ($i <= 10);

?>
```

**[Documentation](https://www.php.net/manual/en/language.control-structures.php)**
## See Also

+ [Control Structures](https://www.php.net/manual/en/language.control-structures.php)

## Related

+ [Do While](do-while.html)
+ [While](while.html)
+ [Break](break.html)
+ [Control Flow](control-flow.html)
+ [Dangling Reference](dangling-reference.html)
+ [For](for.html)
+ [foreach()](foreach.html)
+ [N+1 Query Problem](n-query.html)
+ [Array Element](array-element.html)
+ [InfiniteIterator](infiniteiterator.html)
+ [Nesting](nesting.html)
+ [Traversal](traversal.html)
