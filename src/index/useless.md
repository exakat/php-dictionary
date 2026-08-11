# Useless
Some piece of code is useless when it doesn't bring any feature to the code. 

It may be the case of double checks, where a characteristic is checked twice in a row; or when the same operation is repeated multiple times, yet is idempotent.

It is also the case of unused calculations: they are processed, stored, but ultimately, not combined with anything else.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/useless.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/useless.html","name":"Useless","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 16:53:57 +0000","dateModified":"Mon, 10 Aug 2026 16:53:57 +0000","description":"Some piece of code is useless when it doesn't bring any feature to the code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Useless.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"useless"}]}]}</script>
```php
<?php

function foo(array $array) {
    if (!empty($array)) {
        // foreach() checks automatically the array for elements, and skips the loop when the array is empty.
        foreach($array as $a) {
            doSomething(); 
        }
    }
}

// foo is defined and called
$result = foo([]);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Dead_code)**
## See Also

+ [Code Smells: Dead Code](https://refactoring.guru/smells/dead-code)

## Related

+ [Double Check](double-check.html)
+ [Idempotent](idempotent.html)
+ [Unused](unused.html)
+ [Noop](noop.html)
+ [Propagation](propagation.html)
