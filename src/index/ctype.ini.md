# Ctype
``ctype`` is a set of functions used for character type checking. These functions are primarily designed to determine the type of characters in a string. They are useful for tasks such as input validation, data processing, and character manipulation. The ctype functions are part of PHP's standard library.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ctype.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ctype.ini.html","name":"Ctype","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``ctype`` is a set of functions used for character type checking","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Ctype.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php
$strings = ['KjgWZC', 'arf12'];
foreach ($strings as $testcase) {
    if (ctype_alpha($testcase)) {
        echo "The string $testcase consists of all letters.\n";
    } else {
        echo "The string $testcase does not consist of all letters.\n";
    }
}
?>
```

**[Documentation](https://www.php.net/manual/en/book.ctype.php)**
## See Also

+ [An Introduction to Ctype Functions](https://www.sitepoint.com/an-introduction-to-ctype-functions/)

## Related

+ [filter](filter.ini.html)
