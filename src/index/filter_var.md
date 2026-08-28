# Filter\_var()
``filter_var()`` filters a single variable with a specified filter, either validating its content or sanitizing it.

The first argument is the value to filter. The second argument is one of the ``FILTER_VALIDATE_*`` or ``FILTER_SANITIZE_*`` constants, such as ``FILTER_VALIDATE_EMAIL``, ``FILTER_VALIDATE_INT`` or ``FILTER_SANITIZE_FULL_SPECIAL_CHARS``, defaulting to ``FILTER_DEFAULT`` when omitted.

Validation filters return the filtered value, converted to the expected type, or ``false`` when the value does not pass validation. Since ``false`` is also a legitimate filtered value for some filters, it is recommended to compare the result with ``===`` rather than relying on truthiness. An optional third argument accepts flags and options, such as a regular expression for ``FILTER_VALIDATE_REGEXP``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/filter_var.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/filter_var.html","name":"Filter_var()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 28 Aug 2026 09:34:44 +0000","dateModified":"Fri, 28 Aug 2026 09:34:44 +0000","description":"filter_var() filters a single variable with a specified filter, either validating its content or sanitizing it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/filter_var.html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/filter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-filter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/preg_match.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_int.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sanitation.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.filter-var.php"},{"@type":"CreativeWork","name":"PHP: Validate Filters","url":"https:\/\/www.php.net\/manual\/en\/filter.filters.validate.php"},{"@type":"CreativeWork","name":"PHP: Sanitize Filters","url":"https:\/\/www.php.net\/manual\/en\/filter.filters.sanitize.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"filter_var"}]}]}</script>
```php
<?php

$email = 'user@example.com';

if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    print 'Invalid email address';
} else {
    print 'Valid email address';
}

?>
```

**[Documentation](https://www.php.net/manual/en/function.filter-var.php)**
## See Also

+ [PHP: Validate Filters](https://www.php.net/manual/en/filter.filters.validate.php)
+ [PHP: Sanitize Filters](https://www.php.net/manual/en/filter.filters.sanitize.php)

## Related

+ [filter](filter.html)
+ [php://filter](php-filter.html)
+ [Preg\_match](preg_match.html)
+ [is\_int()](is_int.html)
+ [is\_string()](is_string.html)
+ [Sanitation](sanitation.html)
