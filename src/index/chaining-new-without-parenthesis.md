# Chaining New Without Parenthesis
Since PHP 8.4, it is possible to call a method, access a property or call the ``__invoke()`` method immediately upon instantiation, without parenthesis around the instantiation.

With this syntax, there must be parenthesis, albeit empty ones, after the ``new``.

This should not be confused with calling ``new`` without parenthesis for the constructor.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/chaining-new-without-parenthesis.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/chaining-new-without-parenthesis.html","name":"Chaining New Without Parenthesis","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 26 Aug 2026 04:23:49 +0000","dateModified":"Wed, 26 Aug 2026 04:23:49 +0000","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/chaining-new-without-parenthesis.html"]}],"keywords":["feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new-without-parenthesis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/chaining.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/migration84.new-features.php#migration84.new-features.core.new-chaining"},{"@type":"CreativeWork","name":"PHP RFC: new MyClass()->method() without parentheses","url":"https:\/\/wiki.php.net\/rfc\/new_without_parentheses"},{"@type":"CreativeWork","name":"New without parentheses in PHP 8.4","url":"https:\/\/stitcher.io\/blog\/new-with-parentheses-php-84"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"chaining-new-without-parenthesis"}]}]}</script>
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
## See Also

+ [PHP RFC: new MyClass()->method() without parentheses](https://wiki.php.net/rfc/new_without_parentheses)
+ [New without parentheses in PHP 8.4](https://stitcher.io/blog/new-with-parentheses-php-84)

## Related

+ [new](new.html)
+ [New Without Parenthesis](new-without-parenthesis.html)
+ [Chaining](chaining.html)
