# filter
The ``filter`` extension is a built-in extension that provides an efficient way to filter, validate and sanitize data. Give it a string, and check that it satisfies a specific format.

``filter`` works on incoming data, such as ``$_GET`` or ``$_POST``, but also on free variables.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/filter.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/filter.html","name":"filter","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 21:02:50 +0000","dateModified":"Tue, 11 Aug 2026 21:02:50 +0000","description":"The filter extension is a built-in extension that provides an efficient way to filter, validate and sanitize data","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/filter.html"]}],"keywords":["extension","validation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extension.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/validation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sanitation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/incoming-data.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-filter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ctype.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/email.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.xmlwriter.php"},{"@type":"CreativeWork","name":"PHP Filter and Filter Constant","url":"https:\/\/www.geeksforgeeks.org\/php-filter-and-filter-constant\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"filter"}]}]}</script>
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

+ [Extensions](extension.html)
+ [Validation](validation.html)
+ [Sanitation](sanitation.html)
+ [Incoming Data](incoming-data.html)
+ [php://filter](php-filter.html)
+ [Ctype](ctype.html)
+ [Email](email.html)

## Related packages

+ [clue/stream-filter](https://packagist.org/packages/clue/stream-filter)
+ [laminas/laminas-filter](https://packagist.org/packages/laminas/laminas-filter)
