# ftell()
``ftell()`` is a PHP native function that returns the current position of the file pointer for an open file stream. The position is measured in bytes from the beginning of the file.

Key characteristics:

+ Returns the current position as an integer, or ``false`` on failure
+ The file pointer position advances as data is read or written
+ Useful for tracking progress through a file or for implementing file-based protocols
+ The position can be changed with ``fseek()`` and reset with ``rewind()``

``ftell()`` is commonly used in combination with ``fseek()`` to implement random access file operations, and with ``fread()`` to determine how much data has been read.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ftell.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ftell.html","name":"ftell()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:52:05 +0000","dateModified":"Wed, 15 Jul 2026 13:52:05 +0000","description":"``ftell()`` is a PHP native function that returns the current position of the file pointer for an open file stream","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ftell().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [fseek()](fseek.ini.html)
+ [rewind()](rewind.ini.html)
+ [fopen()](fopen.ini.html)
+ [fread()](fread.ini.html)
+ [fwrite()](fwrite.ini.html)
+ [File](file.ini.html)
+ [Stream](stream.ini.html)
+ [fclose()](fclose.ini.html)
+ [Resource Leak](resource-leak.ini.html)
