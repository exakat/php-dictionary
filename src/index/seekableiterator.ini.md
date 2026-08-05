# SeekableIterator
``SeekableIterator`` extends the ``Iterator`` interface by adding a ``seek(int $offset)`` method to jump directly to a specific position without iterating through preceding elements.

It is implemented by ``ArrayIterator`` and ``SplFixedArray``. Attempting to seek to an invalid position should throw an ``OutOfBoundsException``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/seekableiterator.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/seekableiterator.ini.html","name":"SeekableIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 19:33:28 +0000","dateModified":"Mon, 06 Jul 2026 19:33:28 +0000","description":"``SeekableIterator`` extends the ``Iterator`` interface by adding a ``seek(int $offset)`` method to jump directly to a specific position without iterating through preceding elements","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/SeekableIterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $iterator = new ArrayIterator(['a', 'b', 'c', 'd', 'e']);
    $iterator->seek(3);
    echo $iterator->current(); // d

?>
```

**[Documentation](https://www.php.net/manual/en/class.seekableiterator.php)**
## Related

+ [Iterator](iterator.ini.html)
+ [Interface](interface.ini.html)
+ [Standard PHP Library (SPL)](spl.ini.html)
+ [PHP Native Interfaces](php-interface.ini.html)
+ [SplSubject](splsubject.ini.html)
