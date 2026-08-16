# Nesting
Nesting refers to the practice of placing a code block or construct inside another.

This is commonly used with loops, conditional statements, functions, classes, arrays, generators, attributes, ternaries, try-catch, etc. 

Nesting creates more complex and intricate logic. It usually erodes readability by mixing two contexts in the same code location, or generating unexpected code.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nesting.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nesting.html","name":"Nesting","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 21:01:56 +0000","dateModified":"Tue, 11 Aug 2026 21:01:56 +0000","description":"Nesting refers to the practice of placing a code block or construct inside another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Nesting.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"nesting"}]}]}</script>
```php
<?php

    // Nested attributes
    #[
        MyAttribute(
            new OptionA(),
            new OptionB()
        )
    ]
    function headers() : never {
    }
    
    // Nested conditions
    if ($condition1) {
        if ($condition2) {
            // Code to run when both condition1 and condition2 are true
        } else {
            // Code to run when condition1 is true but condition2 is false
        }
    } else {
        // Code to run when condition1 is false
    }
    
    // Nested loops
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            // Code to handle the combination of $i and $j
        }
    }
    
    // Nested functions
    function outerFunction() {
        // Code in the outer function
        
        function innerFunction() {
            // Code in the inner function
        }
        
        innerFunction(); // Call the inner function
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Nesting_(computing))**
## See Also

+ [PHP Nested Try-Catch](https://rollbar.com/blog/php-nested-try-catch/#)

## Related

+ [Array, []](array.html)
+ [Attribute](attribute.html)
+ [Ternary Operator](ternary.html)
+ [Loops](loop.html)
+ [If Then Else](ifthen.html)
+ [Nested Attributes](nested-attribute.html)
