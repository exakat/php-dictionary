# Override Attribute
This is a native PHP attribute, which tells the engine that a method must be overriding the same method in a parent.

The overridden method may be in the parent, or any subsequent parent; it may also be defined in a trait, as a concrete definition or an alias.

The error is only reported at execution time. The same error message is used if the class has no parent, at linting time.

This attribute may be added to any method.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/override.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/override.html","name":"Override Attribute","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"This is a native PHP attribute, which tells the engine that a method must be overriding the same method in a parent","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Override Attribute.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class MyParentClass {
    function foo() {}
}

class MyChildClass {
    #[Override]
    function foo() {}

    #[Override]
    function goo() {}
    // This raise an error, as goo() has no definition in the parent.
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.attributes.classes.php)**
## See Also

+ [Understanding PHP #[Override] Attribute: A Beginner's Complete Guide — 2025](https://medium.com/@arifhossen.dev/understanding-php-override-attribute-a-beginners-complete-guide-55275bf7fc87)

## Related

+ [Overriding](overriding.ini.html)
+ [Overwrite](overwrite.ini.html)
+ [PHP Native Attributes](php-attribute.ini.html)
+ [PHP Native Attribute](php-native-attribute.ini.html)
+ [Attribute Class](attribute-class.ini.html)
+ [Method Resolution Order (MRO)](mro.ini.html)
