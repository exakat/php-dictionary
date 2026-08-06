# Preprocessing
Preprocessing is an optimisation technique, where a value is calculated even before the execution of a script. This is only possible with constants values, which are known before execution.

Preprocessing may save execution time, and memory. 

In terms of maintenance, it hides some implementation details in the result: one has to guess where this value is coming from.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/preprocess.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/preprocess.html","name":"Preprocessing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Preprocessing is an optimisation technique, where a value is calculated even before the execution of a script","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Preprocessing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$seconds = 60;
$minutes = 60;

$hours = $seconds * $minutes;

// this variable may be preprocessed, saving the calculation at execution time.
$hours = 3600;

?>
```

**[Documentation](https://www.php.net/manual/en/class.locale.php)**
## See Also

+ [PP: php-preprocessor](https://github.com/gizmore/php-preprocessor)

## Related

+ [PHP, Hypertext Preprocessor (PHP)](php.ini.html)
+ [Performance](performance.ini.html)
