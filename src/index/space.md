# Space
Space is the `` `` character: it is an invisible character. It serves as a separator between tokens, and is mostly unused by PHP execution engine.

Space is part of a class of invisible characters, called whitespaces, along with new line ``\n``, carriage return ``\r``, line feed ``\f`` and horizontal tabulation ``\t``.

Spaces inside PHP code usually carry no value but to separate visually elements in the code. They are sometimes important, as in designing floats, or not important, with some operators, ``$a []= 1`` is actually the same as ``$a[] = 1`` or ``$a [ ] = 1``.

Spaces outside the PHP tags are important, as they are delivered as is to the client. Any white space set before the opening ``<?php`` PHP tag may be send before PHP code is executed, leading to the infamous ``Cannot modify header information - headers already sent``.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/space.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/space.html","name":"Space","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 24 Jun 2026 06:08:58 +0000","dateModified":"Wed, 24 Jun 2026 06:08:58 +0000","description":"Space is the   character: it is an invisible character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/space.html"]}],"keywords":["character"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/heredoc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/indentation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-breakable-space.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nowdoc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tabulation.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Whitespace_character"},{"@type":"CreativeWork","name":"Spaces in a PHP file. Unexpected output","url":"https:\/\/designdebt.club\/spaces-in-a-php-file\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"space"}]}]}</script>
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

+ [Heredocs](heredoc.html)
+ [Indentation](indentation.html)
+ [Non Breakable Spaces](non-breakable-space.html)
+ [Nowdocs](nowdoc.html)
+ [Tabulation](tabulation.html)
