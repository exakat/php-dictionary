# RecursiveArrayIterator
``RecursiveArrayIterator`` extends ``ArrayIterator`` to allow recursive iteration over nested arrays and objects. It implements ``RecursiveIterator``, so it works with ``RecursiveIteratorIterator`` to traverse multidimensional arrays depth-first.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursivearrayiterator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursivearrayiterator.html","name":"RecursiveArrayIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 07:59:16 +0000","dateModified":"Fri, 14 Aug 2026 07:59:16 +0000","description":"RecursiveArrayIterator extends ArrayIterator to allow recursive iteration over nested arrays and objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/RecursiveArrayIterator.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"recursivearrayiterator"}]}]}</script>
```php
<?php

    $array = ['a', ['b', 'c'], ['d', ['e', 'f']]];
    $iterator = new RecursiveIteratorIterator(
        new RecursiveArrayIterator($array)
    );
    
    foreach ($iterator as $value) {
        echo $value . PHP_EOL;
    }
    // a b c d e f

?>
```

**[Documentation](https://www.php.net/manual/en/class.recursivearrayiterator.php)**
## Related

+ [Standard PHP Library (SPL)](spl.html)
+ [Iterator](iterator.html)
+ [Array, []](array.html)
+ [Recursion](recursion.html)
+ [Recursive Array](recursive-array.html)
+ [RecursiveIterator](recursiveiterator.html)
+ [SplSubject](splsubject.html)
