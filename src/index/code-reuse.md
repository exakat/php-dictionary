# Code Reuse
Code reuse, as in any programming language, refers to the practice of writing code that can be used in multiple parts of an application or across different projects. This approach offers several benefits, including:

+ Efficiency: instead of writing the same functionality multiple times, the code is written once and used wherever needed
+ Consistency: reusing code promotes consistency across the application and projects, as the same logic is used in multiple places
+ Maintenance: when the code needs to be updated or fixed, there is only one place to do it, reducing the time to spread the fix

Code reuse can be achieved through various techniques, including functions, classes, traits, file inclusions and composer components.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/code-reuse.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/code-reuse.html","name":"Code Reuse","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Code reuse, as in any programming language, refers to the practice of writing code that can be used in multiple parts of an application or across different projects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Code Reuse.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Code Reuse"}]}]}</script>
```php
<?php

    // list elements like humans.
    function implodeWithAnd(array $array) : string {
        $last = array_pop($array);
        return implode(', ', $array).' and '.$last;
    }
    
    print implodeWithAnd(['Alice', 'Bob', 'Eve']);
    
    print implodeWithAnd(['Tom', 'Jerry']);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Code_reuse)**
## See Also

+ [What is code reuse and why is it important?](https://www.opslevel.com/resources/what-is-code-reuse-and-why-is-it-important)

## Related

+ [Code Architecture](code-architecture.html)
