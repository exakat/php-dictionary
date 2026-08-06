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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/separator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/separator.html","name":"Separator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:31:22 +0000","dateModified":"Fri, 19 Jun 2026 21:31:22 +0000","description":"Separators are specific characters that ends a previous area, and open a new one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Separator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

print join("glue", [1, 2, 3]);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Delimiter)**
## Related

+ [Glue](glue.ini.html)
+ [implode()](implode.ini.html)
+ [explode()](explode.ini.html)
+ [http\_build\_query()](http_build_query.ini.html)
+ [Numeric Separator](numeric-separator.ini.html)
+ [Colon](colon.ini.html)
+ [Delimiter](delimiter.ini.html)
