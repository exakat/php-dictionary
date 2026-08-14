# Introspection
Introspection is the ability to examine the properties and behavior of objects, classes, and functions at runtime. It allows code to discover and inspect its own structure.

PHP provides many native introspection functions: ``get_class()``, ``get_object_vars()``, ``get_class_vars()``, ``get_class_methods()``, ``method_exists()``, ``property_exists()``, ``function_exists()``, ``is_a()``, ``instanceof``, and others.

For deeper introspection, the Reflection API provides programmatic access to class hierarchies, method signatures, parameter types, and attributes.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/introspection.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/introspection.html","name":"Introspection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 16:09:23 +0000","dateModified":"Mon, 03 Aug 2026 16:09:23 +0000","description":"Introspection is the ability to examine the properties and behavior of objects, classes, and functions at runtime","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Introspection.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"introspection"}]}]}</script>
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

+ [Reflection](reflection.html)
+ [get\_class()](get_class.html)
+ [get\_class\_vars()](get_class_vars.html)
+ [get\_object\_vars()](get_object_vars.html)
+ [class\_implements()](class_implements.html)
+ [Reflector](reflector.html)
