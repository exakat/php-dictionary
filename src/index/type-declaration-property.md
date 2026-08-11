# Property Type Declaration
Type declaration property, also known as typed properties, is a feature introduced in version 7.4 that allows specifying the type of a class property.

With typed properties, the type of a property is explicitly defined, ensuring that only values of the specified type can be assigned to that property. This helps enforce type safety and prevents accidental assignments of incompatible values.

Typed properties support any type format: simple, union, intersection or DNF. Nullable types are expressed with a leading ``?``, such as ``?string``.

A typed property that has not been initialized before it is read triggers an ``Error`` exception. Typed properties must be explicitly assigned before use, either in the constructor or at the declaration site.

Since PHP 8.1, typed properties may also be declared ``readonly``, which prevents any assignment after the initial one.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-declaration-property.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-declaration-property.html","name":"Property Type Declaration","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 16:53:42 +0000","dateModified":"Mon, 10 Aug 2026 16:53:42 +0000","description":"Type declaration property, also known as typed properties, is a feature introduced in version 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Property Type Declaration.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"type-declaration-property"}]}]}</script>
```php
<?php

    class X {
        private Typed $y;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.declarations.php)**
## See Also

+ [PHP RFC: Typed Properties 2.0](https://wiki.php.net/rfc/typed_properties_v2)

## Related

+ [Type System](type.html)
+ [Union Type](union-type.html)
+ [Intersection Type](intersection-type.html)
+ [Disjunctive Normal Form (DNF)](dnf-type.html)
+ [Readonly](readonly.html)
+ [Nullable](nullable.html)
+ [Properties](property.html)
+ [Uninitialized](uninitialized.html)
+ [TypeError](typeerror.html)
+ [Return Type](return-type.html)
+ [Promoted Properties](promoted-property.html)
+ [Property Hook](property-hook.html)
+ [Asymmetric Visibility](asymmetric-visibility.html)
+ [static](static.html)
+ [Var](var.html)
