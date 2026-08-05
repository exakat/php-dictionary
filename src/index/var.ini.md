# Var
``var`` keyword for introducing PHP properties in classes. It originates from PHP 4, where it was the only way to declare class properties. Since PHP 5, visibility keywords like ``public``, ``private``, ``protected`` replaced it as the idiomatic syntax.

``var`` is equivalent to ``public``: a property declared with ``var`` is publicly accessible. It is considered legacy syntax and is not recommended.

Modern property declarations support additional modifiers unavailable with ``var``, such as ``final``, ``static``, ``readonly``, and type declarations. 

``var`` may be omitted with other options such as ``final``, ``static``, ``readonly``, or asymmetric visibility: then, the property is publicly accessible.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/var.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/var.ini.html","name":"Var","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``var`` keyword for introducing PHP properties in classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Var.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X {
        var $y;   // public $y
        final $z; // public final $z;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties)**
## Related

+ [Visibility](visibility.ini.html)
+ [Protected Visibility](protected.ini.html)
+ [Private Visibility](private.ini.html)
+ [Public Visibility](public.ini.html)
+ [Properties](property.ini.html)
+ [static](static.ini.html)
+ [Final Keyword](final.ini.html)
+ [Readonly](readonly.ini.html)
+ [Property Type Declaration](type-declaration-property.ini.html)
+ [Promoted Properties](promoted-property.ini.html)
+ [Asymmetric Visibility](asymmetric-visibility.ini.html)
+ [OOP (Object Oriented Programming)](oop.ini.html)
+ [Dynamic Properties](dynamic-property.ini.html)
+ [Legacy](legacy.ini.html)
