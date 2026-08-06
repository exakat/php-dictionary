# Type Juggling
Type juggling is the emblematic PHP feature, where data has no specific type definition, and its type may change depending on the situation.

For example, integers are translated into string when displayed, or kept as integers to be used with math operations. 

Type juggling is usually done automatically, without user intervention. Explicit type juggling is achieved with the cast operators.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/type-juggling.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/type-juggling.html","name":"Type Juggling","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:41:00 +0000","dateModified":"Mon, 13 Jul 2026 18:41:00 +0000","description":"Type juggling is the emblematic PHP feature, where data has no specific type definition, and its type may change depending on the situation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Type Juggling.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Cast Operator](cast.ini.html)
+ [Boolean](boolean.ini.html)
+ [Comparison](comparison.ini.html)
+ [Condition](condition.ini.html)
+ [Magic Hash](magic-hash.ini.html)
+ [Silent Behavior](silent.ini.html)
+ [String Increment](string-increment.ini.html)
+ [Type Checking](type-checking.ini.html)
+ [Type Inference](type-inference.ini.html)
+ [Hash Comparisons](hash-comparison.ini.html)
+ [Type Coercion](coercion.ini.html)
+ [Capture The Flag (CTF)](ctf.ini.html)
+ [Footgun](footgun.ini.html)
+ [Strict](strict.ini.html)
