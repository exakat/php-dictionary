# Hoisting
Hoisting is a language feature where declarations are automatically moved to the top of their scope before code execution. It is notably a JavaScript feature and not a PHP feature.

PHP does not support hoisting for variables: a variable must be assigned before it is read, or it will be undefined.

PHP functions are pre-compiled and can be called before their textual declaration in the same file, which may look like hoisting but is actually the result of PHP's two-pass compilation model.

PHP classes are not hoisted either: a class must be declared, autoloaded, before it is instantiated.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hoisting.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hoisting.html","name":"Hoisting","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 05:31:03 +0000","dateModified":"Tue, 01 Sep 2026 05:31:03 +0000","description":"Hoisting is a language feature where declarations are automatically moved to the top of their scope before code execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hoisting.html"]}],"keywords":["concept","unsupported","compilation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-hoisting.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autoload.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/undefined.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compiler.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/order-of-execution.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/developer.mozilla.org\/en-US\/docs\/Glossary\/Hoisting"},{"@type":"CreativeWork","name":"What is Hoisting in JavaScript?","url":"https:\/\/www.freecodecamp.org\/news\/what-is-hoisting-in-javascript\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"hoisting"}]}]}</script>
```php
<?php

    // This works: functions are pre-compiled
    greet();
    
    function greet() { echo 'Hello'; }
    
    // This does NOT work: variables are not hoisted
    echo $message; // Undefined variable
    
    $message = 'Hello';

?>
```

**[Documentation](https://developer.mozilla.org/en-US/docs/Glossary/Hoisting)**
## See Also

+ [What is Hoisting in JavaScript?](https://www.freecodecamp.org/news/what-is-hoisting-in-javascript/)

## Related

+ [Class Hoisting](class-hoisting.html)
+ [Class Autoloading](autoload.html)
+ [Undefined](undefined.html)
+ [Compiler](compiler.html)
+ [Cache](cache.html)
+ [Order Of Execution](order-of-execution.html)
