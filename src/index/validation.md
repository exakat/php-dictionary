# Validation
Validation is the process to check that a data conform to a specific pattern or set of constraints. The data is not modified by a validation process. There are PHP extension and external components to perform validation tasks. 

Validation applies to simple values, such as strings or integer; they also apply to larger structures, like XML, JSON or YAML, where the number of simple value is high.

Validation is also called filtering.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/validation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/validation.html","name":"Validation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:37:31 +0000","dateModified":"Wed, 05 Aug 2026 08:37:31 +0000","description":"Validation is the process to check that a data conform to a specific pattern or set of constraints","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Validation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Sanitation](sanitation.ini.html)
+ [Parse](parse.ini.html)
+ [Parser](parser.ini.html)
+ [Schema](schema.ini.html)
+ [Specification](specification.ini.html)
+ [filter](filter.ini.html)
+ [parse\_url()](parse_url.ini.html)
+ [is\_array()](is_array.ini.html)
+ [is\_bool()](is_bool.ini.html)
+ [is\_int()](is_int.ini.html)
+ [is\_string()](is_string.ini.html)
+ [Refinement Type](refinement-type.ini.html)
+ [ETL](etl.ini.html)
+ [HTMLPurifier](htmlpurifier.ini.html)
+ [is\_float()](is_float.ini.html)
+ [is\_numeric()](is_numeric.ini.html)
+ [Referential Integrity](referential-integrity.ini.html)

## Related packages

+ [respect/validation](https://packagist.org/packages/respect/validation)
+ [beberlei/assert](https://packagist.org/packages/beberlei/assert)
+ [lemmon/validator](https://packagist.org/packages/lemmon/validator)
