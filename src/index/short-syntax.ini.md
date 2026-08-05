# Short Syntax
A short syntax is the fusion of an operator with the ``=`` operator. That way, the operator is applied to the right hand operand, and the left variable, then, assigned to that variable. 

It is convenient when the variable has to be assigned again to itself.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/short-syntax.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/short-syntax.ini.html","name":"Short Syntax","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A short syntax is the fusion of an operator with the ``=`` operator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Short Syntax.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$a = 0;
// Adds 2 to $a
$a = $a + 2;

// short syntax to add 3 to $a
$a += 3;

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.assignment.php)**
## See Also

+ [PHP.INI settings Disable exec, shell_exec, system, popen and Other Functions To Improve Security](https://www.cyberciti.biz/faq/linux-unix-apache-lighttpd-phpini-disable-functions/)

## Related

+ [Assignations](assignation.ini.html)
+ [Operators](operator.ini.html)
