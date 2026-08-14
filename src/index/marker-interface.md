# Marker Interface
A marker interface is an interface with no methods or constants. It is used only to 'mark' or 'tag' a class as having a certain property, so that property can be checked at runtime with ``instanceof``, without imposing any method to implement.

Marker interfaces rely on type-checking rather than polymorphism: the mere presence of the interface carries the information, not any method call on it. This is different from a regular interface, which enforces a contract of methods.

Attributes are often a more expressive, modern replacement for marker interfaces, since they may also carry data alongside the tag.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/marker-interface.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/marker-interface.html","name":"Marker Interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Aug 2026 09:43:22 +0000","dateModified":"Fri, 07 Aug 2026 09:43:22 +0000","description":"A marker interface is an interface with no methods or constants","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Marker Interface.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"marker-interface"}]}]}</script>
```php
<?php

// An empty interface, used only to tag a class
interface Cacheable {}

class Report implements Cacheable {}
class Invoice {}

function persist(object $object) {
    if ($object instanceof Cacheable) {
        // store the object in a cache layer
    }
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Marker_interface_pattern)**
## See Also

+ [What is a marker interface?](https://stackoverflow.com/questions/619922/what-is-a-marker-interface-in-java)

## Related

+ [Interface](interface.html)
+ [Attribute](attribute.html)
+ [instanceof](instanceof.html)
+ [Polymorphism](polymorphism.html)
+ [Pattern](pattern.html)
+ [Stringable](stringable.html)
+ [Serializable](serializable.html)
