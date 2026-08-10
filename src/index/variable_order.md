# variable\_order
The ``variable_order`` directive sets the order in which the values are assigned to the ``$_REQUEST`` variable.

The default value for this directive is ``EGPCS``: environment, GET, POST, COOKIE and SESSION. The values are overwritten by the next, so if GET and POST have both an ``$x`` variable, the default configuration only keeps the one from POST, as it is later in the configuration. 

The default configuration ensures that safer values, such as the session's value, are not overwritten by less safe values from GET or POST, for example.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable_order.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable_order.html","name":"variable_order","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The ``variable_order`` directive sets the order in which the values are assigned to the ``$_REQUEST`` variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable_order.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"variable_order"}]}]}</script>
```php
<?php

    // variable_order = EGPCS
    // https://www.example.com/index.php?x=1
    // POST x = 2;
    $_REQUEST['x'] === '2';

?>
```

**[Documentation](https://www.php.net/manual/en/ini.core.php#ini.variables-order)**
## See Also

+ [PHP Globals with EGPCS Information](https://phppot.com/php/php-globals-with-egpcs-information/)

## Related

+ [$\_REQUEST]($_request.html)
