# trigger\_error()
``trigger_error()`` is a PHP native function, which raises an error, in the style of PHP engine. It can raise ``notice``, ``warning``, ``deprecated`` and ``error``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trigger_error.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trigger_error.html","name":"trigger_error()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``trigger_error()`` is a PHP native function, which raises an error, in the style of PHP engine","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trigger_error().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"trigger_error"}]}]}</script>
```php
<?php

    echo $a;

    trigger_error('This is a warning, that says: Undefined variable $x', E_USER_WARNING);

?>
```

**[Documentation](https://www.php.net/manual/en/function.trigger-error.php)**
## See Also

+ [The trigger_error Function](https://code.mu/en/php/manual/error/trigger_error/)

## Related

+ [@, No Scream Operator](noscream.html)
+ [Error Reporting](error-reporting.html)
+ [set\_error\_handler()](set_error_handler.html)
