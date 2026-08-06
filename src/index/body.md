# Body
The body, of a function or a command, is the related block that is commanded by the command. It is often enclosed in curly brackets ``{  }``, as for function or ``switch``, but sometimes optional, as for ``foreach`` or ``ifthen``.

The body is omitted in a method, when the method is ``abstract``. As an abstract method is only its signature, the body is replaced by a semi colon ``;``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/body.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/body.html","name":"Body","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 28 Jun 2026 10:20:30 +0000","dateModified":"Sun, 28 Jun 2026 10:20:30 +0000","description":"The body, of a function or a command, is the related block that is commanded by the command","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Body.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Block](block.ini.html)
+ [Semicolon ;](semicolon.ini.html)
