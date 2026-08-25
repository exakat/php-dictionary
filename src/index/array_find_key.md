# array\_find\_key()
``array_find_key()`` is a PHP native function, introduced in version 8.4 alongside ``array_find()``, that returns the key of the first element of an array for which a callback returns a truthy value, or ``null`` if no element matches.

It is the key-returning counterpart of ``array_find()``: where ``array_find()`` gives back the matching value, ``array_find_key()`` gives back its key, which is useful when the position, or the original index, of the match matters more than the value itself, or when that exact element needs to be updated or removed afterwards.

Because ``0`` and the empty string are valid, yet falsy, array keys, the result of ``array_find_key()`` must be compared against ``null`` with the identical comparison operator ``===``, exactly like the classic ``strpos()`` syndrome, rather than merely tested for truthiness.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_find_key.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_find_key.html","name":"array_find_key()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 10:26:31 +0000","dateModified":"Thu, 09 Jul 2026 10:26:31 +0000","description":"array_find_key() is a PHP native function, introduced in version 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_find_key.html"]}],"keywords":["native function","array"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_find.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strpos-syndrom.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_search.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_key_first.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array-find-key.php"},{"@type":"CreativeWork","name":"PHP RFC: array_find","url":"https:\/\/wiki.php.net\/rfc\/array_find"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_find_key"}]}]}</script>
```php
<?php

    $fruits = ['apple', 'banana', 'cherry'];

    $key = array_find_key($fruits, fn($f) => str_starts_with($f, 'b'));
    // 1

    $key = array_find_key($fruits, fn($f) => str_starts_with($f, 'z'));
    // null, no element matches

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-find-key.php)**
## See Also

+ [PHP RFC: array_find](https://wiki.php.net/rfc/array_find)

## Related

+ [array\_find()](array_find.html)
+ [Strpos() Syndrome](strpos-syndrom.html)
+ [array\_search](array_search.html)
+ [array\_key\_first()](array_key_first.html)
