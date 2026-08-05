# JSON Lines (JSONC)
JSONC, aka SON with Comments, is a superset of JSON that extends its functionality by allowing single-line ``//`` and multi-line ``/* */`` comments.
 
This feature is commonly used in configuration files to improve readability, enabling developers to annotate data directly within the JSON structure.
 
Unlike standard JSON, which does not support comments, JSONC retains full compatibility with valid JSON. However, the reverse is not true: not all JSONC files are valid JSON.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/jsonc.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/jsonc.ini.html","name":"JSON Lines (JSONC)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:40:38 +0000","dateModified":"Thu, 23 Jul 2026 13:40:38 +0000","description":"JSONC, aka SON with Comments, is a superset of JSON that extends its functionality by allowing single-line ``\/\/`` and multi-line ``\/* *\/`` comments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/JSON Lines (JSONC).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://github.com/aleron75/jsonc)**
## See Also

+ [JSONC homepage](https://jsonc.org/)

## Related

+ [json\_decode()](json_decode.ini.html)
+ [JSON Lines (JSONL)](jsonl.ini.html)
+ [JavaScript Object Notation (JSON)](json.ini.html)
+ [json\_encode()](json_encode.ini.html)
+ [Parquet](parquet.ini.html)
