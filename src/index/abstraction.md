# Abstraction
An abstraction, or also an abstraction layer, is a way to hide the underlying complexity of some logic behind a simpler interface so that other parts of the program don't need to worry about the details.

In that sense, it is related to the ``abstract`` keyword, which introduces a signature and leaves freedom of implementation.

Abstraction is also the name of the refactor to replace a piece of code by an easily changed piece of code.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abstraction.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abstraction.html","name":"Abstraction","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 21:22:47 +0000","dateModified":"Fri, 10 Jul 2026 21:22:47 +0000","description":"An abstraction, or also an abstraction layer, is a way to hide the underlying complexity of some logic behind a simpler interface so that other parts of the program don't need to worry about the details","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Abstraction.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"abstraction"}]}]}</script>
```php
<?php

    echo 1; // displays 1 
    
    // This depends on the execution environment
    const A = PHP_OS == 'win' ? 'Windows' : 'Others';
    
    echo A; // display the value of A

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Abstraction_(computer_science))**
## See Also

+ [Abstraction in PHP](https://mohasin-dev.medium.com/abstraction-in-php-8c6685893bb8)

## Related

+ [Abstract Keyword](abstract.html)
+ [Inlining](inlining.html)
+ [Facade](facade.html)
+ [Over-engineer](overengineer.html)
+ [Separation Of Concerns](separation-of-concerns.html)
