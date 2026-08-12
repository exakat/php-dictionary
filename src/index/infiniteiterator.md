# InfiniteIterator
 The InfiniteIterator allows one to infinitely iterate over an iterator without having to manually rewind the iterator upon reaching its end.

Infinite iterator works with other iterators. The loop may be broken, as usual, with a ``break`` keyword.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/infiniteiterator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/infiniteiterator.html","name":"InfiniteIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":" The InfiniteIterator allows one to infinitely iterate over an iterator without having to manually rewind the iterator upon reaching its end","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/InfiniteIterator.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"infiniteiterator"}]}]}</script>
```php
<?php

$versions = [1, 2, 3, 4, 5, 7, 8];

$infinite = new InfiniteIterator(new ArrayIterator($versions));
foreach ($infinite as $value) {
    print "$value\n";
}

?>
```

**[Documentation](https://www.php.net/manual/en/class.infiniteiterator.php)**
## Related

+ [Loops](loop.html)
+ [Infinite Loop](infinite-loop.html)
+ [Break](break.html)
