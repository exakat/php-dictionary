# JSON Lines (JSONC)
JSONC, aka SON with Comments, is a superset of JSON that extends its functionality by allowing single-line ``//`` and multi-line ``/* */`` comments.
 
This feature is commonly used in configuration files to improve readability, enabling developers to annotate data directly within the JSON structure.
 
Unlike standard JSON, which does not support comments, JSONC retains full compatibility with valid JSON. However, the reverse is not true: not all JSONC files are valid JSON.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jsonc.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jsonc.html","name":"JSON Lines (JSONC)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"JSONC, aka SON with Comments, is a superset of JSON that extends its functionality by allowing single-line \/\/ and multi-line \/* *\/ comments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jsonc.html"]}],"keywords":["acronym","format"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json_decode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jsonl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json_encode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parquet.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/github.com\/aleron75\/jsonc"},{"@type":"CreativeWork","name":"JSONC homepage","url":"https:\/\/jsonc.org\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"jsonc"}]}]}</script>
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

+ [json\_decode()](json_decode.html)
+ [JSON Lines (JSONL)](jsonl.html)
+ [JavaScript Object Notation (JSON)](json.html)
+ [json\_encode()](json_encode.html)
+ [Parquet](parquet.html)
