# Inlining
Inlining is the process to bring a dependency inside the current code, so as to remove that dependency. 

For example, replacing a constant by its value, as a literal, means that the code works without depending on the external definition. 

On the other hand, such external structure may also have its own life cycle, which is not reflected anymore. It also may hurt readability.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inlining.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inlining.html","name":"Inlining","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Inlining is the process to bring a dependency inside the current code, so as to remove that dependency","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Inlining.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"inlining"}]}]}</script>
```php
<?php

    const A = 1;
    
    echo A; // dependent code
    
    echo 1; // 

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Inline_expansion)**
## See Also

+ [Inline method refactoring](https://blog.jetbrains.com/phpstorm/2018/04/inline-method-refactoring/)
+ [Inline Method](hhttps://refactoring.guru/inline-method)

## Related

+ [Readability](readability.html)
+ [Abstraction](abstraction.html)
+ [Literal](literal.html)
+ [Dependency](dependency.html)
+ [Streamlining](streamlining.html)
