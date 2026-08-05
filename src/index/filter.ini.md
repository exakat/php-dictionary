# filter
The ``filter`` extension is a built-in extension that provides an efficient way to filter, validate and sanitize data. Give it a string, and check that is satisfy a specific format.

``filter`` works on incoming data, such as ``$_GET`` or ``$_POST``, but also on free variables.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/filter.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/filter.ini.html","name":"filter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The ``filter`` extension is a built-in extension that provides an efficient way to filter, validate and sanitize data","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/filter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$data = [
    'age' => '123 years',
    'name'  => 'John Doe',
];

$filters = [
    'age'   => FILTER_VALIDATE_INT,
    'name'   => FILTER_SANITIZE_ENCODED,
];

print_r(filter_var_array($data, $filters));

?>
```

**[Documentation](https://www.php.net/manual/en/book.xmlwriter.php)**
## See Also

+ [PHP Filter and Filter Constant](https://www.geeksforgeeks.org/php-filter-and-filter-constant/)

## Related

+ [Extensions](extension.ini.html)
+ [Validation](validation.ini.html)
+ [Sanitation](sanitation.ini.html)
+ [Incoming Data](incoming-data.ini.html)
+ [php://filter](php-filter.ini.html)
+ [Ctype](ctype.ini.html)
+ [Email](email.ini.html)

## Related packages

+ [clue/stream-filter](https://packagist.org/packages/clue/stream-filter)
+ [laminas/laminas-filter](https://packagist.org/packages/laminas/laminas-filter)
