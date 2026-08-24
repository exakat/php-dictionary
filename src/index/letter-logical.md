# Letter Logical Bug
PHP offers two sets of operators for logical operations: the letter operators, ``and``, ``or``, ``xor``, and the symbol operators, ``&&``, ``||``, no xor in symbol.

While they do the same, those operators have a difference: they do not share the same precedence. In particular, && has higher priority than = while = has higher priority than and. This leads to a difference in execution.

When combining ``=`` and ``&&``, the logical operation happens before the assignation. While combining ``=`` and ``and`` actually ignore the logical operation.

The same problem affect yield, yield from, print, all assignations, including the short assignations, the ternary operator and the null-coalesce. 

It is recommended to always use the symbol logical operators, which is closer to human expectations.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/letter-logical.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/letter-logical.html","name":"Letter Logical Bug","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"PHP offers two sets of operators for logical operations: the letter operators, and, or, xor, and the symbol operators, &&, ||, no xor in symbol","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/letter-logical.html"]}],"keywords":["classic bug"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bitwise-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/logical-operator.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/bugs.php.net\/bug.php?id=10162"},{"@type":"CreativeWork","name":"Understanding the Crucial Difference: &&\/|| vs. and\/or in PHP","url":"https:\/\/qisthidev.medium.com\/understanding-the-crucial-difference-vs-and-or-in-php-34dd9bb72c7e"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"letter-logical"}]}]}</script>
```php
<?php

    $a = 1 && 3;
    
    $b = 1 and 3;
    // equivalent to 
    ($b = 1) and 3;
    
    var_dump($a); // true
    var_dump($b); // 1

?>
```

**[Documentation](https://bugs.php.net/bug.php?id=10162)**
## See Also

+ [Understanding the Crucial Difference: &&/|| vs. and/or in PHP](https://qisthidev.medium.com/understanding-the-crucial-difference-vs-and-or-in-php-34dd9bb72c7e)

## Related

+ [Bitwise Operators](bitwise-operator.html)
+ [Logical Operators](logical-operator.html)
