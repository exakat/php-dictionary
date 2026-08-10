# Trailing Comma
The trailing comma is the possibility to leave the last element of a list empty. This is for presentation reasons. In particular, VCS will be able to treat the last line just like any other previous line, with a final comma. This reduces the amount of diff.

Trailing commas were introduced progressively. In version 7.2, in use statements; in version 7.3, in method calls; in version 8.0, in method declarations; in older versions, in array declarations.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trailing-comma.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trailing-comma.html","name":"Trailing Comma","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:31:03 +0000","dateModified":"Sat, 08 Aug 2026 14:31:03 +0000","description":"The trailing comma is the possibility to leave the last element of a list empty","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Trailing Comma.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Trailing Comma"}]}]}</script>
```php
<?php

    $a = [1,
          2,
          3,
          // Adding a new element in this array only creates
          // a one line diff, when using the trailing comma
         ];

?>
```

**[Documentation](https://www.php.net/manual/en/functions.arguments.php#functions.arguments)**
## See Also

+ [How I learned to stop worrying and love the trailing comma](https://c-harrison.medium.com/how-i-learned-to-stop-worrying-and-love-the-trailing-comma-480f3a73d203)

## Related

+ [Comma](comma.html)
+ [Convention](convention.html)
