# Numeric Separator
Since PHP 7.4, it is possible to add underscores as numeric separators within numeric literals to improve their readability. This feature allows to group digits, making them easier to read and understand. Numeric separators have no effect on the value of the number; they're purely for human-friendly formatting.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeric-separator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeric-separator.html","name":"Numeric Separator","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 22 Aug 2026 07:59:49 +0000","dateModified":"Sat, 22 Aug 2026 07:59:49 +0000","description":"Since PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeric-separator.html"]}],"alternateName":["integer-separator"],"keywords":["feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/integer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/float.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/underscore.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/separator.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.integer.php#language.types.integer.syntax"},{"@type":"CreativeWork","name":"Underscore numeric separator - PHP 7.4","url":"https:\/\/php.watch\/versions\/7.4\/underscore_numeric_separator"},{"@type":"CreativeWork","name":"PHP RFC: Numeric Literal Separator","url":"https:\/\/wiki.php.net\/rfc\/numeric_literal_separator"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"numeric-separator"}]}]}</script>
```php
<?php

$phone_fr = 1_33_61_23_45_67;
$phone_ca = 1_514_387_9947;

// true;
var_dump(1_2_3 === 123);

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.integer.php#language.types.integer.syntax)**
## See Also

+ [Underscore numeric separator - PHP 7.4](https://php.watch/versions/7.4/underscore_numeric_separator)
+ [PHP RFC: Numeric Literal Separator](https://wiki.php.net/rfc/numeric_literal_separator)

## Related

+ [integer](integer.html)
+ [Floating Point Numbers](float.html)
+ [Underscore](underscore.html)
+ [Separator](separator.html)
