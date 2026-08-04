# Convert
To convert is to transform a piece of data, from one format to another. 

The conversion may be lossless, when it may be reverted without loss of information. It is lossy when it cannot be reverted, or if this operation is very expensive. 

PHP has several conversion systems: 

+ Cast, with ``(int)``, ``(array)``, ``(string)``, etc
+ String format conversion, with ``iconv()``, ``mb_convert_encoding()``, or ``UConverter::transcode``.
+ Number base conversion, with ``base_convert()`` and ``intval()``.

To convert may also be called cast, encode/decode, escape, crypt/decrypt, hash, sign, etc. depending on the context.
```php
<?php

    // convert an array to a JSON string
    // This is also called 'encoding', and may be decoded
    $array = ['a' => 1];
    $json = json_encode($array);
    
    // convert a string to its MD5 signature
    // it cannot be reverted easily, and it is considered lossful
    $string = 'PHP rocks';
    $hash = md5($string);

?>
```

Related : [Cast Operator](Cast Operator), [Encode](Encode), [Decode](Decode), [Escape Data](Escape Data), [To Crypt](To Crypt), [To Decrypt](To Decrypt), [Hash](Hash), [Sign](Sign), [Lossless](Lossless), [Lossy](Lossy)
