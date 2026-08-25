# Fully Qualified Name
A fully qualified name, or a fully qualified class name, is a unique identifier for the PHP name of a constant, class, trait, interface, enum or function: it includes its namespace name.

PHP names may be fully qualified, unqualified or relative.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fully-qualified-name.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fully-qualified-name.html","name":"Fully Qualified Name","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 08:22:51 +0000","dateModified":"Sat, 15 Aug 2026 08:22:51 +0000","description":"A fully qualified name, or a fully qualified class name, is a unique identifier for the PHP name of a constant, class, trait, interface, enum or function: it includes its namespace name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fully-qualified-name.html"]}],"alternateName":["fqn","fqcn"],"keywords":["namespace"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative-types.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/absolute-value.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/absolute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identifier.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.rules.php"},{"@type":"CreativeWork","name":"Namespaces","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.php"},{"@type":"CreativeWork","name":"Using namespaces: Aliasing\/Importing","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.importing.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fully-qualified-name"}]}]}</script>
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

+ [Namespaces](https://www.php.net/manual/en/language.namespaces.php)
+ [Using namespaces: Aliasing/Importing](https://www.php.net/manual/en/language.namespaces.importing.php)

## Related

+ [Use](use.html)
+ [Namespaces](namespace.html)
+ [Relative Types](relative-types.html)
+ [Absolute Value](absolute-value.html)
+ [Absolute](absolute.html)
+ [Identifier](identifier.html)
+ [Relative](relative.html)
