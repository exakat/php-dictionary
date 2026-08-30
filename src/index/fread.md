# fread()
``fread()`` is a PHP native function that reads up to ``length`` bytes from the file pointer referenced by ``stream``. It is one of the fundamental file reading functions.

Key characteristics:

+ Returns a string of up to ``length`` bytes, or ``false`` on failure
+ Reads binary-safe data, making it suitable for both text and binary files
+ Stops reading when EOF, end of file, is reached or the specified length is reached
+ For character encodings like UTF-8, reading by byte length may split multi-byte characters; consider using ``fgetc()`` or ``fgets()`` for text files

``fread()`` is typically used after ``fopen()`` and should be paired with ``fclose()`` to free resources. For reading entire files at once, ``file_get_contents()`` is more convenient. For line-by-line reading, ``fgets()`` is preferred.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fread.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fread.html","name":"fread()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:52:13 +0000","dateModified":"Wed, 15 Jul 2026 13:52:13 +0000","description":"fread() is a PHP native function that reads up to length bytes from the file pointer referenced by stream","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fread.html"]}],"keywords":["function","file"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fopen.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fgets.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fgetc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file_get_contents.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fclose.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fwrite.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fseek.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ftell.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rewind.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/binary.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resource-leak.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.fread.php"},{"@type":"CreativeWork","name":"Filesystem functions","url":"https:\/\/www.php.net\/manual\/en\/ref.filesystem.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fread"}]}]}</script>
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

+ [fopen()](fopen.html)
+ [fgets()](fgets.html)
+ [fgetc()](fgetc.html)
+ [file\_get\_contents()](file_get_contents.html)
+ [File](file.html)
+ [Stream](stream.html)
+ [fclose()](fclose.html)
+ [fwrite()](fwrite.html)
+ [fseek()](fseek.html)
+ [ftell()](ftell.html)
+ [rewind()](rewind.html)
+ [Readable](readable.html)
+ [Binary](binary.html)
+ [Resource Leak](resource-leak.html)
