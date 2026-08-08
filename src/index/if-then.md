# If Then Else
A ``if-then-else`` command branches the execution based on an condition. When the condition is true, the first branch, called ``then`` is executed. When the condition is false, the second branch, called ``else``, is executed. 

If-then structures may be chained with the ``elseif`` keyword. The ``else`` branch is then a new if-then structure, with a second condition.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/if-then.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/if-then.html","name":"If Then Else","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A ``if-then-else`` command branches the execution based on an condition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/If Then Else.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"If Then Else"}]}]}</script>
```php
<?php

    $number = rand(0, 10);
    
    if ($number % 2 === 0) {
        print "$number is even\n";
    } else {
        print "$number is odd\n";
    }

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.if.php)**
## See Also

+ [How to use PHP if-else for conditional logic and programming](https://www.ionos.com/digitalguide/websites/web-development/php-if-else/)

## Related

+ [Switch](switch.html)
+ [Match](match.html)
+ [Ternary Operator](ternary.html)
+ [Coalesce Operator](coalesce.html)
+ [Arm](arm.html)
+ [Branch](branch.html)
+ [Jump](jump.html)
+ [Conditional Structures](conditional-structure.html)
+ [Control Flow](control-flow.html)
+ [Simple Switch](simple-switch.html)
+ [Iffectation](iffectation.html)
