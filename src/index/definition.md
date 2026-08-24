# Definition
A definition is the description of a particular constant, function, method, property, class, trait, interface or enum. 

A variable also has a definition, also called an initialisation: variables have no formal definition. They use an unconditional assignation to do so.

The definition is also called a declaration. The declaration must happen before usage. 

Definitions happens in custom code, in libraries or in extensions. 

There are functions dedicated to listing defined elements: ``get_declared_constants()``, ``get_declared_traits()``, ``get_declared_interfaces()``, ``get_declared_classes()``, ``get_class_vars()`` and ``get_class_methods()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/definition.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/definition.html","name":"Definition","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:06:21 +0000","dateModified":"Mon, 17 Aug 2026 09:06:21 +0000","description":"A definition is the description of a particular constant, function, method, property, class, trait, interface or enum","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/definition.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/call.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autoload.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/declaration.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/initialisation.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.functions.php"},{"@type":"CreativeWork","name":"Difference Between Declaration and Definition in Programming","url":"https:\/\/testbook.com\/key-differences\/difference-between-definition-and-declaration"},{"@type":"CreativeWork","name":"Difference Between Declaration and Definition","url":"https:\/\/byjus.com\/gate\/difference-between-definition-and-declaration\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"definition"}]}]}</script>
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
## See Also

+ [Difference Between Declaration and Definition in Programming](https://testbook.com/key-differences/difference-between-definition-and-declaration)
+ [Difference Between Declaration and Definition](https://byjus.com/gate/difference-between-definition-and-declaration/)

## Related

+ [Call](call.html)
+ [Class Autoloading](autoload.html)
+ [Declaration](declaration.html)
+ [Initialisation](initialisation.html)
