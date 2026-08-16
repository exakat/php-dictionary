# JavaScript Object Notation (JSON)
JSON, or JavaScript Object Notation, is a lightweight data-interchange format. It is easy for humans to read and write. It is easy for machines to parse and generate. It is based on a subset of the JavaScript Programming Language Standard ECMA-262 3rd Edition - December 1999.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json.html","name":"JavaScript Object Notation (JSON)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"JSON, or JavaScript Object Notation, is a lightweight data-interchange format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/JavaScript Object Notation (JSON).html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"json"}]}]}</script>
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
