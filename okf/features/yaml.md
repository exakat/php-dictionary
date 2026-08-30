---
type: "acronym"
title: "YAML Ain't Markup Language (YAML)"
description: "``YAML``, which stands for ``YAML Ain't Markup Language``, is a human-readable data serialization format."
resource: "https://yaml.org/"
tags: ["acronym", "format"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# YAML Ain't Markup Language (YAML)

``YAML``, which stands for ``YAML Ain't Markup Language``, is a human-readable data serialization format. It is often used for configuration files, data exchange between languages with different data structures, and general-purpose data storage. YAML is designed to be easy for humans to read and write while also being easy for machines to parse and generate.

```php
<?php

    $yaml = <<<YAML
    ---
    title: "The title" 
    date: "2001-01-23" 
    amount: 251.420000
    ...
    YAML;
    
    $parsed = yaml_parse($yaml);
    var_dump($parsed);

?>
```

## Documentation
- [https://yaml.org/](https://yaml.org/)

## See Also
- [php-yaml](https://packagist.org/packages/pecl/yaml)
- [PHP YAML](https://www.php.net/manual/en/book.yaml.php)

## Related
- [Parquet](/features/parquet.md)
- [JavaScript Object Notation (JSON)](/features/json.md)
- [Extensible Markup Language (XML)](/features/xml.md)
- [Format](/features/format.md)
- [Serde](/features/serde.md)

## Details
- Packagist: [symfony/yaml](https://packagist.org/packages/symfony/yaml)
- Packagist: [mustangostang/spyc](https://packagist.org/packages/mustangostang/spyc)
- Extension: ext-yaml

