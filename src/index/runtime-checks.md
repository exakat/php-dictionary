# Runtime Checks
Runtime checks refer to the process of verifying certain conditions or constraints during the execution of a script. These checks are performed dynamically while the script is running, as opposed to static checks which are done before the script is executed. Runtime checks help ensure that the program behaves as expected and can catch potential issues during execution.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/runtime-checks.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/runtime-checks.html","name":"Runtime Checks","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Runtime checks refer to the process of verifying certain conditions or constraints during the execution of a script","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Runtime Checks.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"runtime-checks"}]}]}</script>
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

+ [Assertions](assertion.html)
+ [Type Checking](type-checking.html)
