# Variables
Variables are used to store and manipulate data. They are containers that hold values, such as numbers, strings, arrays, objects, and more. Variables are an essential component of programming, allowing to store and retrieve information as needed throughout the code. 

Variables must start with a dollar sign ``$`` followed by the variable name. The name should begin with a letter or an underscore and can contain letters, numbers, and underscores. PHP variable names are case-sensitive.

PHP is a loosely typed language, which means there is no need to explicitly declare the type of a variable. PHP determines the variable's type based on the assigned value.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable.html","name":"Variables","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Aug 2026 09:49:30 +0000","dateModified":"Fri, 07 Aug 2026 09:49:30 +0000","description":"Variables are used to store and manipulate data","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Variables.html"]}],"keywords":["data-container"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/naming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interpolation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global-variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24globals.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pseudo-variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/superglobal.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unset.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-container.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/post-increment.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pre-increment.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/self-reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dollar.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-scope.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/close-naming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/undefined.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-shadowing.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writeable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lexical.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-static.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/swap.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.variables.php"},{"@type":"CreativeWork","name":"How to store and process data with PHP variables","url":"https:\/\/www.ionos.com\/digitalguide\/websites\/web-development\/php-variable\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"variable"}]}]}</script>
```php
<?php

    $a = 'b';
    // more code
    echo $a; // displays b

?>
```

**[Documentation](https://www.php.net/manual/en/language.variables.php)**
## See Also

+ [How to store and process data with PHP variables](https://www.ionos.com/digitalguide/websites/web-development/php-variable/)

## Related

+ [Static Variables](static-variable.html)
+ [Variable Variables](variable-variable.html)
+ [Type System](type.html)
+ [Naming](naming.html)
+ [Interpolation](interpolation.html)
+ [Dynamic Variable](dynamic-variable.html)
+ [Global Variables](global-variable.html)
+ [global Scope](global.html)
+ [$GLOBALS]($globals.html)
+ [PHP Variables](php-variable.html)
+ [Pseudo-variable](pseudo-variable.html)
+ [References](reference.html)
+ [static](static.html)
+ [Superglobal Variables](superglobal.html)
+ [unset()](unset.html)
+ [Data Container](data-container.html)
+ [PHP Constants](php-constant.html)
+ [Post-increment](post-increment.html)
+ [Pre-increment](pre-increment.html)
+ [Self-reference](self-reference.html)
+ [Dollar $](dollar.html)
+ [Readable](readable.html)
+ [Variable Scope](variable-scope.html)
+ [Writable](writable.html)
+ [Close Naming](close-naming.html)
+ [Undefined](undefined.html)
+ [Variable Shadowing](variable-shadowing.html)
+ [Writeable](writeable.html)
+ [Lexical Variable](lexical.html)
+ [Non-static](non-static.html)
+ [Swap](swap.html)
