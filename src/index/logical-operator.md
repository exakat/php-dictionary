# Logical Operators
Logical operators applies four logical functions to booleans. 

+ ``and`` and ``&&``
+ ``or`` and ``||``
+ ``xor``, no symbolic version for ``xor``
+ ``!``, no letter version for ``not``

The logical operators are either symbolic or letter. Be aware that the symbolic operators have a higher precedence than the letter one, in particular in regards to comparisons.

The logical operators work on various types, and output booleans. They are different from the bitwise operators, which work on the value as a bit level, not as a whole.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/logical-operator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/logical-operator.html","name":"Logical Operators","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Logical operators applies four logical functions to booleans","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/logical-operator.html"]}],"alternateName":["xor","or","and-operator","logical"],"keywords":["operator"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bitwise-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/not.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/and.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bitshift-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/false.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/true.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/letter-logical.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pipe-operator.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.comparison.php"},{"@type":"CreativeWork","name":"Operator Precedence","url":"https:\/\/www.php.net\/manual\/en\/language.operators.precedence.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"logical-operator"}]}]}</script>
```php
<?php

    if ($a == $b) {
        print "a and b are equal";
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php)**
## See Also

+ [Operator Precedence](https://www.php.net/manual/en/language.operators.precedence.php)

## Related

+ [Bitwise Operators](bitwise-operator.html)
+ [Not Operator](not.html)
+ [And Operator](and.html)
+ [Bitshift Operators](bitshift-operator.html)
+ [False](false.html)
+ [True](true.html)
+ [Letter Logical Bug](letter-logical.html)
+ [Pipe Operator ``|>``](pipe-operator.html)
