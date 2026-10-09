# shuffle()
``shuffle()`` randomizes the order of the elements in an array, using a pseudo-random number generator.

The function reorders elements in place, and re-indexes the array with sequential integer keys starting from 0. Any string keys, or explicit integer keys, that existed before the call are discarded: the original association between a key and its value is lost, only the value order survives.

``shuffle()`` always returns true, so its result is rarely checked, unlike functions such as ``sort()`` that may fail on unsortable input.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shuffle.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shuffle.html","name":"shuffle()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 25 Sep 2026 14:29:07 +0000","dateModified":"Fri, 25 Sep 2026 14:29:07 +0000","description":"shuffle() randomizes the order of the elements in an array, using a pseudo-random number generator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shuffle.html"]}],"keywords":["native function","array"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sort.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.shuffle.php"},{"@type":"CreativeWork","name":"Fisher-Yates shuffle algorithm","url":"https:\/\/en.wikipedia.org\/wiki\/Fisher%E2%80%93Yates_shuffle"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.38","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"shuffle"}]}]}</script>
```php
<?php

    $fruits = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry'];

    shuffle($fruits);

    print_r($fruits);
    // Keys are now 0, 1, 2 in random order: the original a/b/c keys are gone.

?>
```

**[Documentation](https://www.php.net/manual/en/function.shuffle.php)**
## See Also

+ [Fisher-Yates shuffle algorithm](https://en.wikipedia.org/wiki/Fisher%E2%80%93Yates_shuffle)

## Related

+ [Array, []](array.html)
+ [Random](random.html)
+ [Sort](sort.html)
