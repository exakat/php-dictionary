# Question Mark ?
``?`` is a character, used in various situations: 

+ Ternary operator: ``$a ? $b : $c``
+ Short ternary operator: ``$a ?: $c``
+ Coalesce operator: ``$a ??``
+ Null type, ``function foo(?int $int) {}``
+ As a quantifier in regex, 0 or 1
+ As a quantifier with ``fnmatch()``, 0 or 1.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/question-mark.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/question-mark.html","name":"Question Mark ?","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:29:14 +0000","dateModified":"Fri, 19 Jun 2026 21:29:14 +0000","description":"``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Question Mark ?.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $a = 1;
    echo a ? 'b' : 'c'; // c

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php)**
## Related

+ [Ternary Operator](ternary-operator.ini.html)
+ [Coalesce Operator](coalesce.ini.html)
+ [Type System](type.ini.html)
+ [Regular Expression](regex.ini.html)
+ [fnmatch()](fnmatch.ini.html)
