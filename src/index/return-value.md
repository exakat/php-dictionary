# Return Value
Return value is the value returned by a method or function call. 

That value may be typed with a data type. In that case, each call to ``return`` must return that type.

It may also be typed with ``never``, in case the method doesn't return anything. In that case, it would never ends, throw an exception or kill the execution.

A value is returned with the keyword ``return``. When no such command is used, for example when a method doesn't have a return command and reach the end of the method's body, then ``null`` is returned.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/return-value.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/return-value.html","name":"Return Value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Return value is the value returned by a method or function call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Return Value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Null](null.ini.html)
+ [Never Type](never.ini.html)
+ [Void](void.ini.html)
+ [throw](throw.ini.html)
+ [Exit](exit.ini.html)
+ [Infinite Loop](infinite-loop.ini.html)
