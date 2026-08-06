# Stubs Files
Stubs files are PHP code, that contains only the definitions of classic PHP structures: functions, constants, classes, interfaces, without any actual code. They provide the definitions and signatures, in particular for type analysis or static code analysis reviews.

Stubs files are also used for PHP code templates: they are mostly made of PHP code, with placeholders, for later generations.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/stubs.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/stubs.html","name":"Stubs Files","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 17 Jun 2026 16:20:42 +0000","dateModified":"Wed, 17 Jun 2026 16:20:42 +0000","description":"Stubs files are PHP code, that contains only the definitions of classic PHP structures: functions, constants, classes, interfaces, without any actual code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Stubs Files.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $a = 0; // $a is getting overwritten
    $array = extract(['a' => 1, 'b' => 2]);

    echo $a + $b; // 2

?>
```

**[Documentation](https://www.php.net/manual/en/function.extract.php)**
## See Also

+ [Stub Files - PHPStan User Guide](https://phpstan.org/user-guide/stub-files)

## Related

+ [compact()](compact.ini.html)

## Related packages

+ [php-stubs/generator](https://packagist.org/packages/php-stubs/generator)
