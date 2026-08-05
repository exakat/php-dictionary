# Property Type Declaration
Type declaration property, also known as typed properties, is a feature introduced in version 7.4 that allows specifying the type of a class property.

With typed properties, the type of a property is explicitly defined, ensuring that only values of the specified type can be assigned to that property. This helps enforce type safety and prevents accidental assignments of incompatible values.

Typed properties support any type format: simple, union, intersection or DNF. Nullable types are expressed with a leading ``?``, such as ``?string``.

A typed property that has not been initialized before it is read triggers an ``Error`` exception. Typed properties must be explicitly assigned before use, either in the constructor or at the declaration site.

Since PHP 8.1, typed properties may also be declared ``readonly``, which prevents any assignment after the initial one.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/type-declaration-property.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/type-declaration-property.ini.html","name":"Property Type Declaration","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 09:04:50 +0000","dateModified":"Tue, 30 Jun 2026 09:04:50 +0000","description":"Type declaration property, also known as typed properties, is a feature introduced in version 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Property Type Declaration.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X {
        private Typed $y;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.declarations.php)**
## Related

+ [Type System](type.ini.html)
+ [Union Type](union-type.ini.html)
+ [Intersection Type](intersection-type.ini.html)
+ [Disjunctive Normal Form (DNF)](dnf-type.ini.html)
+ [Readonly](readonly.ini.html)
+ [Nullable](nullable.ini.html)
+ [Properties](property.ini.html)
+ [Uninitialized](uninitialized.ini.html)
+ [TypeError](typeerror.ini.html)
+ [Return Type](return-type.ini.html)
+ [Promoted Properties](promoted-property.ini.html)
+ [Property Hook](property-hook.ini.html)
+ [Asymmetric Visibility](asymmetric-visibility.ini.html)
+ [static](static.ini.html)
+ [Var](var.ini.html)
