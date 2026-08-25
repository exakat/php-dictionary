# fclose()
``fclose()`` is a PHP native function that closes an open file pointer, previously created with ``fopen()``, ``fsockopen()``, or similar functions. It returns ``true`` on success, ``false`` on failure.

Closing a stream releases the underlying resource, file descriptor, socket, back to the operating system. Forgetting to call ``fclose()`` leads to a resource leak: on long-running processes, such as CLI scripts, workers or daemons, this can exhaust the number of file descriptors available to the process.

In most short-lived web requests, PHP automatically closes any remaining open handles at the end of the script, but explicit ``fclose()`` calls remain good practice, and are mandatory as soon as many files are opened in a loop, or the process runs indefinitely.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fclose.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fclose.html","name":"fclose()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 20:09:24 +0000","dateModified":"Wed, 15 Jul 2026 20:09:24 +0000","description":"fclose() is a PHP native function that closes an open file pointer, previously created with fopen(), fsockopen(), or similar functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fclose.html"]}],"keywords":["function","file"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fopen.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fread.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fwrite.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fgets.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fgetc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ftell.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rewind.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resource-leak.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.fclose.php"},{"@type":"CreativeWork","name":"Filesystem functions","url":"https:\/\/www.php.net\/manual\/en\/ref.filesystem.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fclose"}]}]}</script>
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

+ [fopen()](fopen.html)
+ [fread()](fread.html)
+ [fwrite()](fwrite.html)
+ [fgets()](fgets.html)
+ [fgetc()](fgetc.html)
+ [ftell()](ftell.html)
+ [rewind()](rewind.html)
+ [Resource Leak](resource-leak.html)
+ [Stream](stream.html)
+ [File](file.html)
