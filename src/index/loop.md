# Loops
A loop is a control structure that allows to execute a block of code repeatedly based on a specified condition. Loops are essential for automating repetitive tasks and processing arrays or collections of data. PHP provides several types of loops, including: for, while, do...while and foreach.

The most popular loop is ``foreach()``.

Loops may hide in certain functions: for example, ``array_map()`` and ``array_walk()`` apply a method to every element in an array. 

Generators are closely related to the ``foreach()`` loop.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/loop.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/loop.html","name":"Loops","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 12 Aug 2026 04:17:43 +0000","dateModified":"Wed, 12 Aug 2026 04:17:43 +0000","description":"A loop is a control structure that allows to execute a block of code repeatedly based on a specified condition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Loops.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/do-while.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/while.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/break.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dangling-reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/for.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/foreach.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/n-query.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-element.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/infiniteiterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nesting.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/traversal.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.control-structures.php"},{"@type":"CreativeWork","name":"PHP Loops: Concepts, Syntax, and Use Cases","url":"https:\/\/intellipaat.com\/blog\/php-loops\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"loop"}]}]}</script>
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

+ [PHP Loops: Concepts, Syntax, and Use Cases](https://intellipaat.com/blog/php-loops/)

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
