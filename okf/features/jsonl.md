---
type: "acronym"
title: "JSON Lines (JSONL)"
description: "JSONL, JSON Lines, is a text-based format where each line is a valid, independent JSON object, separated by newline characters."
resource: "https://github.com/indykoning/php-jsonl"
tags: ["acronym", "format"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# JSON Lines (JSONL)

JSONL, JSON Lines, is a text-based format where each line is a valid, independent JSON object, separated by newline characters. 

It is ideal for storing structured data, large datasets, and logging, as it allows for streaming and processing files line-by-line without loading the entire file into memory. It is also known as newline-delimited JSON, NDJSON.

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
- [https://github.com/indykoning/php-jsonl](https://github.com/indykoning/php-jsonl)

## See Also
- [JSON Lines](https://jsonlines.org/)

## Related
- [json_decode()](/features/json_decode.md)
- [JSON Lines (JSONC)](/features/jsonc.md)
- [JavaScript Object Notation (JSON)](/features/json.md)
- [Parquet](/features/parquet.md)

