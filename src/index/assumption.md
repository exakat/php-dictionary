# Assumption
An assumption is a piece of code that makes use of knowledge that is not visible in the source. 

Assumptions are often related to arrays: after checking that a variable is of type array, some specific indexes are used, while there is no guarantee that they are available.

Assumptions may apply to any type of data. 

Assumptions are characterized by a lack of checks, before or after. They are based on code discipline, actual or expected, and hard rules that are thought to never be violated: ``this never happens``. 

Assumptions lead to faster code, and faster coding. They also yield errors later, when the assumptions rules are violated.

Assumptions may be upgraded to assertions, by adding an explicit check on the situation.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assumption.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assumption.html","name":"Assumption","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:52:33 +0000","dateModified":"Tue, 11 Aug 2026 20:52:33 +0000","description":"An assumption is a piece of code that makes use of knowledge that is not visible in the source","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Assumption.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"assumption"}]}]}</script>
```php
<?php

    function foo($o) {
        if ($o instanceof A) {
            print $o->getName();
        } else {
            // if $o is not an object of type A, then it is an array. Where does this come from? 
            print $o['name'];
    
            // if $o is an array, is 'name' always available?
            
        }
    }

?>
```

## See Also

+ [From assumptions to assertions](https://rskuipers.com/entry/from-assumptions-to-assertions)

## Related

+ [Assertions](assertion.html)
