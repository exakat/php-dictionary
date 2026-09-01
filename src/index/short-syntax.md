# Short Syntax
A short syntax is the fusion of an operator with the ``=`` operator. That way, the operator is applied to the right hand operand, and the left variable, then, assigned to that variable. 

It is convenient when the variable has to be assigned again to itself.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/short-syntax.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/short-syntax.html","name":"Short Syntax","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A short syntax is the fusion of an operator with the = operator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/short-syntax.html"]}],"keywords":["syntax"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assignation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/operator.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.assignment.php"},{"@type":"CreativeWork","name":"PHP.INI settings Disable exec, shell_exec, system, popen and Other Functions To Improve Security","url":"https:\/\/www.cyberciti.biz\/faq\/linux-unix-apache-lighttpd-phpini-disable-functions\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"short-syntax"}]}]}</script>
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

+ [Assignations](assignation.html)
+ [Operators](operator.html)
