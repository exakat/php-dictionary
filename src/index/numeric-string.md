# Numeric String
A numeric string, is a string that contains a numeric value, or can be easily converted from string to numeric, integer or float. 

Some of such strings are obvious, and commonly used: ``123`` or ``'45.67'``. HereDocs string may also be a numeric string. 

Non numeric strings are mostly obvious too, such as: ``abc`` or ``'中文'``. 

Then, there are some various cases: 

+ '123db': leading strings, starting with digits and finished by non-digit characters are converted as much as possible.
+ '2e3': the exponent is recognized: when ``e``, is between two digit, the float notation is used. This is 2000.
+ '+00', '-10': leading ``+`` and ``-`` are handled. There can only be one, unlike for hardcoded integers.
+ ' 20 ': leading and trailing spaces, tabulations, new lines, new feed are omitted. 
+ ``str_repeat('0', 10001).2``: PHP tries to convert as much as possible. Leading 0 will basically be ignored, however numerous they are.
+ ``(int) str_repeat('1', 10001)``: PHP returns 0 when conversion fails
+  ``str_repeat('1', 10001) + 0``: PHP returns ``INF`` when the conversion fails and is silent.
+ '三' or 3 in Chinese, 'CM' or 1500 in Roman: other ways of counting are not recognized

A string may be checked with the ``is_numeric()`` function. It cannot be checked with ``is_int()`` and ``is_float()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeric-string.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeric-string.html","name":"Numeric String","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 15:23:56 +0000","dateModified":"Fri, 24 Jul 2026 15:23:56 +0000","description":"A numeric string, is a string that contains a numeric value, or can be easily converted from string to numeric, integer or float","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeric-string.html"]}],"keywords":["string"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/leading-numeric-string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/number.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.numeric-strings.php"},{"@type":"CreativeWork","name":"PHP Internals News: Episode 62: Saner Numeric Strings","url":"https:\/\/derickrethans.nl\/phpinternalsnews-62.html"},{"@type":"CreativeWork","name":"PHP Integers, Floats, and Number Strings","url":"https:\/\/code.tutsplus.com\/php-integers-floats-and-number-strings--cms-32048t"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"numeric-string"}]}]}</script>
```php
<?php

    var_dump(is_numeric('中文'));

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.numeric-strings.php)**
## See Also

+ [PHP Internals News: Episode 62: Saner Numeric Strings](https://derickrethans.nl/phpinternalsnews-62.html)
+ [PHP Integers, Floats, and Number Strings](https://code.tutsplus.com/php-integers-floats-and-number-strings--cms-32048t)

## Related

+ [Leading Numeric String](leading-numeric-string.html)
+ [Number](number.html)
