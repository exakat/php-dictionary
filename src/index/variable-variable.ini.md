# Variable Variables
Variable variables refer to a feature that allows to use the value of a variable as the name of another variable. It provides a way to dynamically create and access variables based on runtime values.

Variable variables are denoted by the double dollar sign ``$$`` followed by the name of the variable stored in another variable. More dollar signs may be compounded, though it is rare.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/variable-variable.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/variable-variable.ini.html","name":"Variable Variables","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Variable variables refer to a feature that allows to use the value of a variable as the name of another variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Variable Variables.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$a = 'b';
$b = 'c';

echo $$b;

?>
```

**[Documentation](https://www.php.net/manual/en/language.variables.variable.php)**
## See Also

+ [The Dangers of PHP's $$](https://andy-carter.com/blog/the-dangers-of-php-variable-variables)

## Related

+ [Variables](variable.ini.html)
+ [Static Variables](static-variable.ini.html)
+ [compact()](compact.ini.html)
+ [extract()](extract.ini.html)
+ [Global Variables](global-variable.ini.html)
+ [global Scope](global.ini.html)
+ [Superglobal Variables](superglobal.ini.html)
+ [Superglobal Variables](super-global.ini.html)
+ [Dollar $](dollar.ini.html)
+ [Dynamic](dynamic.ini.html)
