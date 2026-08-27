# Reserved Names
PHP shares several namespaces with the custom code, and has reserved some names for its own usage. 

+ Namespaces: the global namespace, also known as ``\`` is reserved for PHP.
+ Keywords: ``fn``, ``finally``, ``insteadof``, ``null``, ``void``, ``match``, ...
+ Some classes, constants, functions, interfaces: ``die``, ``exit``, 
+ Variables: ``$GLOBALS``, ``$_GET``,...
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reserved-name.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reserved-name.html","name":"Reserved Names","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"PHP shares several namespaces with the custom code, and has reserved some names for its own usage","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reserved-name.html"]}],"alternateName":["reserved-word"],"keywords":["name"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/keyword.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name-convention.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/reserved.php"},{"@type":"CreativeWork","name":"Predefined Variables","url":"https:\/\/www.php.net\/manual\/en\/language.variables.predefined.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"reserved-name"}]}]}</script>
```php
<?php

    // function void() would not compile
    function theVoid() : bool { }

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.php)**
## See Also

+ [Predefined Variables](https://www.php.net/manual/en/language.variables.predefined.php)

## Related

+ [Name](name.html)
+ [Keyword](keyword.html)
+ [Name Conventions](name-convention.html)
