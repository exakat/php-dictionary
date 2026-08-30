---
type: "concept"
title: "Convert"
description: "To convert is to transform a piece of data, from one format to another."
resource: "https://en.wikipedia.org/wiki/Data_conversion"
tags: ["concept", "data"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://en.wikipedia.org/wiki/Data_conversion](https://en.wikipedia.org/wiki/Data_conversion)

## See Also
- [Type Juggling](https://www.php.net/manual/en/language.types.type-juggling.php)
- [settype](https://www.php.net/manual/en/function.settype.php)
- [Conversions](https://phplang.org/spec/08-conversions.html)

## Related
- [Cast Operator](/features/cast.md)
- [Encode](/features/encode.md)
- [Decode](/features/decode.md)
- [To Crypt](/features/crypt.md)
- [To Decrypt](/features/decrypt.md)
- [Hash](/features/hash.md)
- [Sign](/features/sign.md)
- [Lossless](/features/lossless.md)
- [Lossy](/features/lossy.md)

