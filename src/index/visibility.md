# Visibility
Properties, methods and classes may have a visibility. It limits the scope of the definition:

+ ``private``: to the current class
+ ``protected``: to the current class hierarchy, parents and children classes
+ ``public``: to all the code
+ ``var``: to all the code, deprecated

The default visibility is ``public``. The visibility may be omitted when using another option, such as ``final``, ``static``. It is recommended to always specify the visibility explicitly.

Visibility may no change, unless when overwriting it with a trait, or in a child class.

Visibility may be by-passed with class-invasion, where an object of one class may access another object's property, as long as they are from the same class or family.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/visibility.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/visibility.html","name":"Visibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Properties, methods and classes may have a visibility","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Visibility.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"visibility"}]}]}</script>
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

+ [Properties](property.html)
+ [Method](method.html)
+ [Static Constant](class-constant.html)
+ [Class Constants Visibility](class-constant-visibility.html)
+ [Class Invasion](class-invasion.html)
+ [Object](object.html)
+ [Private Visibility](private.html)
+ [Protected Visibility](protected.html)
+ [Public Visibility](public.html)
+ [Var](var.html)
+ [Asymmetric Visibility](asymmetric-visibility.html)
+ [Constructor](constructor.html)
+ [Readable](readable.html)
+ [Writable](writable.html)
+ [get\_object\_vars()](get_object_vars.html)
+ [Class Getter Method](getter.html)
+ [Variable Scope](variable-scope.html)
+ [Writeable](writeable.html)
+ [Permission](permission.html)
+ [\_\_callStatic() Method](__callstatic.html)
+ [Data Hiding](data-hiding.html)
+ [Modifier](modifier.html)
+ [Module System with Explicit Exports](module-system.html)
+ [Package-Level](package-visibility.html)
