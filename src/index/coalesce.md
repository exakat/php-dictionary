# Coalesce Operator
The coalesce operator ``??`` returns its first operand if it is set and not NULL. Otherwise it will return its second operand. It was introduced in version 7.0 to replace the common but verbose ``isset($x) ? $x : $default`` pattern, while also silencing the notice that would normally be raised when reading an undefined variable, array key, or property.

The operator is chainable: ``$a ?? $b ?? $c`` evaluates left to right and returns the first operand that is set and not NULL, falling through to the last operand otherwise. Since PHP 7.4, it also has an assignment form, ``??=``, which assigns the right-hand value only if the left-hand variable is currently unset or NULL, making it convenient for lazily initializing defaults.

Because ``??`` only checks for NULL, it is not a general-purpose replacement for the ternary operator: falsy-but-non-NULL values such as ``0``, ``""``, or ``false`` are returned unchanged rather than replaced by the fallback.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coalesce.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coalesce.html","name":"Coalesce Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The coalesce operator ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Coalesce Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Coalesce Operator"}]}]}</script>
```php
<?php

    class X { }
    
    // instantiation
    $x = new X;
    
    // cloning
    $y = clone $x;

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.coalesce)**
## See Also

+ [Null Coalescing Operator (??)](https://riptutorial.com/php/example/7164/null-coalescing-operator-----)
+ [PHP ternary operator vs null coalescing operator](https://stackoverflow.com/questions/34571330/php-ternary-operator-vs-null-coalescing-operator)

## Related

+ [Ternary Operator](ternary.html)
+ [Colon](colon.html)
+ [If Then Else](if-then.html)
+ [Short Ternary Operator](short-ternary.html)
+ [Conditional Structures](conditional-structure.html)
+ [Double](double.html)
+ [Nullsafe](nullsafe.html)
+ [Question Mark ?](question-mark.html)
+ [Streamlining](streamlining.html)
