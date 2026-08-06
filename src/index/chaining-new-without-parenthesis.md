# Chaining New Without Parenthesis
Since PHP 8.4, it is possible to call a method, access a property or call the ``__invoke()`` method immediately upon instantiation, without parenthesis around the instantiation.

With this syntax, there must be parenthesis, albeit empty ones, after the ``new``.

This should not be confused with calling ``new`` without parenthesis for the constructor.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/chaining-new-without-parenthesis.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/chaining-new-without-parenthesis.html","name":"Chaining New Without Parenthesis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:10:51 +0000","dateModified":"Mon, 13 Jul 2026 09:10:51 +0000","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Chaining New Without Parenthesis.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [new](new.ini.html)
+ [New Without Parenthesis](new-without-parenthesis.ini.html)
+ [Chaining](chaining.ini.html)
