---
type: "acronym"
title: "JSON Lines (JSONC)"
description: "JSONC, aka SON with Comments, is a superset of JSON that extends its functionality by allowing single-line ``//`` and multi-line ``/* */`` comments."
resource: "https://github.com/aleron75/jsonc"
tags: ["acronym", "format"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# JSON Lines (JSONC)

JSONC, aka SON with Comments, is a superset of JSON that extends its functionality by allowing single-line ``//`` and multi-line ``/* */`` comments.
 
This feature is commonly used in configuration files to improve readability, enabling developers to annotate data directly within the JSON structure.
 
Unlike standard JSON, which does not support comments, JSONC retains full compatibility with valid JSON. However, the reverse is not true: not all JSONC files are valid JSON.

```php
<?php

    $JSONL = <<<JSONL
{a:1}
{b:2}
JSONL;

foreach(explode(\n, $JSONL) as $line) {
    print_r(json_decode($line));
}

/**
stdClass Object
(
    [a] => 1
)
stdClass Object
(
    [b] => 2
)
*/

?>
```

## Documentation
- [https://github.com/aleron75/jsonc](https://github.com/aleron75/jsonc)

## See Also
- [JSONC homepage](https://jsonc.org/)

## Related
- [json_decode()](/features/json_decode.md)
- [JSON Lines (JSONL)](/features/jsonl.md)
- [JavaScript Object Notation (JSON)](/features/json.md)
- [json_encode()](/features/json_encode.md)
- [Parquet](/features/parquet.md)

