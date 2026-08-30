---
type: "exception"
title: "JsonException"
description: "Exception thrown if ``JSON_THROW_ON_ERROR`` option is set for ``json_encode()`` or ``json_decode()``."
resource: "https://www.php.net/manual/en/class.jsonexception.php"
tags: ["exception"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# JsonException

Exception thrown if ``JSON_THROW_ON_ERROR`` option is set for ``json_encode()`` or ``json_decode()``. code contains the error type, for possible values see ``json_last_error()``.

```php
<?php

try {
    $data = json_decode($incomingJSON, JSON_THROW_ON_ERROR);

    return base64_encode($data);
} catch (JsonException $e) {
    print 'Could not decrypt the data.';
}

?>
```

## Documentation
- [https://www.php.net/manual/en/class.jsonexception.php](https://www.php.net/manual/en/class.jsonexception.php)

## See Also
- [json_last_error()](https://www.php.net/manual/en/function.json-last-error.php)
- [JsonSerializable](https://www.php.net/manual/en/class.jsonserializable.php)

## Related
- [JavaScript Object Notation (JSON)](/features/json.md)

## Details
- PHP since: 5.0+
- Extension: ext-json

