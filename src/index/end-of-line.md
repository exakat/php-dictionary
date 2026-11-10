# End of Line (EOL)
End of line, or EOL, is the character or sequence of characters that marks the end of a line of text in a file. It is not one standard: Unix and Linux use a line feed ``\n``, Windows uses a carriage return followed by a line feed ``\r\n``, and older Mac systems used a carriage return alone ``\r``.

The difference matters when a file moves between systems. A script with Windows line endings can fail on Unix with a stray ``\r`` at the end of each line, and a diff can show every line as changed after a file is edited on another platform. Source control systems usually normalise line endings, and editors can be set to write one style.

The ``PHP_EOL`` constant gives the end-of-line sequence of the platform the script runs on. It is useful when output is meant for the local terminal or file system, but portable file formats such as CSV or HTTP responses should use the sequence their specification asks for, not ``PHP_EOL``.

This is not the same as EOL, for end of life, which is the date after which a software version stops receiving updates.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/end-of-line.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/end-of-line.html","name":"End of Line (EOL)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Nov 2026 11:08:13 +0000","dateModified":"Tue, 10 Nov 2026 11:08:13 +0000","description":"End of line, or EOL, is the character or sequence of characters that marks the end of a line of text in a file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/end-of-line.html"]}],"alternateName":["eol-character"],"keywords":["concept","disambiguation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_eol.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new-line.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/line-feed.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/carriage-return.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crlf-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/eol.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/reserved.constants.php"},{"@type":"CreativeWork","name":"Newline","url":"https:\/\/en.wikipedia.org\/wiki\/Newline"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.41","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"end-of-line"}]}]}</script>
```php
<?php

    // The line ending of the platform running the script
    echo 'first line' . PHP_EOL;
    echo 'second line' . PHP_EOL;

    // Stripping a Windows-style ending from a line read from a file
    $line = rtrim($line, "\r\n");

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.constants.php)**
## See Also

+ [Newline](https://en.wikipedia.org/wiki/Newline)

## Related

+ [PHP\_EOL](php_eol.html)
+ [New Line](new-line.html)
+ [Line Feed](line-feed.html)
+ [Carriage Return](carriage-return.html)
+ [CRLF Injection](crlf-injection.html)
+ [End of Life (EOL)](eol.html)
