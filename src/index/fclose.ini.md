# fclose()
``fclose()`` is a PHP native function that closes an open file pointer, previously created with ``fopen()``, ``fsockopen()``, or similar functions. It returns ``true`` on success, ``false`` on failure.

Closing a stream releases the underlying resource, file descriptor, socket, back to the operating system. Forgetting to call ``fclose()`` leads to a resource leak: on long-running processes, such as CLI scripts, workers or daemons, this can exhaust the number of file descriptors available to the process.

In most short-lived web requests, PHP automatically closes any remaining open handles at the end of the script, but explicit ``fclose()`` calls remain good practice, and are mandatory as soon as many files are opened in a loop, or the process runs indefinitely.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fclose.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fclose.ini.html","name":"fclose()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 20:09:24 +0000","dateModified":"Wed, 15 Jul 2026 20:09:24 +0000","description":"``fclose()`` is a PHP native function that closes an open file pointer, previously created with ``fopen()``, ``fsockopen()``, or similar functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fclose().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $fp = fopen('data.txt', 'r');
    if ($fp) {
        $content = fread($fp, filesize('data.txt'));
        fclose($fp);
        echo $content;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.fclose.php)**
## See Also

+ [Filesystem functions](https://www.php.net/manual/en/ref.filesystem.php)

## Related

+ [fopen()](fopen.ini.html)
+ [fread()](fread.ini.html)
+ [fwrite()](fwrite.ini.html)
+ [fgets()](fgets.ini.html)
+ [fgetc()](fgetc.ini.html)
+ [ftell()](ftell.ini.html)
+ [rewind()](rewind.ini.html)
+ [Resource Leak](resource-leak.ini.html)
+ [Stream](stream.ini.html)
+ [File](file.ini.html)
