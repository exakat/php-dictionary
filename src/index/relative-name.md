# Relative Name
A relative name is a name that is completed by the current namespace to lead to the definition of the referenced structure.

Relative names usually start without the leading ``\``. In the case of names with a single name, it is either a relative name, or a local import.

The opposite of relative name is absolute name.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative-name.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative-name.html","name":"Relative Name","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:00:57 +0000","dateModified":"Fri, 14 Aug 2026 08:00:57 +0000","description":"A relative name is a name that is completed by the current namespace to lead to the definition of the referenced structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative-name.html"]}],"keywords":["namespace"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/import.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/absolute-name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identifier.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespaced-name.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.basics.php"},{"@type":"CreativeWork","name":"Using namespaces: Aliasing\/Importing","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.importing.php"},{"@type":"CreativeWork","name":"Namespaces and dynamic language features","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.dynamic.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"relative-name"}]}]}</script>
```php
<?php

namespace B\A {
    function B() {}
    
    class C {}

}

namespace B {
    use A\B as C;
    //import 
    new C();

    // relative name
    new A\C(); // actually calls B \ A\C
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.basics.php)**
## See Also

+ [Using namespaces: Aliasing/Importing](https://www.php.net/manual/en/language.namespaces.importing.php)
+ [Namespaces and dynamic language features](https://www.php.net/manual/en/language.namespaces.dynamic.php)

## Related

+ [Import](import.html)
+ [Absolute Name](absolute-name.html)
+ [Identifier](identifier.html)
+ [Namespaced Name](namespaced-name.html)
