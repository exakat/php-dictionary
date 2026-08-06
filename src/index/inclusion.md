# Inclusions
Inclusion is the operation to add PHP code stored in an external file, into another PHP code. 

Inclusions rely on four native functions: ``include``, ``require``, ``include_once``, ``require_once``. 

Inclusions have application with templates, configurations, caches, function libraries. 

Inclusions have been superseded by autoload in recent PHP versions. Autoload relies on inclusion, though.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/inclusion.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/inclusion.html","name":"Inclusions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Inclusion is the operation to add PHP code stored in an external file, into another PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Inclusions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Class Autoloading](autoload.ini.html)
+ [Code Injection](code-injection.ini.html)
+ [Control Flow](control-flow.ini.html)
+ [include](include.ini.html)
