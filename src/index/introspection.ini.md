# Introspection
Introspection is the ability to examine the properties and behavior of objects, classes, and functions at runtime. It allows code to discover and inspect its own structure.

PHP provides many native introspection functions: ``get_class()``, ``get_object_vars()``, ``get_class_vars()``, ``get_class_methods()``, ``method_exists()``, ``property_exists()``, ``function_exists()``, ``is_a()``, ``instanceof``, and others.

For deeper introspection, the Reflection API provides programmatic access to class hierarchies, method signatures, parameter types, and attributes.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/introspection.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/introspection.ini.html","name":"Introspection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 16:09:23 +0000","dateModified":"Mon, 03 Aug 2026 16:09:23 +0000","description":"Introspection is the ability to examine the properties and behavior of objects, classes, and functions at runtime","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Introspection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class Dog {
        public string $name = 'Rex';
        public function bark(): void {}
    }
    
    $dog = new Dog();
    
    var_dump(get_class($dog));             // string(3) "Dog" 
    var_dump(get_object_vars($dog));       // Array ( [name] => Rex )
    var_dump(get_class_methods($dog));     // Array ( [0] => bark )
    var_dump(method_exists($dog, 'bark')); // bool(true)

?>
```

**[Documentation](https://www.php.net/manual/en/book.reflection.php)**
## See Also

+ [PHP Introspection Functions and Example Program](https://www.computerscienceai.com/2019/11/php-introspective-functions-and-example-program.html)

## Related

+ [Reflection](reflection.ini.html)
+ [get\_class()](get_class.ini.html)
+ [get\_class\_vars()](get_class_vars.ini.html)
+ [get\_object\_vars()](get_object_vars.ini.html)
+ [class\_implements()](class_implements.ini.html)
+ [Reflector](reflector.ini.html)
