# Writeable
Something is writeable when its current value may be modified. For example, a variable is writeable, as it may be changed at any moment: it may be unset, appended, prepended, replaced, or incremented. 

On the other hand, a property may be unwriteable, depending on the context, because of the visibility configuration.

Variable, properties with the correct visibility, static properties, array elements are all writeable. To check if a property is writeable or not, one should use the reflection engine. Most often, it is base on code knowledge.

Properties may be ``readonly``, which means they can be written once, and won't change value later. Modification limiting, and fine grained access may be achieved with property hooks.

Writeable also applies to files, as the operating system may or may not allow the modification of files. This may be checked with ``is_writeable()`` function.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writeable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writeable.html","name":"Writeable","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 27 Aug 2026 08:54:40 +0000","dateModified":"Thu, 27 Aug 2026 08:54:40 +0000","description":"Something is writeable when its current value may be modified","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writeable.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/visibility.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/container.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-element.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reflection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readonly.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property-hook.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fopen.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.is-writeable.php"},{"@type":"CreativeWork","name":"Visibility","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.visibility.php"},{"@type":"CreativeWork","name":"PHP RFC: Readonly properties 2.0","url":"https:\/\/wiki.php.net\/rfc\/readonly_properties_v2"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"writeable"}]}]}</script>
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
## See Also

+ [Visibility](https://www.php.net/manual/en/language.oop5.visibility.php)
+ [PHP RFC: Readonly properties 2.0](https://wiki.php.net/rfc/readonly_properties_v2)

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
