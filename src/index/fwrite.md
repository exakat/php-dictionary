# fwrite()
``fwrite()`` is a PHP native function that writes a string to an open file pointer. It returns the number of bytes written, or ``false`` on failure. ``fputs()`` is a plain alias of ``fwrite()``.

Key characteristics:

+ Writing may stop before the end of the string if the stream refuses more data, so the return value should be checked against ``strlen()`` of the data for reliability
+ An optional ``length`` parameter caps the number of bytes written, even if the string is longer
+ Binary-safe, and works identically on files, pipes, and sockets

``fwrite()`` requires the file pointer to have been opened in a writable mode, such as ``'w'``, ``'a'``, or ``'r+'``, with ``fopen()``. For writing an entire string at once without manually managing a handle, ``file_put_contents()`` is more convenient.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fwrite.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fwrite.html","name":"fwrite()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 20:09:51 +0000","dateModified":"Wed, 15 Jul 2026 20:09:51 +0000","description":"``fwrite()`` is a PHP native function that writes a string to an open file pointer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fwrite().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"fwrite()"}]}]}</script>
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

+ [fopen()](fopen.html)
+ [fclose()](fclose.html)
+ [fread()](fread.html)
+ [file\_put\_contents()](file_put_contents.html)
+ [File](file.html)
+ [Stream](stream.html)
+ [Writeable](writeable.html)
+ [Resource Leak](resource-leak.html)
