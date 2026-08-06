# If Then Else
A ``if-then-else`` command branches the execution based on an condition. When the condition is true, the first branch, called ``then`` is executed. When the condition is false, the second branch, called ``else``, is executed. 

If-then structures may be chained with the ``elseif`` keyword. The ``else`` branch is then a new if-then structure, with a second condition.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/if-then.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/if-then.html","name":"If Then Else","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A ``if-then-else`` command branches the execution based on an condition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/If Then Else.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Switch](switch.ini.html)
+ [Match](match.ini.html)
+ [Ternary Operator](ternary.ini.html)
+ [Coalesce Operator](coalesce.ini.html)
+ [Arm](arm.ini.html)
+ [Branch](branch.ini.html)
+ [Jump](jump.ini.html)
+ [Conditional Structures](conditional-structure.ini.html)
+ [Control Flow](control-flow.ini.html)
+ [Simple Switch](simple-switch.ini.html)
+ [Iffectation](iffectation.ini.html)
