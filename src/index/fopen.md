# fopen()
``fopen()`` is a PHP native function which opens a file. It returns a file description, also called handle, that may be used with other PHP file functions to read and write data from and to the files.

``fopen()`` may also be replaced by the ``SplFileObject`` class, which provides a OOP syntax alternative to access files.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fopen.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fopen.html","name":"fopen()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:18:07 +0000","dateModified":"Thu, 16 Jul 2026 08:18:07 +0000","description":"``fopen()`` is a PHP native function which opens a file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fopen().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"fopen()"}]}]}</script>
```php
<?php

    $fp = fopen('/tmp/test.txt', 'r');
    fwrite($fp, 'PHP rocks!');
    fclose($fp);

?>
```

**[Documentation](https://www.php.net/manual/en/function.fopen.php)**
## See Also

+ [PHP Open File](https://www.phptutorial.net/php-tutorial/php-open-file/)

## Related

+ [File](file.html)
+ [Writing](write.html)
+ [Permission](permission.html)
+ [Writeable](writeable.html)
+ [Readable](readable.html)
+ [SplFileObject](splfileobject.html)
+ [$http\_response\_header]($http_response_header.html)
+ [File Mode](file-mode.html)
+ [Resource Leak](resource-leak.html)
+ [Text](text.html)
+ [Handle](handle.html)
+ [Universal Resource Locator (URL)](url.html)
+ [fread()](fread.html)
+ [fseek()](fseek.html)
+ [ftell()](ftell.html)
+ [rewind()](rewind.html)
+ [fclose()](fclose.html)
+ [fgetc()](fgetc.html)
+ [fgets()](fgets.html)
+ [fwrite()](fwrite.html)
