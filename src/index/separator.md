# Separator
Separators are specific characters that ends a previous area, and open a new one. They are used in structured dataset, to allow multiple values to be hosted.

The separator makes the building and parsing of the string easy. The separator must be forbidden in the separated values, or it must be protected to avoid confusion between a literal value and an actual separator.

Multiple separators may be used in the same format. For example, in query strings, ``&`` is used to distinguish different variables, and ``=`` is used to distinguish the name and the value.

Separators are argument in functions such as ``implode()``, ``explode()`` or ``http_build_query()``.

Some separators: 

+ ``|`` is used to separate types in a Union type
+ ``&`` is used to separate values in a query string
+ ``/`` is used to separate directory names in a file system path.
+ ``,`` is used in list of values.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/separator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/separator.html","name":"Separator","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:01:43 +0000","dateModified":"Sat, 08 Aug 2026 08:01:43 +0000","description":"Separators are specific characters that ends a previous area, and open a new one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Separator.html"]}],"keywords":["folklore"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/glue.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/explode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http_build_query.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeric-separator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/colon.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/delimiter.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Delimiter"},{"@type":"CreativeWork","name":"PHP explode(): Split a String by a Separator into an Array of Strings","url":"https:\/\/www.phptutorial.net\/php-tutorial\/php-explode\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"separator"}]}]}</script>
```php
<?php

print join("glue", [1, 2, 3]);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Delimiter)**
## See Also

+ [PHP explode(): Split a String by a Separator into an Array of Strings](https://www.phptutorial.net/php-tutorial/php-explode/)

## Related

+ [Glue](glue.html)
+ [implode()](implode.html)
+ [explode()](explode.html)
+ [http\_build\_query()](http_build_query.html)
+ [Numeric Separator](numeric-separator.html)
+ [Colon](colon.html)
+ [Delimiter](delimiter.html)
