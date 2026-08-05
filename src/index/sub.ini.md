# Sub (prefix)
``sub`` is a prefix, that is added to existing structure, to express that they are depending on a larger similar structure, which acts as a parent 

It applies to several concepts: 

+ Subclasses: classes that extends another class
+ Subnamespaces: a namespace that share a prefix with another one

While ``sub-`` is a generic prefix, it is not applied to every possible words, as they are seldom used. It may still produce neologisms, which sound funny, but may become mainstream. For example, a ``sub-interface`` makes sense, but is not used; a sub-trait makes no sense.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sub.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sub.ini.html","name":"Sub (prefix)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:16:37 +0000","dateModified":"Fri, 10 Jul 2026 09:16:37 +0000","description":"``sub`` is a prefix, that is added to existing structure, to express that they are depending on a larger similar structure, which acts as a parent ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Sub (prefix).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Subnamespaces](subnamespace.ini.html)
+ [Subclass](subclass.ini.html)
