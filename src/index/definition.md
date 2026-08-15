# Definition
A definition is the description of a particular constant, function, method, property, class, trait, interface or enum. 

A variable also has a definition, also called an initialisation: variables have no formal definition. They use an unconditional assignation to do so.

The definition is also called a declaration. The declaration must happen before usage. 

Definitions happens in custom code, in libraries or in extensions. 

There are functions dedicated to listing defined elements: ``get_declared_constants()``, ``get_declared_traits()``, ``get_declared_interfaces()``, ``get_declared_classes()``, ``get_class_vars()`` and ``get_class_methods()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/definition.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/definition.html","name":"Definition","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:07 +0000","dateModified":"Fri, 19 Jun 2026 21:24:07 +0000","description":"A definition is the description of a particular constant, function, method, property, class, trait, interface or enum","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Definition.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"definition"}]}]}</script>
```php
<?php

    //function declaration
    function foo() {
        print 'OK';
    }
    
    // call to the function foo
    foo();

?>
```

**[Documentation](https://www.php.net/manual/en/language.functions.php)**
## Related

+ [Call](call.html)
+ [Class Autoloading](autoload.html)
+ [Declaration](declaration.html)
+ [Initialisation](initialisation.html)
