# fwrite()
``fwrite()`` is a PHP native function that writes a string to an open file pointer. It returns the number of bytes written, or ``false`` on failure. ``fputs()`` is a plain alias of ``fwrite()``.

Key characteristics:

+ Writing may stop before the end of the string if the stream refuses more data, so the return value should be checked against ``strlen()`` of the data for reliability
+ An optional ``length`` parameter caps the number of bytes written, even if the string is longer
+ Binary-safe, and works identically on files, pipes, and sockets

``fwrite()`` requires the file pointer to have been opened in a writable mode, such as ``'w'``, ``'a'``, or ``'r+'``, with ``fopen()``. For writing an entire string at once without manually managing a handle, ``file_put_contents()`` is more convenient.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fwrite.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fwrite.ini.html","name":"fwrite()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 20:09:51 +0000","dateModified":"Wed, 15 Jul 2026 20:09:51 +0000","description":"``fwrite()`` is a PHP native function that writes a string to an open file pointer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fwrite().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $fp = fopen('/tmp/test.txt', 'w');
    if ($fp) {
        fwrite($fp, 'PHP rocks!');
        fclose($fp);
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.fwrite.php)**
## See Also

+ [Filesystem functions](https://www.php.net/manual/en/ref.filesystem.php)

## Related

+ [fopen()](fopen.ini.html)
+ [fclose()](fclose.ini.html)
+ [fread()](fread.ini.html)
+ [file\_put\_contents()](file_put_contents.ini.html)
+ [File](file.ini.html)
+ [Stream](stream.ini.html)
+ [Writeable](writeable.ini.html)
+ [Resource Leak](resource-leak.ini.html)
