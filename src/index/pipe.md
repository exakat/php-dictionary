# Pipe ``|``, The Logical Operator
The ``pipe operator`` is the ``|>`` operator. 

The pipe operator chains two callables from left to right: it takes the return value of the first callable and passes it to the right callable.

The pipe operator is equivalent to nested calls of functions, methods, closures. It also only applies to callables with one compulsory parameter, with return values, and without references.

It was added in version 8.5.

The pipe operator is a reference to the ``|`` pipe operator from the command line, which uses the result of the previous, left, command to feed the next, right, command. It should not be confused with the or bitwise operator ``|``, already available.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pipe.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pipe.html","name":"Pipe ``|``, The Logical Operator","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:59:50 +0000","dateModified":"Tue, 11 Aug 2026 20:59:50 +0000","description":"The pipe operator is the |> operator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Pipe ``|``, The Logical Operator.html"]}],"keywords":["operator","rfc"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bitwise-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stdout.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/wiki.php.net\/rfc\/pipe-operator-v3"},{"@type":"CreativeWork","name":"PHP 8.5: Pipe operator (|>)","url":"https:\/\/php.watch\/versions\/8.5\/pipe-operator"},{"@type":"CreativeWork","name":"PHP 8.5 Adds Pipe Operator: What it means","url":"https:\/\/thephp.foundation\/blog\/2025\/07\/11\/php-85-adds-pipe-operator\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pipe"}]}]}</script>
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

+ [Bitwise Operators](bitwise-operator.html)
+ [STDOUT](stdout.html)
