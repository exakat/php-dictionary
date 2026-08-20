# RecursiveArrayIterator
``RecursiveArrayIterator`` extends ``ArrayIterator`` to allow recursive iteration over nested arrays and objects. It implements ``RecursiveIterator``, so it works with ``RecursiveIteratorIterator`` to traverse multidimensional arrays depth-first.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursivearrayiterator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursivearrayiterator.html","name":"RecursiveArrayIterator","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 18 Aug 2026 05:24:35 +0000","dateModified":"Tue, 18 Aug 2026 05:24:35 +0000","description":"RecursiveArrayIterator extends ArrayIterator to allow recursive iteration over nested arrays and objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/RecursiveArrayIterator.html"]}],"keywords":["spl","iterator","array"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursion.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursive-array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursiveiterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splsubject.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.recursivearrayiterator.php"},{"@type":"CreativeWork","name":"Using SPL Iterators, Part 1","url":"https:\/\/www.sitepoint.com\/using-spl-iterators-1\/"},{"@type":"CreativeWork","name":"PHP: Doing Recursion With Recursive IteratorIterators","url":"https:\/\/dev.to\/gbhorwood\/php-doing-recursion-with-recursive-iteratoriterators-fj1"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"recursivearrayiterator"}]}]}</script>
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
## See Also

+ [Using SPL Iterators, Part 1](https://www.sitepoint.com/using-spl-iterators-1/)
+ [PHP: Doing Recursion With Recursive IteratorIterators](https://dev.to/gbhorwood/php-doing-recursion-with-recursive-iteratoriterators-fj1)

## Related

+ [Standard PHP Library (SPL)](spl.html)
+ [Iterator](iterator.html)
+ [Array, []](array.html)
+ [Recursion](recursion.html)
+ [Recursive Array](recursive-array.html)
+ [RecursiveIterator](recursiveiterator.html)
+ [SplSubject](splsubject.html)
