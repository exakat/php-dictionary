# Default Parameter
Methods may define a default value for parameters. That way the parameter may be omitted during the call, and this value will be used. 

The default value may be a static expression, and, since PHP 8.1, also includes a new expression.

The default parameter must be the last of the parameters: adding a parameter without default value after one will yield an error and mess up the call parameters.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/default-parameter.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/default-parameter.html","name":"Default Parameter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Methods may define a default value for parameters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Default Parameter.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"default-parameter"}]}]}</script>
```php
<?php

function makeCoffee($type = 'latte') {
    return 'Making a cup of $latte';
}

?>
```

**[Documentation](https://www.php.net/manual/en/functions.arguments.php#functions.arguments.default)**
## Related

+ [Functions](function.html)
+ [Method](method.html)
+ [Null Pattern](nullpattern.html)
+ [Option](option.html)
