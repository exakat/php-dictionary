# JavaScript Object Notation (JSON)
JSON, or JavaScript Object Notation, is a lightweight data-interchange format. It is easy for humans to read and write. It is easy for machines to parse and generate. It is based on a subset of the JavaScript Programming Language Standard ECMA-262 3rd Edition - December 1999.
```php
<?php

    $array = ['a' => 1, 'b' => "c", 'c' => [3, 4], 'd' => new stdclass()];
    
    echo json_encode($arr);
    // displays {\a\:1,\b\:\c\,\c\:[3,4],\d\:{}}

?>
```

## See Also

+ [JSON home](https://www.json.org/json-en.html)
+ [Working with JSON data in PHP and MySQL: storing and retrieving complex structures](https://prahladyeri.github.io/blog/2024/11/working-with-json-data-in-php-mysql.html)
+ [An In-depth Comparison of JSON, YAML, and TOML](https://www.anbowell.com/blog/an-in-depth-comparison-of-json-yaml-and-toml/)

Related : [Comma Secparated Values (CSV)](Comma Secparated Values (CSV)), [json_decode()](json_decode()), [JsonSerializable](JsonSerializable), [Serde](Serde), [JSON Lines (JSONC)](JSON Lines (JSONC)), [JSON Lines (JSONL)](JSON Lines (JSONL)), [YAML Ain't Markup Language (YAML)](YAML Ain't Markup Language (YAML)), [Tom's Obvious Minimal Language (TOML)](Tom's Obvious Minimal Language (TOML)), [Text](Text), [Format](Format), [json_encode()](json_encode()), [JsonException](JsonException), [Parquet](Parquet), [INI](INI), [PostgreSQL](PostgreSQL), [Progressive Web App](Progressive Web App), [Schema](Schema), [AJAX](AJAX), [Document Database](Document Database), [JSON Web Token (JWT)](JSON Web Token (JWT)), [Template](Template), [Multidimensional Array](Multidimensional Array), [Comma](Comma), [MongoDB](MongoDB), [Payload](Payload), [Protocol Buffers](Protocol Buffers)
