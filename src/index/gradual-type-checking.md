# Gradual Type Checking
Gradual type checking is the progressive introduction of types in a code base. When a code base is not fully typed, it is in a state of gradual typing. Types are introduced, which leads to various level of validation and verifications, and a better stability. 

Gradual Type Checking ends when the code is all typed: arguments, return types, properties, constants. There might be some ambiguous situations, such as with variables, yields and use. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gradual-type-checking.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gradual-type-checking.html","name":"Gradual Type Checking","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 07:40:11 +0000","dateModified":"Tue, 07 Jul 2026 07:40:11 +0000","description":"Gradual type checking is the progressive introduction of types in a code base","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Gradual Type Checking.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Gradual Type Checking"}]}]}</script>
```php
<?php

    // partially typed function
    function foo(int $i, $b) {
        // some code
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Gradual_typing)**
## See Also

+ [Gradual Type Checking & Sorbet](https://sorbet.org/docs/gradual)
+ [What is Gradual Typing](https://jsiek.github.io/home/WhatIsGradualTyping.html)
+ [PHP’s Gradual Typing Journey: From Wild West to Almost Respectable](https://www.javacodegeeks.com/2026/01/phps-gradual-typing-journey-from-wild-west-to-almost-respectable.html)

## Related

+ [Type System](type.html)
+ [Type Checking](type-checking.html)
+ [Type Inference](type-inference.html)
+ [Phantom Type](phantom-type.html)
+ [Refinement Type](refinement-type.html)
+ [Row Polymorphism](row-polymorphism.html)
+ [Strict](strict.html)
