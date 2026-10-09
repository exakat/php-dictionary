# Lazy Class Constant
A lazy class constant is a class constant whose value expression is not evaluated when the class is declared, but only the first time the constant is actually read.

PHP resolves simple scalar constants, plain strings and numbers, at compile time, folding them into the class definition directly. Constants whose value depends on another class, an enum case, or a more complex expression cannot always be resolved that early, because the referenced class may not exist yet, so PHP defers the computation to the moment the constant is accessed.

This deferred resolution has a visible consequence: a class can declare a constant with an invalid expression, and the class still loads without error. The error only surfaces when the invalid constant is actually read, which can happen much later, or never, if that particular constant is never used.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lazy-class-constant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lazy-class-constant.html","name":"Lazy Class Constant","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 21 Sep 2026 19:22:48 +0000","dateModified":"Mon, 21 Sep 2026 19:22:48 +0000","description":"A lazy class constant is a class constant whose value expression is not evaluated when the class is declared, but only the first time the constant is actually read","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lazy-class-constant.html"]}],"keywords":["concept","engine"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compile-time.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compile-time-evaluation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lazy-loading.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lazy-objects.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/const.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.constants.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.38","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"lazy-class-constant"}]}]}</script>
```php
<?php

    class Config {
        // References Feature::ENABLED, resolved lazily: Feature is declared below.
        const MODE = Feature::ENABLED ? 'full' : 'basic';
    }

    class Feature {
        const ENABLED = true;
    }

    // Config::MODE is only resolved here, not when Config was declared.
    echo Config::MODE; // 'full'

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.constants.php)**
## Related

+ [Compile Time](compile-time.html)
+ [Compile-time Evaluation](compile-time-evaluation.html)
+ [Lazy Loading](lazy-loading.html)
+ [Lazy Objects](lazy-objects.html)
+ [Const](const.html)
+ [Constants](constant.html)
