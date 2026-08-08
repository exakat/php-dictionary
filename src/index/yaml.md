# YAML Ain't Markup Language (YAML)
``YAML``, which stands for ``YAML Ain't Markup Language``, is a human-readable data serialization format. It is often used for configuration files, data exchange between languages with different data structures, and general-purpose data storage. YAML is designed to be easy for humans to read and write while also being easy for machines to parse and generate.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yaml.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yaml.html","name":"YAML Ain't Markup Language (YAML)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``YAML``, which stands for ``YAML Ain't Markup Language``, is a human-readable data serialization format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/YAML Ain't Markup Language (YAML).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"YAML Ain't Markup Language (YAML)"}]}]}</script>
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

**[Documentation](https://yaml.org/)**
## See Also

+ [php-yaml](https://packagist.org/packages/pecl/yaml)
+ [PHP YAML](https://www.php.net/manual/en/book.yaml.php)

## Related

+ [Parquet](parquet.html)
+ [JavaScript Object Notation (JSON)](json.html)
+ [Extensible Markup Language (XML)](xml.html)
+ [Format](format.html)
+ [Serde](serde.html)

## Related packages

+ [symfony/yaml](https://packagist.org/packages/symfony/yaml)
+ [mustangostang/spyc](https://packagist.org/packages/mustangostang/spyc)
