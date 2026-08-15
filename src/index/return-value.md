# Return Value
Return value is the value returned by a method or function call. 

That value may be typed with a data type. In that case, each call to ``return`` must return that type.

It may also be typed with ``never``, in case the method doesn't return anything. In that case, it would never ends, throw an exception or kill the execution.

A value is returned with the keyword ``return``. When no such command is used, for example when a method doesn't have a return command and reach the end of the method's body, then ``null`` is returned.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return-value.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return-value.html","name":"Return Value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Return value is the value returned by a method or function call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Return Value.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"return-value"}]}]}</script>
```php
<?php

function foo() : int {
    return 1;
}

function goo() : never {
    throw new Exception("Error");
}

function hoo() : void {
    echo __METHOD__;
    // No return value
}

// returns null
function bar() { }

?>
```

**[Documentation](https://www.php.net/manual/en/function.include.php)**
## Related

+ [Null](null.html)
+ [Never Type](never.html)
+ [Void](void.html)
+ [throw](throw.html)
+ [Exit](exit.html)
+ [Infinite Loop](infinite-loop.html)
