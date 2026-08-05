# Gradual Type Checking
Gradual type checking is the progressive introduction of types in a code base. When a code base is not fully typed, it is in a state of gradual typing. Types are introduced, which leads to various level of validation and verifications, and a better stability. 

Gradual Type Checking ends when the code is all typed: arguments, return types, properties, constants. There might be some ambiguous situations, such as with variables, yields and use. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/gradual-type-checking.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/gradual-type-checking.ini.html","name":"Gradual Type Checking","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 07:40:11 +0000","dateModified":"Tue, 07 Jul 2026 07:40:11 +0000","description":"Gradual type checking is the progressive introduction of types in a code base","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Gradual Type Checking.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Type System](type.ini.html)
+ [Type Checking](type-checking.ini.html)
+ [Type Inference](type-inference.ini.html)
+ [Phantom Type](phantom-type.ini.html)
+ [Refinement Type](refinement-type.ini.html)
+ [Row Polymorphism](row-polymorphism.ini.html)
+ [Strict](strict.ini.html)
