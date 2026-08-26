# Method Compatibility
Method compatibility means that when a class overrides a method, from a parent class or interface, the new method must keep a compatible signature.

In short, the child method must:

+ Have the same or wider visibility, e.g. public stays public, private becomes protected
+ Accept the same parameter types, or more general ones
+ Return the same type, or a more specific one
+ Not require more mandatory parameters

If it's incompatible, PHP throws a fatal error.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method-compatibility.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method-compatibility.html","name":"Method Compatibility","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 08:15:55 +0000","dateModified":"Thu, 13 Aug 2026 08:15:55 +0000","description":"Method compatibility means that when a class overrides a method, from a parent class or interface, the new method must keep a compatible signature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method-compatibility.html"]}],"keywords":["compatibility","oop","_nocompileOK"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throw.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fatal-error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compatibility.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.basic.php#language.oop.lsp"},{"@type":"CreativeWork","name":"Liskov Substitution Principle in PHP","url":"https:\/\/php.watch\/articles\/php-lsp"},{"@type":"CreativeWork","name":"Liskov Substitution Principle in PHP\/Laravel","url":"https:\/\/mohasin-dev.medium.com\/how-to-use-liskov-substitution-principle-in-php-laravel-df253fd38c8"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"method-compatibility"}]}]}</script>
```php
<?php

class X {
    function foo(int $a): void {}
    function goo(int $a): X {}
    function hoo(int $a): string {}
}

class Y extends X {
    // This is compatible, as it is identical to the parent method
    function foo(int $a): void {}
    
    // This is compatible, yet not identical
    // the parameter is more general
    // the return type is more precise
    function goo(int|string $a): Y {}
    
    // This is not compatible with the parent's method signature
    function hoo(int $a): int {}
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.basic.php#language.oop.lsp)**
## See Also

+ [Liskov Substitution Principle in PHP](https://php.watch/articles/php-lsp)
+ [Liskov Substitution Principle in PHP/Laravel](https://mohasin-dev.medium.com/how-to-use-liskov-substitution-principle-in-php-laravel-df253fd38c8)

## Related

+ [Method](method.html)
+ [throw](throw.html)
+ [Fatal Error](fatal-error.html)
+ [Compatibility](compatibility.html)
