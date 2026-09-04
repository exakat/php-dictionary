# Sub (prefix)
``sub`` is a prefix, that is added to existing structure, to express that they are depending on a larger similar structure, which acts as a parent 

It applies to several concepts: 

+ Subclasses: classes that extends another class
+ Subnamespaces: a namespace that share a prefix with another one

While ``sub-`` is a generic prefix, it is not applied to every possible words, as they are seldom used. It may still produce neologisms, which sound funny, but may become mainstream. For example, a ``sub-interface`` makes sense, but is not used; a sub-trait makes no sense.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sub.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sub.html","name":"Sub (prefix)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:16:37 +0000","dateModified":"Fri, 10 Jul 2026 09:16:37 +0000","description":"sub is a prefix, that is added to existing structure, to express that they are depending on a larger similar structure, which acts as a parent ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sub.html"]}],"alternateName":["sub-prefix"],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/subnamespace.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/subclass.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Inheritance_(object-oriented_programming)"},{"@type":"CreativeWork","name":"Exploring Inheritance in PHP","url":"https:\/\/linu.us\/exploring-inheritance-in-php"},{"@type":"CreativeWork","name":"Clean code with PHP namespaces","url":"https:\/\/www.honeybadger.io\/blog\/php-namespaces\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sub"}]}]}</script>
```php
<?php

namespace A { }

// this is a subnamespace
namespace A\B { }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Inheritance_(object-oriented_programming))**
## See Also

+ [Exploring Inheritance in PHP](https://linu.us/exploring-inheritance-in-php)
+ [Clean code with PHP namespaces](https://www.honeybadger.io/blog/php-namespaces/)

## Related

+ [Subnamespaces](subnamespace.html)
+ [Subclass](subclass.html)
