# Fluent Interface
A fluent interface, or fluid interface, is an object-oriented API whose design relies extensively on method chaining.

A fluent interface is not related to an interface: it may be implemented without them.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fluent-interface.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fluent-interface.ini.html","name":"Fluent Interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A fluent interface, or fluid interface, is an object-oriented API whose design relies extensively on method chaining","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Fluent Interface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Final Keyword](final.ini.html)
+ [Interface](interface.ini.html)
+ [Chaining](chaining.ini.html)
+ [Expressive Interface](expressive-interface.ini.html)
