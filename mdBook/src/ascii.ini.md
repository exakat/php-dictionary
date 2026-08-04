# American Standard Code for Information Interchange (ASCII)
ASCII is a character encoding standard used to represent text in computers and electronic devices. It assigns a unique number, or code, to each character, allowing text to be stored and processed digitally.

PHP handles ASCII characters with the functions ``ord()`` and ``chr()``.
```php
<?php

$string = 'abdc';

echo ord($string[1]); // b = 98

echo chr(100); // d

?>
```

## See Also

+ [Converting to and from ASCII](http://www.hackingwithphp.com/4/7/3/converting-to-and-from-ascii)
+ [A Guide to PHP’s chr() Function: Working with ASCII](https://clouddevs.com/php/chr-function/)

Related : [Byte](Byte), [Character](Character), [Carriage Return](Carriage Return), [Line Feed](Line Feed), [Multi-byte](Multi-byte), [String Increment](String Increment)
