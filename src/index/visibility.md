# Visibility
Properties, methods and classes may have a visibility. It limits the scope of the definition:

+ ``private``: to the current class
+ ``protected``: to the current class hierarchy, parents and children classes
+ ``public``: to all the code
+ ``var``: to all the code, deprecated

The default visibility is ``public``. The visibility may be omitted when using another option, such as ``final``, ``static``. It is recommended to always specify the visibility explicitly.

Visibility may no change, unless when overwriting it with a trait, or in a child class.

Visibility may be by-passed with class-invasion, where an object of one class may access another object's property, as long as they are from the same class or family.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/visibility.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/visibility.html","name":"Visibility","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Properties, methods and classes may have a visibility","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Visibility.html"]}],"alternateName":["access-level"],"keywords":["feature","method","property","class-constant"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-constant-visibility.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-invasion.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/private.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/protected.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/public.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/var.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/asymmetric-visibility.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constructor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_object_vars.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/getter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-scope.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writeable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/permission.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__callstatic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-hiding.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/modifier.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/module-system.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/package-visibility.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.visibility.php"},{"@type":"CreativeWork","name":"Understanding The Concept Of Visibility In Object Oriented PHP","url":"https:\/\/torquemag.io\/2016\/05\/understanding-concept-visibility-object-oriented-php\/"},{"@type":"CreativeWork","name":"PHP Tricks: Access control bypass","url":"https:\/\/peakd.com\/hive-168588\/@crell\/php-tricks-access-control-bypass"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"visibility"}]}]}</script>
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
