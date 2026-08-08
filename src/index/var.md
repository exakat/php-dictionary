# Var
``var`` keyword for introducing PHP properties in classes. It originates from PHP 4, where it was the only way to declare class properties. Since PHP 5, visibility keywords like ``public``, ``private``, ``protected`` replaced it as the idiomatic syntax.

``var`` is equivalent to ``public``: a property declared with ``var`` is publicly accessible. It is considered legacy syntax and is not recommended.

Modern property declarations support additional modifiers unavailable with ``var``, such as ``final``, ``static``, ``readonly``, and type declarations. 

``var`` may be omitted with other options such as ``final``, ``static``, ``readonly``, or asymmetric visibility: then, the property is publicly accessible.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/var.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/var.html","name":"Var","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"``var`` keyword for introducing PHP properties in classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Var.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Var"}]}]}</script>
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

+ [Visibility](visibility.html)
+ [Protected Visibility](protected.html)
+ [Private Visibility](private.html)
+ [Public Visibility](public.html)
+ [Properties](property.html)
+ [static](static.html)
+ [Final Keyword](final.html)
+ [Readonly](readonly.html)
+ [Property Type Declaration](type-declaration-property.html)
+ [Promoted Properties](promoted-property.html)
+ [Asymmetric Visibility](asymmetric-visibility.html)
+ [OOP (Object Oriented Programming)](oop.html)
+ [Dynamic Properties](dynamic-property.html)
+ [Legacy](legacy.html)
