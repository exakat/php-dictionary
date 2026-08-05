# Inlining
Inlining is the process to bring a dependency inside the current code, so as to remove that dependency. 

For example, replacing a constant by its value, as a literal, means that the code works without depending on the external definition. 

On the other hand, such external structure may also have its own life cycle, which is not reflected anymore. It also may hurt readability.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/inlining.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/inlining.ini.html","name":"Inlining","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Inlining is the process to bring a dependency inside the current code, so as to remove that dependency","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Inlining.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Readability](readability.ini.html)
+ [Abstraction](abstraction.ini.html)
+ [Literal](literal.ini.html)
+ [Dependency](dependency.ini.html)
+ [Streamlining](streamlining.ini.html)
