# printf()
``printf()`` is a PHP native function, that places the content of variables into strings, with the help of placeholders and formatting commands.

``printf()`` displays the resulting string directly to STDOUT; ``sprintf()`` returns the string for further processing; ``vprintf()`` works as ``printf()``, but with an array of arguments; ``fprintf()`` writes the result directly in a stream, and ``vfprintf()`` is the same, with an array of arguments.

The first argument of ``printf()`` is a format string. The string contains format specifiers, which are detailed on the function's documentation page.

``printf()`` should have one argument for each of the placeholders, plus the formatting string. The function reports when arguments are missing, and ignores silently any superfluous argument.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/printf.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/printf.html","name":"printf()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 26 Aug 2026 10:49:40 +0000","dateModified":"Wed, 26 Aug 2026 10:49:40 +0000","description":"printf() is a PHP native function, that places the content of variables into strings, with the help of placeholders and formatting commands","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/printf.html"]}],"keywords":["native function","arbitrary number of argument"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/echo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/print.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/format.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sscanf.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.printf.php"},{"@type":"CreativeWork","name":"printf format string","url":"https:\/\/en.wikipedia.org\/wiki\/Printf_format_string"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"printf"}]}]}</script>
```php
<?php

    $variable = 'elephpant';
    printf('The %s is happy.', $variable);

?>
```

**[Documentation](https://www.php.net/manual/en/function.printf.php)**
## See Also

+ [printf format string](https://en.wikipedia.org/wiki/Printf_format_string)

## Related

+ [Echo](echo.html)
+ [Print](print.html)
+ [Format](format.html)
+ [sscanf()](sscanf.html)
+ [String](string.html)
