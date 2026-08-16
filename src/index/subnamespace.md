# Subnamespaces
In PHP, there is no such notion as subnamespaces. There are namespaces, which may share the same prefix than other namespaces: yet, any collaboration stops at the similarity level. 

In particular, the fallback mechanisms for functions applies to the current namespace, and then, the global, rather than any intermediate namespace.

The analogy between PHP namespaces and a file system does not applies to subnamespaces.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/subnamespace.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/subnamespace.html","name":"Subnamespaces","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"In PHP, there is no such notion as subnamespaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Subnamespaces.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"subnamespace"}]}]}</script>
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

+ [Namespaces](namespace.html)
+ [Sub (prefix)](sub.html)
