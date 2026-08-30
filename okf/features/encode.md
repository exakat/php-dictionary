---
type: "concept"
title: "Encode"
description: "To encode is to transform a piece of data, from a human readable format to a specialized format."
resource: "https://en.wikipedia.org/wiki/Character_encoding"
tags: ["concept", "data"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Encode

To encode is to transform a piece of data, from a human readable format to a specialized format.

The conversion is lossless, and shall be reverted with a decode operation.

```php
<?php

    // convert an array to a JSON string
    // This is also called 'encoding', and may be decoded
    $array = ['a' => 1];
    $json = json_encode($array);
    
    $original = json_decode($json);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Character_encoding](https://en.wikipedia.org/wiki/Character_encoding)

## See Also
- [PHP: Useful Encoding and decoding Functions You Need to Know](https://canopas.com/php-useful-encoding-and-decoding-functions-you-need-to-know-210e523a065f)

## Related
- [Decode](/features/decode.md)
- [Convert](/features/convert.md)

