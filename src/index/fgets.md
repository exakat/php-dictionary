# fgets()
``fgets()`` is a PHP native function that reads a single line from an open file pointer, up to and including the next newline character, or until an optional ``length`` limit of bytes is reached. It returns the line as a string, or ``false`` when the end of file, EOF, is reached.

Key characteristics:

+ Stops at the first ``\n`` found, or after ``length - 1`` bytes if a length is provided
+ The trailing newline is kept in the returned string, and often needs to be trimmed with ``rtrim()`` or ``trim()``
+ Binary-safe

``fgets()`` is the standard way to process a text file line by line, for instance log files or CSV files, without loading the whole file into memory, unlike ``file()`` or ``file_get_contents()``. It is commonly combined with ``feof()`` to detect the end of the stream.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fgets.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fgets.html","name":"fgets()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 20:09:43 +0000","dateModified":"Wed, 15 Jul 2026 20:09:43 +0000","description":"fgets() is a PHP native function that reads a single line from an open file pointer, up to and including the next newline character, or until an optional length limit of bytes is reached","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fgets().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fgets"}]}]}</script>
```php
<?php

    $fp = fopen('access.log', 'r');
    if ($fp) {
        while (($line = fgets($fp)) !== false) {
            echo trim($line) . PHP_EOL;
        }
        fclose($fp);
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.fgets.php)**
## See Also

+ [Filesystem functions](https://www.php.net/manual/en/ref.filesystem.php)

## Related

+ [fgetc()](fgetc.html)
+ [fread()](fread.html)
+ [fopen()](fopen.html)
+ [fclose()](fclose.html)
+ [File](file.html)
+ [Stream](stream.html)
+ [Comma Separated Values (CSV)](csv.html)
