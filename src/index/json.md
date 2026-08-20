# JavaScript Object Notation (JSON)
JSON, or JavaScript Object Notation, is a lightweight data-interchange format. It is easy for humans to read and write. It is easy for machines to parse and generate. It is based on a subset of the JavaScript Programming Language Standard ECMA-262 3rd Edition - December 1999.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json.html","name":"JavaScript Object Notation (JSON)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"JSON, or JavaScript Object Notation, is a lightweight data-interchange format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/JavaScript Object Notation (JSON).html"]}],"keywords":["acronym","format"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/csv.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json_decode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jsonserializable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serde.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jsonc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jsonl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yaml.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/toml.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/text.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/format.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json_encode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jsonexception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parquet.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ini.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pgsql.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pwa.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/schema.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ajax.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/document-database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jwt.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/template.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multidimensional-array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/comma.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mongodb.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/payload.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/protobuf.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/json"},{"@type":"CreativeWork","name":"JSON home","url":"https:\/\/www.json.org\/json-en.html"},{"@type":"CreativeWork","name":"Working with JSON data in PHP and MySQL: storing and retrieving complex structures","url":"https:\/\/prahladyeri.github.io\/blog\/2024\/11\/working-with-json-data-in-php-mysql.html"},{"@type":"CreativeWork","name":"An In-depth Comparison of JSON, YAML, and TOML","url":"https:\/\/www.anbowell.com\/blog\/an-in-depth-comparison-of-json-yaml-and-toml\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"json"}]}]}</script>
```php
<?php

    $array = ['a' => 1, 'b' => "c", 'c' => [3, 4], 'd' => new stdclass()];
    
    echo json_encode($arr);
    // displays {\a\:1,\b\:\c\,\c\:[3,4],\d\:{}}

?>
```

**[Documentation](https://www.php.net/json)**
## See Also

+ [JSON home](https://www.json.org/json-en.html)
+ [Working with JSON data in PHP and MySQL: storing and retrieving complex structures](https://prahladyeri.github.io/blog/2024/11/working-with-json-data-in-php-mysql.html)
+ [An In-depth Comparison of JSON, YAML, and TOML](https://www.anbowell.com/blog/an-in-depth-comparison-of-json-yaml-and-toml/)

## Related

+ [Comma Separated Values (CSV)](csv.html)
+ [json\_decode()](json_decode.html)
+ [JsonSerializable](jsonserializable.html)
+ [Serde](serde.html)
+ [JSON Lines (JSONC)](jsonc.html)
+ [JSON Lines (JSONL)](jsonl.html)
+ [YAML Ain't Markup Language (YAML)](yaml.html)
+ [Tom's Obvious Minimal Language (TOML)](toml.html)
+ [Text](text.html)
+ [Format](format.html)
+ [json\_encode()](json_encode.html)
+ [JsonException](jsonexception.html)
+ [Parquet](parquet.html)
+ [INI](ini.html)
+ [PostgreSQL](pgsql.html)
+ [Progressive Web App](pwa.html)
+ [Schema](schema.html)
+ [AJAX](ajax.html)
+ [Document Database](document-database.html)
+ [JSON Web Token (JWT)](jwt.html)
+ [Template](template.html)
+ [Multidimensional Array](multidimensional-array.html)
+ [Comma](comma.html)
+ [MongoDB](mongodb.html)
+ [Payload](payload.html)
+ [Protocol Buffers](protobuf.html)

## Related packages

+ [jajo/jsondb](https://packagist.org/packages/jajo/jsondb)
