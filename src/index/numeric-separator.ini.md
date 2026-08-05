# Numeric Separator
Since PHP 7.4, it is possible to add underscores as numeric separators within numeric literals to improve their readability. This feature allows to group digits, making them easier to read and understand. Numeric separators have no effect on the value of the number; they're purely for human-friendly formatting.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/numeric-separator.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/numeric-separator.ini.html","name":"Numeric Separator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Since PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Numeric Separator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$phone_fr = 1_33_61_23_45_67;
$phone_ca = 1_514_387_9947;

// true;
var_dump(1_2_3 === 123);

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.integer.php#language.types.integer.syntax)**
## Related

+ [integer](integer.ini.html)
+ [Floating Point Numbers](float.ini.html)
+ [Underscore](underscore.ini.html)
+ [Separator](separator.ini.html)
