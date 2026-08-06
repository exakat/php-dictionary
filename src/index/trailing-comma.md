# Trailing Comma
The trailing comma is the possibility to leave the last element of a list empty. This is for presentation reasons. In particular, VCS will be able to treat the last line just like any another previous line, with a final comma. This reduces de amount of diff.

Trailing commas were introduced progressively. In version 7.2, in use statements; in version 7.3, in method calls; in version 8.0, in method declarations; in older versions, in array declarations.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/trailing-comma.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/trailing-comma.html","name":"Trailing Comma","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 08:13:16 +0000","dateModified":"Thu, 02 Jul 2026 08:13:16 +0000","description":"The trailing comma is the possibility to leave the last element of a list empty","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Trailing Comma.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Comma](comma.ini.html)
+ [Convention](convention.ini.html)
