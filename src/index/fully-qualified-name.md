# Fully Qualified Name
A fully qualified name, or a fully qualified class name, is a unique identifier for the PHP name of a constant, class, trait, interface, enum or function: it includes its namespace name.

PHP names may be fully qualified, unqualified or relative.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fully-qualified-name.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fully-qualified-name.html","name":"Fully Qualified Name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Aug 2026 11:58:04 +0000","dateModified":"Sun, 09 Aug 2026 11:58:04 +0000","description":"A fully qualified name, or a fully qualified class name, is a unique identifier for the PHP name of a constant, class, trait, interface, enum or function: it includes its namespace name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Fully Qualified Name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fully-qualified-name"}]}]}</script>
```php
<?php

namespace A {
    const B = 1;
    
    function foo() {
        // This is a local name: the namespace A is optional. 
        // The fully qualified name is \A\B;
        echo B;
        
        // This is a fully qualified name
        echo \A\B;
    }
}
?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.rules.php)**
## See Also

+ [PHP: Namespaces and autoloading](https://www.php.net/manual/en/language.namespaces.php)
+ [Using namespaces: Aliasing/Importing](https://www.php.net/manual/en/language.namespaces.importing.php)

## Related

+ [Use](use.html)
+ [Namespaces](namespace.html)
+ [Relative Types](relative-types.html)
+ [Absolute Value](absolute-value.html)
+ [Absolute](absolute.html)
+ [Identifier](identifier.html)
+ [Relative](relative.html)
