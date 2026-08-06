# Loops
A loop is a control structure that allows to execute a block of code repeatedly based on a specified condition. Loops are essential for automating repetitive tasks and processing arrays or collections of data. PHP provides several types of loops, including: for, while, do...while and foreach.

The most popular loop is ``foreach()``.

Loops may hide in certain functions: for example, ``array_map()`` and ``array_walk()`` apply a method to every element in an array. 

Generators are closely related to the ``foreach()`` loop.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/loop.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/loop.html","name":"Loops","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:42:45 +0000","dateModified":"Thu, 23 Jul 2026 13:42:45 +0000","description":"A loop is a control structure that allows to execute a block of code repeatedly based on a specified condition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Loops.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Do While](do-while.ini.html)
+ [While](while.ini.html)
+ [Break](break.ini.html)
+ [Control Flow](control-flow.ini.html)
+ [Dangling Reference](dangling-reference.ini.html)
+ [For](for.ini.html)
+ [foreach()](foreach.ini.html)
+ [N+1 Query Problem](n-query.ini.html)
+ [Array Element](array-element.ini.html)
+ [InfiniteIterator](infiniteiterator.ini.html)
+ [Nesting](nesting.ini.html)
+ [Traversal](traversal.ini.html)
