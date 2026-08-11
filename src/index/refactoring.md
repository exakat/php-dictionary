# Refactoring
Refactoring, as in any programming language, refers to the process of restructuring and improving the codebase of an application without changing its external behavior. The primary goal of refactoring is to make the code more readable, maintainable, and efficient while reducing code duplication and potential bugs. 

Refactoring is an essential practice in software development to ensure that the code remains clean and adaptable as the project evolves.

The constraint of rewriting the code without changing the external behavior is somewhat misleading: for example, changing the algorithm to speed up the processing of a piece of data, changes its behavior as it is faster. Such behavior is usually desirable, so it is not considered as a change in behavior: at least, not a negative one. Yet, it still may have consequences on the rest of the application.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/refactoring.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/refactoring.html","name":"Refactoring","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Refactoring, as in any programming language, refers to the process of restructuring and improving the codebase of an application without changing its external behavior","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Refactoring.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"refactoring"}]}]}</script>
```php
<?php

    function factorial(int $n) : int {
        $return = 2;
        for($i = 3; $i <= $n; ++$i) {
            $return *= $i;
        }
        
        return $return;
    }
    
    function factorialr(int $n) : int {
        if ($n === 2) { return 1; }
        
        return factorialr($n - 1);
    
        return $return;
    }
    
    // Note : checks on $n >= 1 are omitted here.

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Code_refactoring)**
## See Also

+ [Refactoring without tests should be fine](https://matthiasnoback.nl/2022/10/refactoring-without-tests-should-be-fine/)
+ [Refactoring Guru](https://refactoring.guru/refactoring)
+ [PHP Refactoring: The Art of Improving Code Quality and Maintainability](https://www.fuseweb.nl/en/blog/2023/05/10/php-refactoring-code-quality-maintainability)
+ [Refactoring Techniques in PHP](https://devm.io/php/refactoring-techniques-in-php)

## Related

+ [Test](test.html)
+ [Autowiring](autowiring.html)
+ [Drop-in](drop-in.html)
+ [Legacy](legacy.html)
+ [Streamlining](streamlining.html)
+ [Maintenance](maintenance.html)
+ [Total Cost Of Ownership (TCO)](tco.html)
+ [Brownfield](brownfield.html)
+ [Fat](fat.html)
+ [Rector](rector.html)
+ [Test-Driven Development](test-driven-development.html)
