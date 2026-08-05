# RecursiveArrayIterator
``RecursiveArrayIterator`` extends ``ArrayIterator`` to allow recursive iteration over nested arrays and objects. It implements ``RecursiveIterator``, so it works with ``RecursiveIteratorIterator`` to traverse multidimensional arrays depth-first.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/recursivearrayiterator.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/recursivearrayiterator.ini.html","name":"RecursiveArrayIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:45:28 +0000","dateModified":"Mon, 13 Jul 2026 18:45:28 +0000","description":"``RecursiveArrayIterator`` extends ``ArrayIterator`` to allow recursive iteration over nested arrays and objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/RecursiveArrayIterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Standard PHP Library (SPL)](spl.ini.html)
+ [Iterator](iterator.ini.html)
+ [Array, []](array.ini.html)
+ [Recursion](recursion.ini.html)
+ [Recursive Array](recursive-array.ini.html)
+ [RecursiveIterator](recursiveiterator.ini.html)
+ [SplSubject](splsubject.ini.html)
