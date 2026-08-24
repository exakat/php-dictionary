# JSON Lines (JSONL)
JSONL, JSON Lines, is a text-based format where each line is a valid, independent JSON object, separated by newline characters. 

It is ideal for storing structured data, large datasets, and logging, as it allows for streaming and processing files line-by-line without loading the entire file into memory. It is also known as newline-delimited JSON, NDJSON.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jsonl.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jsonl.html","name":"JSON Lines (JSONL)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"JSONL, JSON Lines, is a text-based format where each line is a valid, independent JSON object, separated by newline characters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jsonl.html"]}],"alternateName":["ndjson"],"keywords":["acronym","format"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json_decode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jsonc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parquet.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/github.com\/indykoning\/php-jsonl"},{"@type":"CreativeWork","name":"JSON Lines","url":"https:\/\/jsonlines.org\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"jsonl"}]}]}</script>
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

+ [json\_decode()](json_decode.html)
+ [JSON Lines (JSONC)](jsonc.html)
+ [JavaScript Object Notation (JSON)](json.html)
+ [Parquet](parquet.html)
