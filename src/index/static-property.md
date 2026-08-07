# Static Property
Static properties are properties defined with the ``static`` keyword. They may be accessed with the name of the class, or instantiated object. 

Static properties are also called 'class properties' as they are common to all objects of the same class: there is no need to instantiate an object to access them, when they are public.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-property.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-property.html","name":"Static Property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Static properties are properties defined with the ``static`` keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Static Property.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Static Property"}]}]}</script>
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

+ [Properties](property.html)
+ [Static Method](static-method.html)
+ [Data Container](data-container.html)
+ [Readable](readable.html)
+ [Static Variables](static-variable.html)
+ [Writable](writable.html)
+ [get\_object\_vars()](get_object_vars.html)
+ [Scope Resolution Operator ::](scope-resolution-operator.html)
+ [Static Class](static-class.html)
+ [Writeable](writeable.html)
+ [Testable](testable.html)
