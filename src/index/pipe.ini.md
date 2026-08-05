# Pipe Operator
The ``pipe`` operator is the ``|>`` operator. 

The pipe operator chains two callables from left to right: it takes the return value of the first callable and passes it to the right callable.

The pipe operator is equivalent to nested calls of functions, methods, closures. It also only applies to callables with one compulsory parameter, with return values, and without references.

It was added in version 8.5.

The pipe operator is a reference to the ``|`` pipe operator from the command line, with use the result of the previous, left, command to feed the next, right, command. It should not be confused with the or bitwise operator ``|``, already available.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pipe.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pipe.ini.html","name":"Pipe Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:30:41 +0000","dateModified":"Tue, 14 Jul 2026 05:30:41 +0000","description":"The ``pipe`` operator is the ``|>`` operator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Pipe Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $result = "HELLO world" |> trim(...) |> strtolower(...) |> ucfirst(...);
    // Hello World
    
    // Same as 
    $result = ucfirst(strtolower(trim("HELLO World")));
    // Hello World

?>
```

**[Documentation](https://wiki.php.net/rfc/pipe-operator-v3)**
## See Also

+ [PHP 8.5: Pipe operator (|>)](https://php.watch/versions/8.5/pipe-operator)
+ [PHP 8.5 Adds Pipe Operator: What it means](https://thephp.foundation/blog/2025/07/11/php-85-adds-pipe-operator/)

## Related

+ [Bitwise Operators](bitwise-operator.ini.html)
+ [STDOUT](stdout.ini.html)
