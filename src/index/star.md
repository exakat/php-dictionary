# Star \*
``*`` is a character, used in various situations: 

+ Multiplication: ``3 * 2 == 6``
+ Power: ``3 ** 2 == 3 * 3 == 9``
+ With slash, ``/*`` is a multi line comment: ``/* */``
+ With double star and a slash, ``/**`` is a phpdoc comment: ``/** */``.
+ As a wildcard in ``glob()`` calls
+ As a wildcard in ``fnmatch()`` calls
+ As a wildcard for all columns in SQL queries: ``SELECT * FROM table``
+ As a quantifier in regex: 0 or more, for example ``/a*/``
+ As part of a multiline comment with ``/** */`` and ``/* */``.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/star.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/star.html","name":"Star *","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 28 Aug 2026 10:29:32 +0000","dateModified":"Fri, 28 Aug 2026 10:29:32 +0000","description":"* is a character, used in various situations: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/star.html"]}],"keywords":["disambiguation","character"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multiplication.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/comment.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exponential.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/regex.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/glob.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fnmatch.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Asterisk"},{"@type":"CreativeWork","name":"Glob (programming)","url":"https:\/\/en.wikipedia.org\/wiki\/Glob_(programming)"},{"@type":"CreativeWork","name":"PHP: fnmatch()","url":"https:\/\/www.php.net\/manual\/en\/function.fnmatch.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"star"}]}]}</script>
```php
<?php

    file_get_contents('/tmp/test.txt');
    
    echo 2 * 3; // 6 
    echo 2 ** 3; // * 
    
    /*
     A multiline comment
    */

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Asterisk)**
## See Also

+ [Glob (programming)](https://en.wikipedia.org/wiki/Glob_(programming))
+ [PHP: fnmatch()](https://www.php.net/manual/en/function.fnmatch.php)

## Related

+ [Multiplication](multiplication.html)
+ [Comments](comment.html)
+ [Exponential](exponential.html)
+ [Regular Expression](regex.html)
+ [Structured Query Language (SQL)](sql.html)
+ [glob()](glob.html)
+ [fnmatch()](fnmatch.html)
