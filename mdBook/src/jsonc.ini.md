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

## See Also

+ [JSONC homepage](https://jsonc.org/)

Related : [json_decode()](json_decode()), [JSON Lines (JSONL)](JSON Lines (JSONL)), [JavaScript Object Notation (JSON)](JavaScript Object Notation (JSON)), [json_encode()](json_encode()), [Parquet](Parquet)
