# Fully Qualified Name
A fully qualified name, or a fully qualified class name, is a unique identifier for the PHP name of a constant, class, trait, interface, enum or function: it includes its namespace name.

PHP names may be fully qualified, unqualified or relative.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fully-qualified-name.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fully-qualified-name.ini.html","name":"Fully Qualified Name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A fully qualified name, or a fully qualified class name, is a unique identifier for the PHP name of a constant, class, trait, interface, enum or function: it includes its namespace name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Fully Qualified Name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Use](use.ini.html)
+ [Namespaces](namespace.ini.html)
+ [Relative Types](relative-types.ini.html)
+ [Absolute Value](absolute-value.ini.html)
+ [Absolute](absolute.ini.html)
+ [Identifier](identifier.ini.html)
+ [Relative](relative.ini.html)
