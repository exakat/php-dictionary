# Properties
Class properties are variables, local to an object or a class.

Class properties might have visibility, chosen among: public, protected and private. public is the default.

Class properties might have an asymmetric visiblity for writing, chosen among: ``public(set)``, ``protected(set)`` and ``private(set)``. By default, it is the same as the read visibility.

Class properties might have a default value. By default it is ``null``.

Class properties might have a type, since PHP 7.4

Class properties might be readonly, for properties which are only set once, and cannot be modified. 

Class properties might be static, and not related to an object, but to a class. 

A property must be uniquely defined in a class. Class properties may be redefined in children or parent when the visibility allows it.

Properties are also called members.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html","name":"Properties","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:15:44 +0000","dateModified":"Tue, 14 Jul 2026 06:15:44 +0000","description":"Class properties are variables, local to an object or a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Properties.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Properties"}]}]}</script>
```php
<?php

    class X {
        private $property = 1;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.properties.php)**
## See Also

+ [Class properties](https://www.php-cpp.com/documentation/properties)

## Related

+ [Visibility](visibility.html)
+ [static](static.html)
+ [Readonly](readonly.html)
+ [Attribute](attribute.html)
+ [Default Value](default-value.html)
+ [Magic Property](magic-property.html)
+ [Dynamic Properties](dynamic-property.html)
+ [Property Hook](property-hook.html)
+ [Asymmetric Visibility](set-visibility.html)
+ [Type System](type.html)
+ [Asymmetric Visibility](asymmetric-visibility.html)
+ [Data Container](data-container.html)
+ [Static Property](static-property.html)
+ [stdclass](stdclass.html)
+ [Typed Property](typed-property.html)
+ [Method](method.html)
+ [Readable](readable.html)
+ [Virtual Property](virtual-property.html)
+ [Writable](writable.html)
+ [get\_object\_vars()](get_object_vars.html)
+ [Promoted Properties](promoted-property.html)
+ [Property Type Declaration](type-declaration-property.html)
+ [Var](var.html)
+ [Writeable](writeable.html)
+ [Non-static](non-static.html)
+ [State](state.html)
+ [Computed Property](computed-property.html)
+ [Data Hiding](data-hiding.html)
+ [Modifier](modifier.html)
+ [Mutable State](mutable-state.html)
