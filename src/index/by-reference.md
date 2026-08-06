# Passing By Reference
When calling a method, or returning from it, data may be passed by value or by reference. 

By reference, a reference to the the data is passed: any modification on that value inside the method will be reflected in the original value. 

This is the alternative way of passing data to methods: the default way is to use by value, which copies the data. 

Passing by reference is the default behavior with object. Otherwise, it needs to be declared with the ``&`` operator, in the function signature.

Returned value are passed back to the calling context with the same rule than for parameters.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/by-reference.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/by-reference.html","name":"Passing By Reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"When calling a method, or returning from it, data may be passed by value or by reference","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Passing By Reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$a = 0;
foo($a);  // displays 1
print $a; // displays 1

function foo(&$a) {
    ++$a;
    echo $a;
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.references.pass.php)**
## See Also

+ [PHP References: How They Work, and When to Use Them](https://www.elated.com/php-references/)

## Related

+ [Passing By Value](by-value.ini.html)
