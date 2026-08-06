# JSON Lines (JSONL)
JSONL, JSON Lines, is a text-based format where each line is a valid, independent JSON object, separated by newline characters. 

It is ideal for storing structured data, large datasets, and logging, as it allows for streaming and processing files line-by-line without loading the entire file into memory. It is also known as newline-delimited JSON, NDJSON.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/jsonl.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/jsonl.html","name":"JSON Lines (JSONL)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:40:59 +0000","dateModified":"Thu, 23 Jul 2026 13:40:59 +0000","description":"JSONL, JSON Lines, is a text-based format where each line is a valid, independent JSON object, separated by newline characters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/JSON Lines (JSONL).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://github.com/indykoning/php-jsonl)**
## See Also

+ [JSON Lines](https://jsonlines.org/)

## Related

+ [json\_decode()](json_decode.ini.html)
+ [JSON Lines (JSONC)](jsonc.ini.html)
+ [JavaScript Object Notation (JSON)](json.ini.html)
+ [Parquet](parquet.ini.html)
