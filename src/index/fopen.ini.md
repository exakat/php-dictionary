# fopen()
``fopen()`` is a PHP native function which opens a file. It returns a file description, also called handle, that may be used with other PHP file functions to read and write data from and to the files.

``fopen()`` may also be replaced by the ``SplFileObject`` class, which provides a OOP syntax alternative to access files.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fopen.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fopen.ini.html","name":"fopen()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:18:07 +0000","dateModified":"Thu, 16 Jul 2026 08:18:07 +0000","description":"``fopen()`` is a PHP native function which opens a file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fopen().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [File](file.ini.html)
+ [Writing](write.ini.html)
+ [Permission](permission.ini.html)
+ [Writeable](writeable.ini.html)
+ [Readable](readable.ini.html)
+ [SplFileObject](splfileobject.ini.html)
+ [$http\_response\_header]($http_response_header.ini.html)
+ [File Mode](file-mode.ini.html)
+ [Resource Leak](resource-leak.ini.html)
+ [Text](text.ini.html)
+ [Handle](handle.ini.html)
+ [Universal Resource Locator (URL)](url.ini.html)
+ [fread()](fread.ini.html)
+ [fseek()](fseek.ini.html)
+ [ftell()](ftell.ini.html)
+ [rewind()](rewind.ini.html)
+ [fclose()](fclose.ini.html)
+ [fgetc()](fgetc.ini.html)
+ [fgets()](fgets.ini.html)
+ [fwrite()](fwrite.ini.html)
