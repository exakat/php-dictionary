# Optional Parameter
Optional parameter are parameter fitted with a default value. They may then be skipped when the function is called. 

Optional parameter should be the last parameters: otherwise, PHP will have trouble figuring out which parameter uses which value.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/optional-parameter.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/optional-parameter.ini.html","name":"Optional Parameter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Optional parameter are parameter fitted with a default value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Optional Parameter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

function foo($a, $b = 2) { }

// $b will be 2, using the default value
foo(1); 

// $b will be 3
foo(1, 3); 

?>
```

**[Documentation](https://www.php.net/manual/en/functions.arguments.php)**
## Related

+ [Parameter](parameter.ini.html)
+ [Default Value](default-value.ini.html)
