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

Related : [JavaScript Object Notation (JSON)](JavaScript Object Notation (JSON)), [json_encode()](json_encode()), [Null](Null), [Strpos() Syndrome](Strpos() Syndrome), [ValueError](ValueError), [JSON Lines (JSONC)](JSON Lines (JSONC)), [JSON Lines (JSONL)](JSON Lines (JSONL)), [Parquet](Parquet)
