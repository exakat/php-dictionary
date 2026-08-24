# Call
A call is the usage action of a definition or declaration. 

A call may be a function call, a method call, a static method call or a closure call. 

For example, a function is declared, then called. Calling an undefined structure is a fatal error.

A definition must happen before a call. The autoload process allows for last minute loading of a class definition. 

A call is usually done on a ``callable`` type of data.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/call.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/call.html","name":"Call","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Aug 2026 07:35:12 +0000","dateModified":"Thu, 20 Aug 2026 07:35:12 +0000","description":"A call is the usage action of a definition or declaration","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/call.html"]}],"alternateName":["functioncall"],"keywords":["syntax"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/definition.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autoload.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/call-graph.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/functions.user-defined.php"},{"@type":"CreativeWork","name":"How to call a method in PHP","url":"https:\/\/www.exakat.io\/call-a-method-in-php\/"},{"@type":"CreativeWork","name":"PHP Variable Functions","url":"https:\/\/www.phptutorial.net\/php-tutorial\/php-variable-functions\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"call"}]}]}</script>
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
## See Also

+ [How to call a method in PHP](https://www.exakat.io/call-a-method-in-php/)
+ [PHP Variable Functions](https://www.phptutorial.net/php-tutorial/php-variable-functions/)

## Related

+ [Definition](definition.html)
+ [Class Autoloading](autoload.html)
+ [Callables](callable.html)
+ [Call Graph](call-graph.html)
