# Space
Space is the `` `` character: it is an invisible character. It serves as a separator between tokens, and is mostly unused by PHP execution engine.

Space is part of a class of invisible characters, called whitespaces, along with new line ``\n``, carriage return ``\r``, line feed ``\f`` and horizontal tabulation ``\t``.

Spaces inside PHP code usually carry no value but to separate visually elements in the code. They are sometimes important, as in designing floats, or not important, with some operators, ``$a []= 1`` is actually the same as ``$a[] = 1`` or ``$a [ ] = 1``.

Spaces outside the PHP tags are important, as they are delivered as is to the client. Any white space set before the opening ``<?php`` PHP tag may be send before PHP code is executed, leading to the infamous ``Cannot modify header information - headers already sent``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/space.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/space.ini.html","name":"Space","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 24 Jun 2026 06:08:58 +0000","dateModified":"Wed, 24 Jun 2026 06:08:58 +0000","description":"Space is the `` `` character: it is an invisible character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Space.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // space is mostly ignored in PHP code
    $string = ' a ';
    // space is important inside literal, such as strings
    
    echo 1 . 2; // here, space is important
    echo 1.2; // here, space is important

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Whitespace_character)**
## See Also

+ [Spaces in a PHP file. Unexpected output](https://designdebt.club/spaces-in-a-php-file/)

## Related

+ [Heredocs](heredoc.ini.html)
+ [Indentation](indentation.ini.html)
+ [Non Breakable Spaces](non-breakable-space.ini.html)
+ [Nowdocs](nowdoc.ini.html)
+ [Tabulation](tabulation.ini.html)
