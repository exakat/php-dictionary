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

## See Also

+ [php-yaml](https://packagist.org/packages/pecl/yaml)
+ [PHP YAML](https://www.php.net/manual/en/book.yaml.php)

Related : [Parquet](Parquet), [JavaScript Object Notation (JSON)](JavaScript Object Notation (JSON)), [Extensible Markup Language (XML)](Extensible Markup Language (XML)), [Format](Format), [Serde](Serde)
