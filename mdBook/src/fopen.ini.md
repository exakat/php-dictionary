# fopen()
``fopen()`` is a PHP native function which opens a file. It returns a file description, also called handle, that may be used with other PHP file functions to read and write data from and to the files.

``fopen()`` may also be replaced by the ``SplFileObject`` class, which provides a OOP syntax alternative to access files.

```php
<?php

    $fp = fopen('/tmp/test.txt', 'r');
    fwrite($fp, 'PHP rocks!');
    fclose($fp);

?>
```

## See Also

+ [PHP Open File](https://www.phptutorial.net/php-tutorial/php-open-file/)

Related : [File](File), [Writing](Writing), [Permission](Permission), [Writeable](Writeable), [Readable](Readable), [SplFileObject](SplFileObject), [$http_response_header]($http_response_header), [File Mode](File Mode), [Resource Leak](Resource Leak), [Text](Text), [Handle](Handle), [Universal Resource Locator (URL)](Universal Resource Locator (URL)), [fread()](fread()), [fseek()](fseek()), [ftell()](ftell()), [rewind()](rewind()), [fclose()](fclose()), [fgetc()](fgetc()), [fgets()](fgets()), [fwrite()](fwrite())
