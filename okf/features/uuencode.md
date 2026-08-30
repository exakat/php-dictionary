---
type: "PHP Feature"
title: "UUencode Encoding"
description: "Uuencode, short for ``Unix-to-Unix encoding``, is a binary-to-text encoding mechanism originally designed to transfer binary data over mediums that only support text, such as email or newsgroups."
resource: "https://en.wikipedia.org/wiki/Uuencoding"
tags: ["encoding"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# UUencode Encoding

Uuencode, short for ``Unix-to-Unix encoding``, is a binary-to-text encoding mechanism originally designed to transfer binary data over mediums that only support text, such as email or newsgroups. It encodes binary files into a text format that can be easily transmitted and decoded back into their original form.

```php
<?php

    $phpString = 'Well, I can say: 你好！' ;
    
    $encoded = convert_uuencode($phpString);
    print $encoded.PHP_EOL;
    //:5V5L;"P@22!C86X@<V%Y.B#DO:#EI;WOO($`
    //`
    
    $decoded = convert_uudecode($encoded);
    print $decoded.PHP_EOL;
    //Well, I can say: 你好！

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Uuencoding](https://en.wikipedia.org/wiki/Uuencoding)

## See Also
- [Php Base64 encode/decode – best practices and use cases](https://inspector.dev/php-base64-encodedecode-best-practices-and-use-cases/)
- [convert_uuencode](https://www.php.net/manual/en/function.convert-uuencode.php)
- [Uuencoding with PHP](https://mojoauth.com/binary-encoding-decoding/uuencoding-with-php/)

## Related
- [Base 64 Encoding](/features/base64.md)

