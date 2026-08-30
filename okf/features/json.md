---
type: "acronym"
title: "JavaScript Object Notation (JSON)"
description: "JSON, or JavaScript Object Notation, is a lightweight data-interchange format."
resource: "https://www.php.net/json"
tags: ["acronym", "format"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# JavaScript Object Notation (JSON)

JSON, or JavaScript Object Notation, is a lightweight data-interchange format. It is easy for humans to read and write. It is easy for machines to parse and generate. It is based on a subset of the JavaScript Programming Language Standard ECMA-262 3rd Edition - December 1999.

```php
<?php

    $array = ['a' => 1, 'b' => "c", 'c' => [3, 4], 'd' => new stdclass()];
    
    echo json_encode($arr);
    // displays {\a\:1,\b\:\c\,\c\:[3,4],\d\:{}}

?>
```

## Documentation
- [https://www.php.net/json](https://www.php.net/json)

## See Also
- [JSON home](https://www.json.org/json-en.html)
- [Working with JSON data in PHP and MySQL: storing and retrieving complex structures](https://prahladyeri.github.io/blog/2024/11/working-with-json-data-in-php-mysql.html)
- [An In-depth Comparison of JSON, YAML, and TOML](https://www.anbowell.com/blog/an-in-depth-comparison-of-json-yaml-and-toml/)

## Related
- [Comma Separated Values (CSV)](/features/csv.md)
- [json_decode()](/features/json_decode.md)
- [JsonSerializable](/features/jsonserializable.md)
- [Serde](/features/serde.md)
- [JSON Lines (JSONC)](/features/jsonc.md)
- [JSON Lines (JSONL)](/features/jsonl.md)
- [YAML Ain't Markup Language (YAML)](/features/yaml.md)
- [Tom's Obvious Minimal Language (TOML)](/features/toml.md)
- [Text](/features/text.md)
- [Format](/features/format.md)
- [json_encode()](/features/json_encode.md)
- [JsonException](/features/jsonexception.md)
- [Parquet](/features/parquet.md)
- [INI](/features/ini.md)
- [PostgreSQL](/features/pgsql.md)
- [Progressive Web App](/features/pwa.md)
- [Schema](/features/schema.md)
- [AJAX](/features/ajax.md)
- [Document Database](/features/document-database.md)
- [JSON Web Token (JWT)](/features/jwt.md)
- [Template](/features/template.md)
- [Multidimensional Array](/features/multidimensional-array.md)
- [Comma](/features/comma.md)
- [MongoDB](/features/mongodb.md)
- [Payload](/features/payload.md)
- [Protocol Buffers](/features/protobuf.md)

## Details
- PHP since: 5.0+
- Packagist: [jajo/jsondb](https://packagist.org/packages/jajo/jsondb)

