# Inclusions
Inclusion is the operation to add PHP code stored in an external file, into another PHP code. 

Inclusions rely on four native functions: ``include``, ``require``, ``include_once``, ``require_once``. 

Inclusions have application with templates, configurations, caches, function libraries. 

Inclusions have been superseded by autoload in recent PHP versions. Autoload relies on inclusion, though.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inclusion.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inclusion.html","name":"Inclusions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Inclusion is the operation to add PHP code stored in an external file, into another PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Inclusions.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"inclusion"}]}]}</script>
```php
<?php

echo "A $color $fruit"; // A

include 'vars.php';

echo "A $color $fruit"; // A green apple

?>
```

**[Documentation](https://www.php.net/manual/en/function.include.php)**
## See Also

+ [PHP Include](https://www.phptutorial.net/php-tutorial/php-include-file/)
+ [PHP Include & Require : All about Include vs Require in PHP](https://www.simplilearn.com/tutorials/php-tutorial/include-in-php)

## Related

+ [Class Autoloading](autoload.html)
+ [Code Injection](code-injection.html)
+ [Control Flow](control-flow.html)
+ [include](include.html)
