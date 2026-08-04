# PHP Wrappers
A wrapper is a custom way to access remote resources. It is designed to look like accessing to file, on the file system, but using other drivers than the ones of the hard drive. It is based on a configuration string, which looks like a URL: ``ftp://www.site.com/file.txt``, where the part before the ``://`` is the protocol.

Among the predefined PHP wrapper, there are ``http://``, ``ftp://``, ``zlib://``, ``phar://``, ``rar://``, ``expect://``.
```php
<?php

$html = file_get_content('http://www.php.net/');

?>
```

## See Also

+ [Protocols and Wrapper in PHP](https://www.geeksforgeeks.org/protocols-and-wrapper-in-php/)
+ [Php wrapper and Local File Inclusion](https://medium.com/@robsfromashes/php-wrapper-and-local-file-inclusion-2fb82c891f55)

Related : [Protocol](Protocol), [Wrapper](Wrapper), [file://](file://), [Thin Method](Thin Method), [ftp://](ftp://), [Wrapper Pattern](Wrapper Pattern), [php://](php://), [http://](http://), [zlib extension](zlib extension)
