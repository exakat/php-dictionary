# Subnamespaces
In PHP, there is no such notion as subnamespaces. There are namespaces, which may share the same prefix than other namespaces: yet, any collaboration stops at the similarity level. 

In particular, the fallback mechanisms for functions applies to the current namespace, and then, the global, rather than any intermediate namespace.

The analogy between PHP namespaces and a file system does not applies to subnamespaces.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/subnamespace.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/subnamespace.ini.html","name":"Subnamespaces","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"In PHP, there is no such notion as subnamespaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Subnamespaces.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// also known at the global namespace
namespace {
    function foo() {}
}

namespace A {
    function foo() {}
}

// sometimes refered to as subnamespace
namespace A\B {

    // This calls the global namespace definition,
    // not the one in A 
    foo();
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.rationale.php)**
## Related

+ [Namespaces](namespace.ini.html)
+ [Sub (prefix)](sub.ini.html)
