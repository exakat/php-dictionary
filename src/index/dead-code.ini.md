# Dead Code
Dead code refers to sections of code that are no longer executed or reachable during the program's execution. It includes any lines or blocks of code that do not contribute to the program's functionality or produce any observable results. Dead code can be the result of code modifications, changes in requirements, or mistakes during development.

Dead code is also known as unused code. It happens to any defined structure. Variables, methods, functions, classes, interfaces, etc..
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dead-code.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dead-code.ini.html","name":"Dead Code","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 23 Jun 2026 11:45:46 +0000","dateModified":"Tue, 23 Jun 2026 11:45:46 +0000","description":"Dead code refers to sections of code that are no longer executed or reachable during the program's execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Dead Code.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // bar is dead code : never executed
    function bar() { echo 'World'; }
    
    // foo() is alive code : it is executed
    function foo() { echo 'Hello'; }

    echo foo();

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Dead_code)**
## See Also

+ [Delete unused code (and how to retrieve it)](https://understandlegacycode.com/blog/delete-unused-code/)
+ [The Art of Code Deletion: Why Removing Code Makes You a Better Developer](https://dev.to/adamgolan/the-art-of-code-deletion-why-removing-code-makes-you-a-better-developer-3cm)
+ [Unused code detector — How to make your PHP code cleaner](https://medium.com/@pogulailo/unused-code-detector-how-to-make-your-php-code-cleaner-50e6f5cb4109)

## Related

+ [Zombie Code](zombie-code.ini.html)
+ [Analysis](analysis.ini.html)
+ [Habit](habit.ini.html)
+ [Legacy](legacy.ini.html)
+ [Unreachable Code](unreachable-code.ini.html)

## Related packages

+ [scheb/tombstone](https://packagist.org/packages/scheb/tombstone)
