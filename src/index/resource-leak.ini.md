# Resource Leak
A resource leak occurs when a resource, such as a file handle, database connection, network socket, or stream, is opened but never properly closed. The resource remains allocated until the process ends or the PHP request finishes, consuming memory and system file descriptors unnecessarily.

Resource leaks are common with ``fopen()``, ``fsockopen()``, database connections opened via ``mysqli_connect()`` or PDO, and cURL handles. If the code returns early, throws an exception, or follows an unexpected path before reaching the ``fclose()`` / ``mysqli_close()`` / ``curl_close()`` call, the resource is leaked. 

In a regular code execution, function returns trigger variable cleaning, which, in turns, leads to the automatic closing of resources. So, the leak might happen when a resource is stored in a property, with a longer life-span, even though it might not be used. ``Weakmap`` are a solution to store data where it might be removed when memory gets tight. 

PHP's request lifecycle mitigates leaks for short-lived web requests: resources are released at the end of the request. However, in long-running CLI scripts, daemons, or applications using ReactPHP or Swoole, leaked resources accumulate and can exhaust system limits.

The recommended mitigation is to use ``try``/``finally`` blocks to guarantee cleanup, or to wrap resources in objects that close themselves in their destructor.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/resource-leak.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/resource-leak.ini.html","name":"Resource Leak","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 04:46:00 +0000","dateModified":"Thu, 16 Jul 2026 04:46:00 +0000","description":"A resource leak occurs when a resource, such as a file handle, database connection, network socket, or stream, is opened but never properly closed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Resource Leak.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // BAD: fclose() may never be reached if an exception is thrown
    $fp = fopen('data.csv', 'r');
    processLines($fp);   // may throw
    fclose($fp);         // skipped on exception → resource leak

    // GOOD: finally guarantees the handle is always closed
    $fp = fopen('data.csv', 'r');
    try {
        processLines($fp);
    } finally {
        fclose($fp);
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Resource_leak)**
## See Also

+ [PHP: fclose](https://www.php.net/manual/en/function.fclose.php)
+ [Handling resource leaks in PHP](https://www.php.net/manual/en/language.exceptions.php)

## Related

+ [resource](resource.ini.html)
+ [Exception](exception.ini.html)
+ [Try-catch](try-catch.ini.html)
+ [Finally](finally.ini.html)
+ [fopen()](fopen.ini.html)
+ [PHP Data Objects (PDO)](pdo.ini.html)
+ [Weakmap](weakmap.ini.html)
+ [Memory Leak](memory-leak.ini.html)
+ [Leak](leak.ini.html)
+ [fclose()](fclose.ini.html)
+ [fread()](fread.ini.html)
+ [ftell()](ftell.ini.html)
+ [fwrite()](fwrite.ini.html)
+ [Linear Type](linear-type.ini.html)
