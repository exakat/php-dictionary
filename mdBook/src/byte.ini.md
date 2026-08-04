# Byte
A byte is a unit of digital information storage that typically consists of 8 bits. It is the fundamental building block for representing data in computers. A byte can store values ranging from 0 to 255, in an unsigned 8-bit representation.

PHP uses bytes when manipulating strings. Bytes are characters, as long as the string uses ASCII representation, which is by default. Characters might be larger than a byte, and they become multi-bytes.
```php
<?php

    $string = abcd;

    echo strlen($string); // 4

?>
```

Related : [Character](Character), [Multi-byte](Multi-byte), [American Standard Code for Information Interchange (ASCII)](American Standard Code for Information Interchange (ASCII))
