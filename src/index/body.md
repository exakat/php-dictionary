# Body
The body, of a function or a command, is the related block that is commanded by the command. It is often enclosed in curly brackets ``{  }``, as for function or ``switch``, but sometimes optional, as for ``foreach`` or ``ifthen``.

The body is omitted in a method, when the method is ``abstract``. As an abstract method is only its signature, the body is replaced by a semi colon ``;``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/body.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/body.html","name":"Body","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Aug 2026 07:35:12 +0000","dateModified":"Thu, 20 Aug 2026 07:35:12 +0000","description":"The body, of a function or a command, is the related block that is commanded by the command","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/body.html"]}],"keywords":["syntax"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/block.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semicolon.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Subroutine"},{"@type":"CreativeWork","name":"Subroutines\/Functions","url":"http:\/\/www.cs.emory.edu\/~cheung\/Courses\/561\/Syllabus\/2-C\/subroutine.html"},{"@type":"CreativeWork","name":"Nested function","url":"https:\/\/en.wikipedia.org\/wiki\/Nested_function"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"body"}]}]}</script>
```php
<?php

    abstract class X {
        function foo() {
            // This block is the body
        }
    
        // No body for an abstract method
        abstract function goo();
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Subroutine)**
## See Also

+ [Subroutines/Functions](http://www.cs.emory.edu/~cheung/Courses/561/Syllabus/2-C/subroutine.html)
+ [Nested function](https://en.wikipedia.org/wiki/Nested_function)

## Related

+ [Block](block.html)
+ [Semicolon ;](semicolon.html)
