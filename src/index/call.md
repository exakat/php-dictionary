# Call
A call is the usage action of a definition or declaration. 

A call may be a function call, a method call, a static method call or a closure call. 

For example, a function is declared, then called. Calling an undefined structure is a fatal error.

A definition must happen before a call. The autoload process allows for last minute loading of a class definition. 

A call is usually done on a ``callable`` type of data.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/call.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/call.html","name":"Call","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:40 +0000","dateModified":"Fri, 19 Jun 2026 21:25:40 +0000","description":"A call is the usage action of a definition or declaration","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Call.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

function foo() {} 

// calling a function
foo();

// calling an undefined function
goo();
//Fatal error: Uncaught Error: Call to undefined function goo()

?>
```

**[Documentation](https://www.php.net/manual/en/functions.user-defined.php)**
## Related

+ [Definition](definition.ini.html)
+ [Class Autoloading](autoload.ini.html)
+ [Callables](callable.ini.html)
+ [Call Graph](call-graph.ini.html)
