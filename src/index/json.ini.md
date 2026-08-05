# JavaScript Object Notation (JSON)
JSON, or JavaScript Object Notation, is a lightweight data-interchange format. It is easy for humans to read and write. It is easy for machines to parse and generate. It is based on a subset of the JavaScript Programming Language Standard ECMA-262 3rd Edition - December 1999.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/json.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/json.ini.html","name":"JavaScript Object Notation (JSON)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:02:11 +0000","dateModified":"Tue, 04 Aug 2026 11:02:11 +0000","description":"JSON, or JavaScript Object Notation, is a lightweight data-interchange format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/JavaScript Object Notation (JSON).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Comma Secparated Values (CSV)](csv.ini.html)
+ [json\_decode()](json_decode.ini.html)
+ [JsonSerializable](jsonserializable.ini.html)
+ [Serde](serde.ini.html)
+ [JSON Lines (JSONC)](jsonc.ini.html)
+ [JSON Lines (JSONL)](jsonl.ini.html)
+ [YAML Ain't Markup Language (YAML)](yaml.ini.html)
+ [Tom's Obvious Minimal Language (TOML)](toml.ini.html)
+ [Text](text.ini.html)
+ [Format](format.ini.html)
+ [json\_encode()](json_encode.ini.html)
+ [JsonException](jsonexception.ini.html)
+ [Parquet](parquet.ini.html)
+ [INI](ini.ini.html)
+ [PostgreSQL](pgsql.ini.html)
+ [Progressive Web App](pwa.ini.html)
+ [Schema](schema.ini.html)
+ [AJAX](ajax.ini.html)
+ [Document Database](document-database.ini.html)
+ [JSON Web Token (JWT)](jwt.ini.html)
+ [Template](template.ini.html)
+ [Multidimensional Array](multidimensional-array.ini.html)
+ [Comma](comma.ini.html)
+ [MongoDB](mongodb.ini.html)
+ [Payload](payload.ini.html)
+ [Protocol Buffers](protobuf.ini.html)

## Related packages

+ [jajo/jsondb](https://packagist.org/packages/jajo/jsondb)
