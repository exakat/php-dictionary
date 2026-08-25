# Lint, Won't Execute
``Lint, won't execute`` is a special state of the code, where the source can be parsed, but cannot be executed.

This covers a range of problems, from very obvious to hidden syntaxes. They depend on the moment where PHP applies its checks.

Some situations depend on the inclusion, autoloading and, generally, the order of execution of the code.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lint-wont-execute.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lint-wont-execute.html","name":"Lint, Won't Execute","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 12:10:15 +0000","dateModified":"Sat, 15 Aug 2026 12:10:15 +0000","description":"Lint, won't execute is a special state of the code, where the source can be parsed, but cannot be executed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lint-wont-execute.html"]}],"keywords":["source code","static analysis"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/source.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parse.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fatal-error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/syntax-error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/features.commandline.options.php"},{"@type":"CreativeWork","name":"PHP errors","url":"https:\/\/www.php.net\/manual\/en\/language.errors.php"},{"@type":"CreativeWork","name":"Autoloading Classes","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.autoload.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"lint-wont-execute"}]}]}</script>
```php
<?php

    function foo() {
        clone 1; // obviously fails when executed
    }
    
    function goo(int $a = A) {}
    const A = 'abc';
    
    // fails when called without arguments
    foo(1); // OK
    foo();  // KO

?>
```

**[Documentation](https://www.php.net/manual/en/features.commandline.options.php)**
## See Also

+ [PHP errors](https://www.php.net/manual/en/language.errors.php)
+ [Autoloading Classes](https://www.php.net/manual/en/language.oop5.autoload.php)

## Related

+ [Source Code](source.html)
+ [Parse](parse.html)
+ [Fatal Error](fatal-error.html)
+ [Syntax Error](syntax-error.html)
+ [Error](error.html)
