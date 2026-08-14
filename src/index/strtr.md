# strtr()
``strtr()`` is a PHP native function that translates characters or replaces substrings in a string.

It has two signatures. With three arguments, ``strtr($string, $from, $to)``, it replaces each character found in ``$from`` with the character at the same position in ``$to``. Both strings must have the same length; extra characters in the longer one are ignored.

With two arguments, ``strtr($string, $replace_pairs)``, it takes an array mapping substrings to their replacements. Unlike ``str_replace()``, ``strtr()`` replaces the longest matching keys first and does not rescan replaced text, which avoids double substitutions.

``strtr()`` is often faster than multiple chained ``str_replace()`` calls when doing several substitutions at once.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strtr.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strtr.html","name":"strtr()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 16:48:52 +0000","dateModified":"Mon, 20 Jul 2026 16:48:52 +0000","description":"strtr() is a PHP native function that translates characters or replaces substrings in a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strtr().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"strtr"}]}]}</script>
```php
<?php

    echo strtr('Hello World', 'ol', '0L'); // HeLL0 W0rLd

    $trans = ['Hello' => 'Hi', 'World' => 'Earth'];
    echo strtr('Hello World', $trans); // Hi Earth

    // Longest keys are matched first
    $trans = ['a' => 'X', 'ab' => 'Y'];
    echo strtr('ab', $trans); // Y, not XB

?>
```

**[Documentation](https://www.php.net/manual/en/function.strtr.php)**
## See Also

+ [A Practical Guide to PHP's strtr() Function](https://reintech.io/blog/a-practical-guide-to-phps-strtr-function)

## Related

+ [str\_replace()](str_replace.html)
+ [String](string.html)
+ [strpos](strpos.html)
