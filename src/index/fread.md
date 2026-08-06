# fread()
``fread()`` is a PHP native function that reads up to ``length`` bytes from the file pointer referenced by ``stream``. It is one of the fundamental file reading functions.

Key characteristics:

+ Returns a string of up to ``length`` bytes, or ``false`` on failure
+ Reads binary-safe data, making it suitable for both text and binary files
+ Stops reading when EOF, end of file, is reached or the specified length is reached
+ For character encodings like UTF-8, reading by byte length may split multi-byte characters; consider using ``fgetc()`` or ``fgets()`` for text files

``fread()`` is typically used after ``fopen()`` and should be paired with ``fclose()`` to free resources. For reading entire files at once, ``file_get_contents()`` is more convenient. For line-by-line reading, ``fgets()`` is preferred.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fread.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fread.html","name":"fread()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:52:13 +0000","dateModified":"Wed, 15 Jul 2026 13:52:13 +0000","description":"``fread()`` is a PHP native function that reads up to ``length`` bytes from the file pointer referenced by ``stream``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fread().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $fp = fopen('data.txt', 'r');
    if ($fp) {
        // Read first 100 bytes
        $content = fread($fp, 100);
        echo $content;

        // Read remaining content
        $remaining = fread($fp, filesize('data.txt') - 100);
        echo $remaining;

        fclose($fp);
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.fread.php)**
## See Also

+ [Filesystem functions](https://www.php.net/manual/en/ref.filesystem.php)

## Related

+ [fopen()](fopen.ini.html)
+ [fgets()](fgets.ini.html)
+ [fgetc()](fgetc.ini.html)
+ [file\_get\_contents()](file_get_contents.ini.html)
+ [File](file.ini.html)
+ [Stream](stream.ini.html)
+ [fclose()](fclose.ini.html)
+ [fwrite()](fwrite.ini.html)
+ [fseek()](fseek.ini.html)
+ [ftell()](ftell.ini.html)
+ [rewind()](rewind.ini.html)
+ [Readable](readable.ini.html)
+ [Binary](binary.ini.html)
+ [Resource Leak](resource-leak.ini.html)
