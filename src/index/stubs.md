# Stubs Files
Stubs files are PHP code, that contains only the definitions of classic PHP structures: functions, constants, classes, interfaces, without any actual code. They provide the definitions and signatures, in particular for type analysis or static code analysis reviews.

Stubs files are also used for PHP code templates: they are mostly made of PHP code, with placeholders, for later generations.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stubs.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stubs.html","name":"Stubs Files","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Stubs files are PHP code, that contains only the definitions of classic PHP structures: functions, constants, classes, interfaces, without any actual code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Stubs Files.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"stubs"}]}]}</script>
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

+ [compact()](compact.html)

## Related packages

+ [php-stubs/generator](https://packagist.org/packages/php-stubs/generator)
