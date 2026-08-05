# Writeable
Something is writeable when its current value may be modified. For example, a variable is writeable, as it may be changed at any moment: it may be unset, appended, prepended, replaced, or incremented. 

On the other hand, a property may be unwriteable, depending on the context, because of the visibility configuration.

Variable, properties with the correct visibility, static properties, array elements are all writeable. To check if a property is writeable or not, one should use the reflection engine. Most often, it is base on code knowledge.

Properties may be ``readonly``, which means they can be written once, and won't change value later. Modification limiting, and fine grained access may be achieved with property hooks.

Writeable also applies to files, as the operating system may or may not allow the modification of files. This may be checked with ``is_writeable()`` function.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/writeable.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/writeable.ini.html","name":"Writeable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:16 +0000","dateModified":"Fri, 19 Jun 2026 21:25:16 +0000","description":"Something is writeable when its current value may be modified","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Writeable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Visibility](visibility.ini.html)
+ [Variables](variable.ini.html)
+ [Static Property](static-property.ini.html)
+ [Properties](property.ini.html)
+ [Container](container.ini.html)
+ [Array Element](array-element.ini.html)
+ [Readable](readable.ini.html)
+ [Reflection](reflection.ini.html)
+ [Readonly](readonly.ini.html)
+ [Property Hook](property-hook.ini.html)
+ [fopen()](fopen.ini.html)
