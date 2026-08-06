# Default Parameter
Methods may define a default value for parameters. That way the parameter may be omitted during the call, and this value will be used. 

The default value may be a static expression, and, since PHP 8.1, also includes a new expression.

The default parameter must be the last of the parameters: adding a parameter without default value after one will yield an error and mess up the call parameters.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/default-parameter.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/default-parameter.html","name":"Default Parameter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Methods may define a default value for parameters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Default Parameter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

function makeCoffee($type = 'latte') {
    return 'Making a cup of $latte';
}

?>
```

**[Documentation](https://www.php.net/manual/en/functions.arguments.php#functions.arguments.default)**
## Related

+ [Functions](function.ini.html)
+ [Method](method.ini.html)
+ [Null Pattern](nullpattern.ini.html)
+ [Option](option.ini.html)
