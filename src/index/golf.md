# Golf
Code golf is about creating the shortest code, in bytes, to solve a given problem, in a specific language or free of choice. Solutions are scored purely on character count; readability, style, and maintainability are deliberately ignored.

PHP golfers exploit language-specific shortcuts to shave bytes: the short echo tag ``<?=``, omitting the closing ``?>`` tag, the null coalescing and null coalescing assignment operators, ``??`` and ``??=``, instead of ``isset()`` checks, the ternary shorthand ``?:``, ``list()``/``[]`` destructuring instead of separate assignments, loose ``==`` comparisons, and string-to-number juggling such as writing ``"1e9"`` instead of ``1000000000``.

Community sites such as Code Golf Stack Exchange and Anarchy Golf host PHP-specific challenges, and submissions are usually scored with ``strlen()`` run on the minified source.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/golf.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/golf.html","name":"Golf","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:05:53 +0000","dateModified":"Thu, 16 Jul 2026 08:05:53 +0000","description":"Code golf is about creating the shortest code, in bytes, to solve a given problem, in a specific language or free of choice","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Golf.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Golf"}]}]}</script>
```php
<?php

    // All spaces are removed to make the code compact
    $billionPlusOne=1+1e9; 

    // 1e9 is cast automatically to 1000000000 or 1_000_000_000, but takes less space to write

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Code_golf)**
## See Also

+ [Tips and Tricks when Golfing in PHP](https://dsolstad.com/phpgolf/2018/05/01/phpGolf-tips-and-tricks.html)

## Related

+ [Cast Operator](cast.html)
+ [One Liner](one-liner.html)
