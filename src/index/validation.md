# Validation
Validation is the process to check that a data conform to a specific pattern or set of constraints. The data is not modified by a validation process. There are PHP extension and external components to perform validation tasks. 

Validation applies to simple values, such as strings or integer; they also apply to larger structures, like XML, JSON or YAML, where the number of simple value is high.

Validation is also called filtering.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/validation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/validation.html","name":"Validation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:37:31 +0000","dateModified":"Wed, 05 Aug 2026 08:37:31 +0000","description":"Validation is the process to check that a data conform to a specific pattern or set of constraints","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Validation.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"validation"}]}]}</script>
```php
<?php

    if (intval($string) > 0) {
        print "The string is an integer";
    }

?>
```

**[Documentation](https://www.php.net/manual/en/filter.examples.validation.php)**
## See Also

+ [PHP Form Validation](https://www.geeksforgeeks.org/php-form-validation/)

## Related

+ [Sanitation](sanitation.html)
+ [Parse](parse.html)
+ [Parser](parser.html)
+ [Schema](schema.html)
+ [Specification](specification.html)
+ [filter](filter.html)
+ [parse\_url()](parse_url.html)
+ [is\_array()](is_array.html)
+ [is\_bool()](is_bool.html)
+ [is\_int()](is_int.html)
+ [is\_string()](is_string.html)
+ [Refinement Type](refinement-type.html)
+ [ETL](etl.html)
+ [HTMLPurifier](htmlpurifier.html)
+ [is\_float()](is_float.html)
+ [is\_numeric()](is_numeric.html)
+ [Referential Integrity](referential-integrity.html)

## Related packages

+ [respect/validation](https://packagist.org/packages/respect/validation)
+ [beberlei/assert](https://packagist.org/packages/beberlei/assert)
+ [lemmon/validator](https://packagist.org/packages/lemmon/validator)
