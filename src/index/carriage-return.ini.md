# Carriage Return
A carriage return is a whitespace character, that historically represents moving the cursor to the beginning of the line, without changing line. It is often combined to the line feed: on a typewriter, that combination is needed to move the carriage to the beginning of the next line. This does not apply anymore on computers.

A carriage return is represented by the escape sequence ``\r``, in double quote strings. It is also the ASCII code 13.

Carriage return are important when formatting code, as they are at the end of a line.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/carriage-return.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/carriage-return.ini.html","name":"Carriage Return","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A carriage return is a whitespace character, that historically represents moving the cursor to the beginning of the line, without changing line","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Carriage Return.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    echo "\r";
    echo chr(13); // ASCII code 13

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Carriage_return)**
## Related

+ [New Line](new-line.ini.html)
+ [Line Feed](line-feed.ini.html)
+ [American Standard Code for Information Interchange (ASCII)](ascii.ini.html)
