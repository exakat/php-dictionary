# Fluent Interface
A fluent interface, or fluid interface, is an object-oriented API whose design relies extensively on method chaining.

A fluent interface is not related to an interface: it may be implemented without them.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fluent-interface.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fluent-interface.html","name":"Fluent Interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A fluent interface, or fluid interface, is an object-oriented API whose design relies extensively on method chaining","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Fluent Interface.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fluent-interface"}]}]}</script>
```php
<?php

class script {
    function hello() {
        print 'Hello ';
        return $this;
    }

    function word() {
        print 'word.';
        return $this;
    }
}

$script = new Script();

$script->hello()->world();
// 

?>
```

**[Documentation](https://designpatternsphp.readthedocs.io/en/latest/Structural/FluentInterface/README.html)**
## See Also

+ [Fluent Interface](https://en.wikipedia.org/wiki/Fluent_interface)
+ [Fluent Interfaces Are Bad for Maintainability](https://news.ycombinator.com/item?id=16619171)
+ [Fluent Interfaces are Evil](https://ocramius.github.io/blog/fluent-interfaces-are-evil/)

## Related

+ [Final Keyword](final.html)
+ [Interface](interface.html)
+ [Chaining](chaining.html)
+ [Expressive Interface](expressive-interface.html)
