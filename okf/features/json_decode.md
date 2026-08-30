---
type: "PHP Feature"
title: "json_decode()"
description: "``json_decode()`` decodes a JSON string into a data structure."
resource: "https://www.php.net/manual/en/function.json-decode.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# json_decode()

``json_decode()`` decodes a JSON string into a data structure.

In case an error arise during parsing, a ``null`` value is returned, as the default value. This error may be confused with the decoding of the ``'null'`` string, which is a valid JSON value. It may also raise a ``ValueError``, when the function is configured by ``JSON_THROW_ON_ERROR``.

```php
<?php

    $json = '[1,2,3]';
    try {
        $variable = json_decode($json, flags: JSON_THROW_ON_ERROR);
    } catch(ValueError $e) {
        print "JSON decoding error";
    }
    // $variable === [1,2,3];

?>
```

## Documentation
- [https://www.php.net/manual/en/function.json-decode.php](https://www.php.net/manual/en/function.json-decode.php)

## See Also
- [json_encode()](https://www.php.net/manual/en/function.json-encode.php)
- [JSON constants (JSON_THROW_ON_ERROR)](https://www.php.net/manual/en/json.constants.php)

## Related
- [JavaScript Object Notation (JSON)](/features/json.md)
- [json_encode()](/features/json_encode.md)
- [Null](/features/null.md)
- [Strpos() Syndrome](/features/strpos-syndrom.md)
- [ValueError](/features/valueerror.md)
- [JSON Lines (JSONC)](/features/jsonc.md)
- [JSON Lines (JSONL)](/features/jsonl.md)
- [Parquet](/features/parquet.md)

## Details
- Extension: ext-json

