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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/property.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/property.html","name":"Properties","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:15:44 +0000","dateModified":"Tue, 14 Jul 2026 06:15:44 +0000","description":"Class properties are variables, local to an object or a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Properties.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Visibility](visibility.ini.html)
+ [static](static.ini.html)
+ [Readonly](readonly.ini.html)
+ [Attribute](attribute.ini.html)
+ [Default Value](default-value.ini.html)
+ [Magic Property](magic-property.ini.html)
+ [Dynamic Properties](dynamic-property.ini.html)
+ [Property Hook](property-hook.ini.html)
+ [Asymmetric Visibility](set-visibility.ini.html)
+ [Type System](type.ini.html)
+ [Asymmetric Visibility](asymmetric-visibility.ini.html)
+ [Data Container](data-container.ini.html)
+ [Static Property](static-property.ini.html)
+ [stdclass](stdclass.ini.html)
+ [Typed Property](typed-property.ini.html)
+ [Method](method.ini.html)
+ [Readable](readable.ini.html)
+ [Virtual Property](virtual-property.ini.html)
+ [Writable](writable.ini.html)
+ [get\_object\_vars()](get_object_vars.ini.html)
+ [Promoted Properties](promoted-property.ini.html)
+ [Property Type Declaration](type-declaration-property.ini.html)
+ [Var](var.ini.html)
+ [Writeable](writeable.ini.html)
+ [Non-static](non-static.ini.html)
+ [State](state.ini.html)
+ [Computed Property](computed-property.ini.html)
+ [Data Hiding](data-hiding.ini.html)
+ [Modifier](modifier.ini.html)
+ [Mutable State](mutable-state.ini.html)
