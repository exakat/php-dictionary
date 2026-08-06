# Runtime Checks
Runtime checks refer to the process of verifying certain conditions or constraints during the execution of a script. These checks are performed dynamically while the script is running, as opposed to static checks which are done before the script is executed. Runtime checks help ensure that the program behaves as expected and can catch potential issues during execution.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/runtime-checks.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/runtime-checks.html","name":"Runtime Checks","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Runtime checks refer to the process of verifying certain conditions or constraints during the execution of a script","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Runtime Checks.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // string $string is a static check : it can be checked before running
    function foo(string $string, $argument) {
        // This is a runtime check : it needs to run
        if (is_string($argument)) {
            // 
        }
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Runtime_verification)**
## See Also

+ [Runtime type checking is great](https://blog.jez.io/runtime-type-checking/)

## Related

+ [Assertions](assertion.ini.html)
+ [Type Checking](type-checking.ini.html)
