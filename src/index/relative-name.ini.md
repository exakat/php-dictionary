# Relative Name
A relative name is a name that is completed by the current namespace to lead to the definition of the referenced structure.

Relative names usually start without the leading ``\``. In the case of names with a single name, it is either a relative name, or a local import.

The opposite of relative name is absolute name.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/relative-name.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/relative-name.ini.html","name":"Relative Name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:30:00 +0000","dateModified":"Fri, 19 Jun 2026 21:30:00 +0000","description":"A relative name is a name that is completed by the current namespace to lead to the definition of the referenced structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Relative Name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Import](import.ini.html)
+ [Absolute Name](absolute-name.ini.html)
+ [Identifier](identifier.ini.html)
+ [Namespaced Name](namespaced-name.ini.html)
