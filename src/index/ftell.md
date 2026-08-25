# ftell()
``ftell()`` is a PHP native function that returns the current position of the file pointer for an open file stream. The position is measured in bytes from the beginning of the file.

Key characteristics:

+ Returns the current position as an integer, or ``false`` on failure
+ The file pointer position advances as data is read or written
+ Useful for tracking progress through a file or for implementing file-based protocols
+ The position can be changed with ``fseek()`` and reset with ``rewind()``

``ftell()`` is commonly used in combination with ``fseek()`` to implement random access file operations, and with ``fread()`` to determine how much data has been read.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ftell.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ftell.html","name":"ftell()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:52:05 +0000","dateModified":"Wed, 15 Jul 2026 13:52:05 +0000","description":"ftell() is a PHP native function that returns the current position of the file pointer for an open file stream","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ftell.html"]}],"alternateName":["file-tell"],"keywords":["function","file"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fseek.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rewind.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fopen.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fread.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fwrite.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fclose.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resource-leak.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.ftell.php"},{"@type":"CreativeWork","name":"Filesystem functions","url":"https:\/\/www.php.net\/manual\/en\/ref.filesystem.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ftell"}]}]}</script>
```php
<?php

    $fp = fopen('data.txt', 'r');
    if ($fp) {
        echo 'Initial position: ' . ftell($fp) . "\n"; // 0

        fread($fp, 10);
        echo 'After reading 10 bytes: ' . ftell($fp) . "\n"; // 10

        fseek($fp, 0, SEEK_END);
        echo 'File size: ' . ftell($fp) . "\n";

        fclose($fp);
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.ftell.php)**
## See Also

+ [Filesystem functions](https://www.php.net/manual/en/ref.filesystem.php)

## Related

+ [fseek()](fseek.html)
+ [rewind()](rewind.html)
+ [fopen()](fopen.html)
+ [fread()](fread.html)
+ [fwrite()](fwrite.html)
+ [File](file.html)
+ [Stream](stream.html)
+ [fclose()](fclose.html)
+ [Resource Leak](resource-leak.html)
