# Writeable
Something is writeable when its current value may be modified. For example, a variable is writeable, as it may be changed at any moment: it may be unset, appended, prepended, replaced, or incremented. 

On the other hand, a property may be unwriteable, depending on the context, because of the visibility configuration.

Variable, properties with the correct visibility, static properties, array elements are all writeable. To check if a property is writeable or not, one should use the reflection engine. Most often, it is base on code knowledge.

Properties may be ``readonly``, which means they can be written once, and won't change value later. Modification limiting, and fine grained access may be achieved with property hooks.

Writeable also applies to files, as the operating system may or may not allow the modification of files. This may be checked with ``is_writeable()`` function.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writeable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writeable.html","name":"Writeable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:16 +0000","dateModified":"Fri, 19 Jun 2026 21:25:16 +0000","description":"Something is writeable when its current value may be modified","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Writeable.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"writeable"}]}]}</script>
```php
<?php

    $v = 3;
    ++$v; // $v was incremented
    
    class X {
        private int $p;
        
        function __construct() {
            // The property p is writeable in this part of the code
            $this->p = 1;
        }
    }
    
    $x = new X();
    // The property p is not writeable from this part of the code

?>
```

**[Documentation](https://www.php.net/manual/en/function.is-writeable.php)**
## Related

+ [Visibility](visibility.html)
+ [Variables](variable.html)
+ [Static Property](static-property.html)
+ [Properties](property.html)
+ [Container](container.html)
+ [Array Element](array-element.html)
+ [Readable](readable.html)
+ [Reflection](reflection.html)
+ [Readonly](readonly.html)
+ [Property Hook](property-hook.html)
+ [fopen()](fopen.html)
