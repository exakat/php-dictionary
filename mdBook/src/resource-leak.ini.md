# Resource Leak
A resource leak occurs when a resource, such as a file handle, database connection, network socket, or stream, is opened but never properly closed. The resource remains allocated until the process ends or the PHP request finishes, consuming memory and system file descriptors unnecessarily.

Resource leaks are common with ``fopen()``, ``fsockopen()``, database connections opened via ``mysqli_connect()`` or PDO, and cURL handles. If the code returns early, throws an exception, or follows an unexpected path before reaching the ``fclose()`` / ``mysqli_close()`` / ``curl_close()`` call, the resource is leaked. 

In a regular code execution, function returns trigger variable cleaning, which, in turns, leads to the automatic closing of resources. So, the leak might happen when a resource is stored in a property, with a longer life-span, even though it might not be used. ``Weakmap`` are a solution to store data where it might be removed when memory gets tight. 

PHP's request lifecycle mitigates leaks for short-lived web requests: resources are released at the end of the request. However, in long-running CLI scripts, daemons, or applications using ReactPHP or Swoole, leaked resources accumulate and can exhaust system limits.

The recommended mitigation is to use ``try``/``finally`` blocks to guarantee cleanup, or to wrap resources in objects that close themselves in their destructor.
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

## See Also

+ [PHP: fclose](https://www.php.net/manual/en/function.fclose.php)
+ [Handling resource leaks in PHP](https://www.php.net/manual/en/language.exceptions.php)

Related : [resource](resource), [Exception](Exception), [Try-catch](Try-catch), [Finally](Finally), [fopen()](fopen()), [PHP Data Objects (PDO)](PHP Data Objects (PDO)), [Weakmap](Weakmap), [Memory Leak](Memory Leak), [Leak](Leak), [fclose()](fclose()), [fread()](fread()), [ftell()](ftell()), [fwrite()](fwrite()), [Linear Type](Linear Type)
