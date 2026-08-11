# Variable Variables
Variable variables refer to a feature that allows to use the value of a variable as the name of another variable. It provides a way to dynamically create and access variables based on runtime values.

Variable variables are denoted by the double dollar sign ``$$`` followed by the name of the variable stored in another variable. More dollar signs may be compounded, though it is rare.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-variable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-variable.html","name":"Variable Variables","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Variable variables refer to a feature that allows to use the value of a variable as the name of another variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Variable Variables.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"variable-variable"}]}]}</script>
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

+ [Variables](variable.html)
+ [Static Variables](static-variable.html)
+ [compact()](compact.html)
+ [extract()](extract.html)
+ [Global Variables](global-variable.html)
+ [global Scope](global.html)
+ [$GLOBALS]($globals.html)
+ [Superglobal Variables](superglobal.html)
+ [Superglobal Variables](super-global.html)
+ [Dollar $](dollar.html)
+ [Dynamic](dynamic.html)
