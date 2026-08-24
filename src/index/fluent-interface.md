# Fluent Interface
A fluent interface, or fluid interface, is an object-oriented API whose design relies extensively on method chaining.

A fluent interface is not related to an interface: it may be implemented without them.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fluent-interface.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fluent-interface.html","name":"Fluent Interface","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A fluent interface, or fluid interface, is an object-oriented API whose design relies extensively on method chaining","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fluent-interface.html"]}],"alternateName":["fluent","fluid-interface"],"keywords":["code practice","pattern"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/final.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/chaining.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/expressive-interface.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/designpatternsphp.readthedocs.io\/en\/latest\/Structural\/FluentInterface\/README.html"},{"@type":"CreativeWork","name":"Fluent Interface","url":"https:\/\/en.wikipedia.org\/wiki\/Fluent_interface"},{"@type":"CreativeWork","name":"Fluent Interfaces Are Bad for Maintainability","url":"https:\/\/news.ycombinator.com\/item?id=16619171"},{"@type":"CreativeWork","name":"Fluent Interfaces are Evil","url":"https:\/\/ocramius.github.io\/blog\/fluent-interfaces-are-evil\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fluent-interface"}]}]}</script>
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
