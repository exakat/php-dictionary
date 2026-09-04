# Carriage Return
A carriage return is a whitespace character, that historically represents moving the cursor to the beginning of the line, without changing line. It is often combined to the line feed: on a typewriter, that combination is needed to move the carriage to the beginning of the next line. This does not apply anymore on computers.

A carriage return is represented by the escape sequence ``\r``, in double quote strings. It is also the ASCII code 13.

Carriage return are important when formatting code, as they are at the end of a line.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/carriage-return.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/carriage-return.html","name":"Carriage Return","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 26 Aug 2026 10:12:14 +0000","dateModified":"Wed, 26 Aug 2026 10:12:14 +0000","description":"A carriage return is a whitespace character, that historically represents moving the cursor to the beginning of the line, without changing line","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/carriage-return.html"]}],"keywords":["character"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new-line.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/line-feed.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ascii.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_eol.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Carriage_return"},{"@type":"CreativeWork","name":"PHP: Predefined Constants","url":"https:\/\/www.php.net\/manual\/en\/reserved.constants.php"},{"@type":"CreativeWork","name":"Newline","url":"https:\/\/en.wikipedia.org\/wiki\/Newline"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"carriage-return"}]}]}</script>
```php
<?php

    echo "\r";
    echo chr(13); // ASCII code 13

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Carriage_return)**
## See Also

+ [PHP: Predefined Constants](https://www.php.net/manual/en/reserved.constants.php)
+ [Newline](https://en.wikipedia.org/wiki/Newline)

## Related

+ [New Line](new-line.html)
+ [Line Feed](line-feed.html)
+ [American Standard Code for Information Interchange (ASCII)](ascii.html)
+ [PHP\_EOL](php_eol.html)
