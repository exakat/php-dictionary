# Line Feed
A line feed is a whitespace character, that historically represents moving the cursor to the next line, without going back to the beginning of the line.

A line feed is represented by the escape sequence ``\f``, in double quote strings. It is also the ASCII code 12.

Line feed are important when formatting code, as they are at the end of a line.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/line-feed.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/line-feed.ini.html","name":"Line Feed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A line feed is a whitespace character, that historically represents moving the cursor to the next line, without going back to the beginning of the line","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Line Feed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    echo "\f";
    echo chr(12); // ASCII code 12

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Newline)**
## Related

+ [New Line](new-line.ini.html)
+ [Carriage Return](carriage-return.ini.html)
+ [American Standard Code for Information Interchange (ASCII)](ascii.ini.html)
+ [Return Carriage](return-carriage.ini.html)
