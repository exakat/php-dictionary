# Conditional Structures
Conditional structures are instructions which run different code, based on a condition. 

This includes ``if-elseif-then``, ``switch()``, ``match()``, the ternary operators ``? ... :`` and ``?:`` and the coalesce operator ``??``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/conditional-structure.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/conditional-structure.html","name":"Conditional Structures","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 05:31:03 +0000","dateModified":"Tue, 01 Sep 2026 05:31:03 +0000","description":"Conditional structures are instructions which run different code, based on a condition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/conditional-structure.html"]}],"keywords":["statement"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/match.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/if-then.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coalesce.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ternary.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/control-structures.if.php"},{"@type":"CreativeWork","name":"Control Structures","url":"https:\/\/www.php.net\/manual\/en\/language.control-structures.php"},{"@type":"CreativeWork","name":"Conditional (computer programming)","url":"https:\/\/en.wikipedia.org\/wiki\/Conditional_(computer_programming)"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"conditional-structure"}]}]}</script>
```php
<?php

    if (!function_exists('foo')) {
        function foo() {
            // doSomething
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.if.php)**
## See Also

+ [Control Structures](https://www.php.net/manual/en/language.control-structures.php)
+ [Conditional (computer programming)](https://en.wikipedia.org/wiki/Conditional_(computer_programming))

## Related

+ [Switch](switch.html)
+ [Match](match.html)
+ [If Then Else](if-then.html)
+ [Coalesce Operator](coalesce.html)
+ [Ternary Operator](ternary.html)
