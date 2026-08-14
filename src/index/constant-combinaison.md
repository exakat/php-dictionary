# Constant Combination
PHP combines predefined constants using bitwise operators. This is heavily used with error level constants, file permissions, and various flags.

Combine two constants into one, with the ``|`` or operator: ``E_NOTICE | E_WARNING``. This might also be achieved with ``+`` operator.

Check if a flag is set, with the ``&`` and operator: ``E_ALL | E_WARNING``.

Exclude one flag, with the ``~`` tilde operator: ``E_ALL & ~E_WARNING``.

Toggle flags, with the ``^``xor operator: ``E_ALL ^ E_WARNING``.

These combinations are possible when the constants are distinct powers of 2. That way, combining ``E_WARNING = 2   // 0010`` and ``E_NOTICE  = 8   // 1000`` gives ``E_WARNING | E_NOTICE = 10  // 1010 (both bits set)``.

Constant combination is used with such functions as ``error_reporting()``, ``phpcredits()``, ``htmlentities()``, ``sort()`` though not with all constants, etc.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-combinaison.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-combinaison.html","name":"Constant Combination","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:26:34 +0000","dateModified":"Fri, 19 Jun 2026 21:26:34 +0000","description":"PHP combines predefined constants using bitwise operators","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Constant Combination.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"constant-combinaison"}]}]}</script>
```php
<?php

// Combine multiple error levels
error_reporting(E_NOTICE | E_WARNING | E_ERROR);

// More common: start from ALL and exclude some
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);

// -1 represents a flag with ALL activated 
error_reporting(-1); 
?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.bitwise.php)**
## Related

+ [Error Reporting](error_reporting.html)
+ [Sort](sort.html)
+ [Bitfield](bitfield.html)
