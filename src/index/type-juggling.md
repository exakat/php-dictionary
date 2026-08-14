# Type Juggling
Type juggling is the emblematic PHP feature, where data has no specific type definition, and its type may change depending on the situation.

For example, integers are translated into string when displayed, or kept as integers to be used with math operations. 

Type juggling is usually done automatically, without user intervention. Explicit type juggling is achieved with the cast operators.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-juggling.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-juggling.html","name":"Type Juggling","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Type juggling is the emblematic PHP feature, where data has no specific type definition, and its type may change depending on the situation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Type Juggling.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"type-juggling"}]}]}</script>
```php
<?php

    $a = '35';
    echo $a + 4; // display 39
    
    echo substr($a, -1); // display 5

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.type-juggling.php)**
## See Also

+ [How PHP Type Juggling Works – Explained with Code Examples](https://www.freecodecamp.org/news/how-php-type-juggling-works-explained-with-code-examples/)
+ [PHP Type Juggling Vulnerability](https://medium.com/@abdelrahman0x01/php-type-juggling-vulnerability-768bca4d8b3b)
+ [Type Juggling](https://swisskyrepo.github.io/PayloadsAllTheThings/Type%20Juggling/)
+ [How I Chained Mass Assignment + PHP Type Juggling to Take Over Any Account on a Live Platform](https://medium.com/@angry.althaf/how-i-chained-mass-assignment-php-type-juggling-to-take-over-any-account-on-a-live-platform-8ad4b193e171)

## Related

+ [Cast Operator](cast.html)
+ [Boolean](boolean.html)
+ [Comparison](comparison.html)
+ [Condition](condition.html)
+ [Magic Hash](magic-hash.html)
+ [Silent Behavior](silent.html)
+ [String Increment](string-increment.html)
+ [Type Checking](type-checking.html)
+ [Type Inference](type-inference.html)
+ [Hash Comparisons](hash-comparison.html)
+ [Type Coercion](coercion.html)
+ [Capture The Flag (CTF)](ctf.html)
+ [Footgun](footgun.html)
+ [Strict](strict.html)
