# Static Property
Static properties are properties defined with the ``static`` keyword. They may be accessed with the name of the class, or instantiated object. 

Static properties are also called 'class properties' as they are common to all objects of the same class: there is no need to instantiate an object to access them, when they are public.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/static-property.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/static-property.html","name":"Static Property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Static properties are properties defined with the ``static`` keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Static Property.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class x {
    static $p = 1;
}

//displays x::foo
print x::$p;
$object = new x;

print $object::$x;

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.properties)**
## Related

+ [Properties](property.ini.html)
+ [Static Method](static-method.ini.html)
+ [Data Container](data-container.ini.html)
+ [Readable](readable.ini.html)
+ [Static Variables](static-variable.ini.html)
+ [Writable](writable.ini.html)
+ [get\_object\_vars()](get_object_vars.ini.html)
+ [Scope Resolution Operator ::](scope-resolution-operator.ini.html)
+ [Static Class](static-class.ini.html)
+ [Writeable](writeable.ini.html)
+ [Testable](testable.ini.html)
