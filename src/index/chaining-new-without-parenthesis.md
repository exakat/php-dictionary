# Chaining New Without Parenthesis
Since PHP 8.4, it is possible to call a method, access a property or call the ``__invoke()`` method immediately upon instantiation, without parenthesis around the instantiation.

With this syntax, there must be parenthesis, albeit empty ones, after the ``new``.

This should not be confused with calling ``new`` without parenthesis for the constructor.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/chaining-new-without-parenthesis.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/chaining-new-without-parenthesis.html","name":"Chaining New Without Parenthesis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:10:51 +0000","dateModified":"Mon, 13 Jul 2026 09:10:51 +0000","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Chaining New Without Parenthesis.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Chaining New Without Parenthesis"}]}]}</script>
```php
<?php

class X {
    public $property = 1;
    
    public function foo() { echo __METHOD__; }
    
    public function __invoke() { echo __METHOD__; }
}

new x()->property;  // 1
new x()->foo();     // X::foo
new x()();          // X::__invoke

?>
```

**[Documentation](https://www.php.net/manual/en/migration84.new-features.php#migration84.new-features.core.new-chaining)**
## Related

+ [new](new.html)
+ [New Without Parenthesis](new-without-parenthesis.html)
+ [Chaining](chaining.html)
