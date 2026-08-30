---
type: "PHP Feature"
title: "json_encode()"
description: "``json_encode()`` encodes a data structure into a JSON string."
resource: "https://www.php.net/manual/en/function.json-encode.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# json_encode()

``json_encode()`` encodes a data structure into a JSON string.

In case an error arise during parsing, a ``null`` value is returned, as the default value. This error may be confused with the decoding of the ``'null'`` string, which is a valid JSON value. It may also raise a ``ValueError``, when the function is configured by ``JSON_THROW_ON_ERROR``.

```php
<?php

    $data = [1,2,3];
    try {
        $json = json_encode($data);
    } catch(ValueError $e) {
        print "JSON encoding error";
    }
    // $json === '[1,2,3]';

?>
```

## Documentation
- [https://www.php.net/manual/en/function.json-encode.php](https://www.php.net/manual/en/function.json-encode.php)

## See Also
- [Serialize and Deserialize JSON with PHP](https://mojoauth.com/serialize-and-deserialize/serialize-and-deserialize-json-with-php)

## Related
- [JavaScript Object Notation (JSON)](/features/json.md)
- [JSON Lines (JSONC)](/features/jsonc.md)
- [json_decode()](/features/json_decode.md)
- [get_object_vars()](/features/get_object_vars.md)

## Details
- Extension: ext-json

