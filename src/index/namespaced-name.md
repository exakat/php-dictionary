# Namespaced Name
A namespaced name is a name that includes a ``\`` character.

A namespaced name may be relative or absolute. 

Namespaced names are sometimes reported in errors.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespaced-name.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespaced-name.html","name":"Namespaced Name","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 22 Aug 2026 08:06:27 +0000","dateModified":"Sat, 22 Aug 2026 08:06:27 +0000","description":"A namespaced name is a name that includes a \\ character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespaced-name.html"]}],"keywords":["namespace"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/import.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/absolute-name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative-name.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.basics.php"},{"@type":"CreativeWork","name":"PHP: Name resolution rules - Manual","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.rules.php"},{"@type":"CreativeWork","name":"Fully qualified name - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Fully_qualified_name"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"namespaced-name"}]}]}</script>
```php
<?php

namespace B\A {
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

+ [PHP: Name resolution rules - Manual](https://www.php.net/manual/en/language.namespaces.rules.php)
+ [Fully qualified name - Wikipedia](https://en.wikipedia.org/wiki/Fully_qualified_name)

## Related

+ [Import](import.html)
+ [Absolute Name](absolute-name.html)
+ [Relative Name](relative-name.html)
