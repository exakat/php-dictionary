# Lint, Won't Execute
``Lint, won't execute`` is a special state of the code, where the source can be parsed, but cannot be executed.

This covers a range of problems, from very obvious to hidden syntaxes. They depends on the moment where PHP applies its checks.

Some situations are depend on the inclusion, autoloading and, generally, the order of execution of the code.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/lint-wont-execute.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/lint-wont-execute.ini.html","name":"Lint, Won't Execute","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 23 Jun 2026 11:45:46 +0000","dateModified":"Tue, 23 Jun 2026 11:45:46 +0000","description":"``Lint, won't execute`` is a special state of the code, where the source can be parsed, but cannot be executed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Lint, Won't Execute.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Source Code](source.ini.html)
+ [Parse](parse.ini.html)
+ [Fatal Error](fatal-error.ini.html)
+ [Syntax Error](syntax-error.ini.html)
+ [Error](error.ini.html)
