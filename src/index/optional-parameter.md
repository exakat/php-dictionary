# Optional Parameter
Optional parameters are parameters fitted with a default value. They may then be skipped when the function is called.

Optional parameters should be the last parameters: otherwise, PHP will have trouble figuring out which parameter uses which value.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/optional-parameter.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/optional-parameter.html","name":"Optional Parameter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:53:15 +0000","dateModified":"Tue, 11 Aug 2026 20:53:15 +0000","description":"Optional parameters are parameters fitted with a default value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Optional Parameter.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"optional-parameter"}]}]}</script>
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
## See Also

+ [PHP Default Parameters](https://www.phptutorial.net/php-tutorial/php-default-parameters/)
+ [Default Function Parameters In PHP](https://www.hashbangcode.com/article/default-function-parameters-php)

## Related

+ [Parameter](parameter.html)
+ [Default Value](default-value.html)
