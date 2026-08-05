# Namespaced Name
A namespaced name is a name that includes a ``\`` character.

A namespaced name may be relative or absolute. 

Namespaced names are sometimes reported in errors.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/namespaced-name.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/namespaced-name.ini.html","name":"Namespaced Name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:32 +0000","dateModified":"Fri, 19 Jun 2026 21:25:32 +0000","description":"A namespaced name is a name that includes a ``\\`` character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Namespaced Name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Import](import.ini.html)
+ [Absolute Name](absolute-name.ini.html)
+ [Relative Name](relative-name.ini.html)
