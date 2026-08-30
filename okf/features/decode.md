---
type: "concept"
title: "Decode"
description: "To decode is to transform a piece of data, from a specialized format to a human readable one."
resource: "https://en.wikipedia.org/wiki/Code"
tags: ["concept", "data"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Decode

To decode is to transform a piece of data, from a specialized format to a human readable one.

The conversion is lossless, and shall be reverted with an encode operation.

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
- [https://en.wikipedia.org/wiki/Code](https://en.wikipedia.org/wiki/Code)

## See Also
- [PHP: Useful Encoding and decoding Functions You Need to Know](https://canopas.com/php-useful-encoding-and-decoding-functions-you-need-to-know-210e523a065f)

## Related
- [Encode](/features/encode.md)
- [Convert](/features/convert.md)

