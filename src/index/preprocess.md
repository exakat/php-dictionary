# Preprocessing
Preprocessing is an optimisation technique, where a value is calculated even before the execution of a script. This is only possible with constants values, which are known before execution.

Preprocessing may save execution time, and memory. 

In terms of maintenance, it hides some implementation details in the result: one has to guess where this value is coming from.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/preprocess.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/preprocess.html","name":"Preprocessing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Preprocessing is an optimisation technique, where a value is calculated even before the execution of a script","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Preprocessing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"preprocess"}]}]}</script>
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

+ [PHP, Hypertext Preprocessor (PHP)](php.html)
+ [Performance](performance.html)
