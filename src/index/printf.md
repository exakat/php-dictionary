# printf()
``printf()`` is a PHP native function, that places the content of variables into strings, with the help of placeholders and formatting commands.

``printf()`` displays the resulting string directly to STDOUT; ``sprintf()`` returns the string for further processing; ``vprintf()`` works as ``printf()``, but with an array of arguments; ``fprintf()`` writes the result directly in a stream, and ``vfprintf()`` is the same, with an array of arguments.

The first argument of ``printf()`` is a format string. The string contains format specifiers, which are detailed on the function's documentation page.

``printf()`` should have one argument for each of the placeholders, plus the formatting string. The function reports when arguments are missing, and ignores silently any superfluous argument.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/printf.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/printf.html","name":"printf()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:59:06 +0000","dateModified":"Tue, 11 Aug 2026 20:59:06 +0000","description":"printf() is a PHP native function, that places the content of variables into strings, with the help of placeholders and formatting commands","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/printf().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"printf"}]}]}</script>
```php
<?php

    $variable = 'elephpant';
    printf('The %s is happy.', $variable);

?>
```

**[Documentation](https://www.php.net/manual/en/function.printf.php)**
## Related

+ [Echo](echo.html)
+ [Print](print.html)
+ [Format](format.html)
+ [sscanf()](sscanf.html)
+ [String](string.html)
