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

## See Also

+ [JSON Lines](https://jsonlines.org/)

Related : [json_decode()](json_decode()), [JSON Lines (JSONC)](JSON Lines (JSONC)), [JavaScript Object Notation (JSON)](JavaScript Object Notation (JSON)), [Parquet](Parquet)
