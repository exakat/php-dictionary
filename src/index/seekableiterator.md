# SeekableIterator
``SeekableIterator`` extends the ``Iterator`` interface by adding a ``seek(int $offset)`` method to jump directly to a specific position without iterating through preceding elements.

It is implemented by ``ArrayIterator`` and ``SplFixedArray``. Attempting to seek to an invalid position should throw an ``OutOfBoundsException``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/seekableiterator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/seekableiterator.html","name":"SeekableIterator","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 22 Aug 2026 08:43:42 +0000","dateModified":"Sat, 22 Aug 2026 08:43:42 +0000","description":"SeekableIterator extends the Iterator interface by adding a seek(int $offset) method to jump directly to a specific position without iterating through preceding elements","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/SeekableIterator.html"]}],"keywords":["spl","iterator","interface"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splsubject.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.seekableiterator.php"},{"@type":"CreativeWork","name":"Basic example of PHP function SeekableIterator::seek()","url":"https:\/\/www.basicexamples.com\/example\/php\/seekableiterator-seek"},{"@type":"CreativeWork","name":"Iterator","url":"https:\/\/www.php.net\/manual\/en\/class.iterator.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"seekableiterator"}]}]}</script>
```php
<?php

    $iterator = new ArrayIterator(['a', 'b', 'c', 'd', 'e']);
    $iterator->seek(3);
    echo $iterator->current(); // d

?>
```

**[Documentation](https://www.php.net/manual/en/class.seekableiterator.php)**
## See Also

+ [Basic example of PHP function SeekableIterator::seek()](https://www.basicexamples.com/example/php/seekableiterator-seek)
+ [Iterator](https://www.php.net/manual/en/class.iterator.php)

## Related

+ [Iterator](iterator.html)
+ [Interface](interface.html)
+ [Standard PHP Library (SPL)](spl.html)
+ [PHP Native Interfaces](php-interface.html)
+ [SplSubject](splsubject.html)
