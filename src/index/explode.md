# explode()
The ``explode()`` function is used to break an array into a list of elements, based on a separator.

``explode()`` uses the first argument as the separator, and the second as the string. 

``explode()`` has an alias called ``split()``.

``explode()`` creates an empty string when the separator is at the beginning or the end of the strings. It also build empty strings when the separator are next to each other. 

The separator has to be a static string. For dynamic separators, there is the ``preg_split()`` function.

``explode()`` has a third parameter to limit the number of read elements. It is useful to avoid spending too much resources, such as time or memory, working on the string, when a maximum number of expected elements is known, and the string is not.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/explode.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/explode.html","name":"explode()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 16:45:56 +0000","dateModified":"Mon, 20 Jul 2026 16:45:56 +0000","description":"The explode() function is used to break an array into a list of elements, based on a separator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/explode().html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/preg_split.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/separator.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.implode.php"},{"@type":"CreativeWork","name":"Beginner's Guide to PHP explode() Function (With Code Examples!)","url":"https:\/\/zerotomastery.io\/blog\/php-explode-beginners-guide\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"explode"}]}]}</script>
```php
<?php

    print_r(explode('&', '&a=3&b') );
    // ['', 'a=3', 'b']

?>
```

**[Documentation](https://www.php.net/manual/en/function.implode.php)**
## See Also

+ [Beginner's Guide to PHP explode() Function (With Code Examples!)](https://zerotomastery.io/blog/php-explode-beginners-guide/)

## Related

+ [preg\_split()](preg_split.html)
+ [Separator](separator.html)
