# InfiniteIterator
 The InfiniteIterator allows one to infinitely iterate over an iterator without having to manually rewind the iterator upon reaching its end.

Infinite iterator works with other iterators. The loop may be broken, as usual, with a ``break`` keyword.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/infiniteiterator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/infiniteiterator.html","name":"InfiniteIterator","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 07:46:07 +0000","dateModified":"Sun, 16 Aug 2026 07:46:07 +0000","description":" The InfiniteIterator allows one to infinitely iterate over an iterator without having to manually rewind the iterator upon reaching its end","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/InfiniteIterator.html"]}],"keywords":["iterator"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/loop.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/infinite-loop.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/break.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.infiniteiterator.php"},{"@type":"CreativeWork","name":"Iterator","url":"https:\/\/www.php.net\/manual\/en\/class.iterator.php"},{"@type":"CreativeWork","name":"LimitIterator","url":"https:\/\/www.php.net\/manual\/en\/class.limititerator.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"infiniteiterator"}]}]}</script>
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
## See Also

+ [Iterator](https://www.php.net/manual/en/class.iterator.php)
+ [LimitIterator](https://www.php.net/manual/en/class.limititerator.php)

## Related

+ [Loops](loop.html)
+ [Infinite Loop](infinite-loop.html)
+ [Break](break.html)
