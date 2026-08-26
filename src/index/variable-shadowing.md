# Variable Shadowing
Variable shadowing is the confusion between variables of the same name, but of different context. 

Variable shadowing happens in different situations: 

+ With local variables, by defining it several times in the same context, and starting a new usage.
+ With local variables, by defining it once as parameter, once as local variable, once as blind variable in a ``foreach()``, these are 2 distinct situations
+ With static variables, after it was a local variable
+ With global variables, where a local variable and a global one carry the same name
+ With structures like ``foreach()`` and ``catch()``, which creates variables that actually overwrite existing ones, but are not perceived as such by a human coder

Such patterns sow confusion and lead to bugs. Given the context, the shadow may be intermittent: for example, a variable changes content and type only when an exception is caught.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-shadowing.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-shadowing.html","name":"Variable Shadowing","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:58:49 +0000","dateModified":"Tue, 11 Aug 2026 20:58:49 +0000","description":"Variable shadowing is the confusion between variables of the same name, but of different context","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-shadowing.html"]}],"alternateName":["shadow"],"keywords":["variable","bug"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/close-naming.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Variable_shadowing"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"variable-shadowing"}]}]}</script>
```php
<?php

$x = 4;

function foo() {
    $x = 3;
    
    static $x; // No assignation, but $x is not NULL, on the first call
    
    global $x; // $x is not static anymore, and is 4

    $array = ['a', 'b', 'c'];
    try {
        foreach($array as $x) {
            echo $x;
        }
    } catch (Exception $x) {
        // $x becoms an exception, if it happens
    }
    
    // finally, $x becomes 5, stays global
    $x = 5;
}

foo();
echo $x;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Variable_shadowing)**
## Related

+ [Variables](variable.html)
+ [Close Naming](close-naming.html)
