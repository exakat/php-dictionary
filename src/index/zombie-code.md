# Zombie Code
Zombie code refers to sections of code that are executed, but whose results are discarded. It is essentially dead or unused code that serves no purpose and can negatively impact the codebase.

Zombie code slows down the application, yet are logged as being used. They are a various of dead code.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zombie-code.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zombie-code.html","name":"Zombie Code","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 29 Aug 2026 07:37:37 +0000","dateModified":"Sat, 29 Aug 2026 07:37:37 +0000","description":"Zombie code refers to sections of code that are executed, but whose results are discarded","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zombie-code.html"]}],"keywords":["concept","static analysis"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dead-code.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.calculquebec.ca\/en\/communiques\/zombie-code\/"},{"@type":"CreativeWork","name":"Code Smells: Dead Code","url":"https:\/\/refactoring.guru\/smells\/dead-code"},{"@type":"CreativeWork","name":"Locating Dead Code","url":"https:\/\/blog.jetbrains.com\/phpstorm\/2019\/04\/locating-dead-code\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"zombie-code"}]}]}</script>
```php
<?php

    // $capitalized is calculated from $name
    $capitalized = ucfirst(strtolower($name));
    
    // $capitalized is not used later in the code. 
    echo "Hello $name\n";

?>
```

**[Documentation](https://www.calculquebec.ca/en/communiques/zombie-code/)**
## See Also

+ [Code Smells: Dead Code](https://refactoring.guru/smells/dead-code)
+ [Locating Dead Code](https://blog.jetbrains.com/phpstorm/2019/04/locating-dead-code/)

## Related

+ [Dead Code](dead-code.html)
