# Visibility
Properties, methods and classes may have a visibility. It limits the scope of the definition:

+ ``private``: to the current class
+ ``protected``: to the current class hierarchy, parents and children classes
+ ``public``: to all the code
+ ``var``: to all the code, deprecated

The default visibility is ``public``. The visibility may be omitted when using another option, such as ``final``, ``static``. It is recommended to always specify the visibility explicitly.

Visibility may no change, unless when overwriting it with a trait, or in a child class.

Visibility may be by-passed with class-invasion, where an object of one class may access another object's property, as long as they are from the same class or family.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/visibility.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/visibility.ini.html","name":"Visibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 16:39:32 +0000","dateModified":"Mon, 03 Aug 2026 16:39:32 +0000","description":"Properties, methods and classes may have a visibility","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Visibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X {
        public const X = 1;
        
        private $property;
        
        protected function foo() {}
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.visibility.php)**
## See Also

+ [Understanding The Concept Of Visibility In Object Oriented PHP](https://torquemag.io/2016/05/understanding-concept-visibility-object-oriented-php/)
+ [PHP Tricks: Access control bypass](https://peakd.com/hive-168588/@crell/php-tricks-access-control-bypass)

## Related

+ [Properties](property.ini.html)
+ [Method](method.ini.html)
+ [Static Constant](class-constant.ini.html)
+ [Class Constants Visibility](class-constant-visibility.ini.html)
+ [Class Invasion](class-invasion.ini.html)
+ [Object](object.ini.html)
+ [Private Visibility](private.ini.html)
+ [Protected Visibility](protected.ini.html)
+ [Public Visibility](public.ini.html)
+ [Var](var.ini.html)
+ [Asymmetric Visibility](asymmetric-visibility.ini.html)
+ [Constructor](constructor.ini.html)
+ [Readable](readable.ini.html)
+ [Writable](writable.ini.html)
+ [get\_object\_vars()](get_object_vars.ini.html)
+ [Class Getter Method](getter.ini.html)
+ [Variable Scope](variable-scope.ini.html)
+ [Writeable](writeable.ini.html)
+ [Permission](permission.ini.html)
+ [\_\_callStatic() Method](__callstatic.ini.html)
+ [Data Hiding](data-hiding.ini.html)
+ [Modifier](modifier.ini.html)
+ [Module System with Explicit Exports](module-system.ini.html)
+ [Package-Level](package-visibility.ini.html)
