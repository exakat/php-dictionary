# fgetc()
``fgetc()`` is a PHP native function that reads a single character from an open file pointer. It returns a string containing one byte, or ``false`` when the end of the file, EOF, is reached.

Key characteristics:

+ Reads exactly one byte per call, making it the slowest way to read a file, but the finest-grained
+ Returns ``false`` on EOF, which must be checked with ``===`` since ``"0"`` or an empty string are otherwise valid, falsy-looking results
+ Binary-safe, like the other stream functions

``fgetc()`` is typically used to build custom character-by-character parsers, for instance for CSV-like formats with unusual quoting rules, or for reading protocols where the message boundary is not a newline. For line-based reading, ``fgets()`` is far more efficient; for reading arbitrary chunks, ``fread()`` is preferred.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fgetc.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fgetc.html","name":"fgetc()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 20:09:34 +0000","dateModified":"Wed, 15 Jul 2026 20:09:34 +0000","description":"``fgetc()`` is a PHP native function that reads a single character from an open file pointer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fgetc().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"fgetc()"}]}]}</script>
```php
<?php

    $fp = fopen('data.txt', 'r');
    if ($fp) {
        while (($char = fgetc($fp)) !== false) {
            echo $char;
        }
        fclose($fp);
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.fgetc.php)**
## See Also

+ [Filesystem functions](https://www.php.net/manual/en/ref.filesystem.php)

## Related

+ [fgets()](fgets.html)
+ [fread()](fread.html)
+ [fopen()](fopen.html)
+ [fclose()](fclose.html)
+ [Stream](stream.html)
+ [File](file.html)
+ [Binary](binary.html)
