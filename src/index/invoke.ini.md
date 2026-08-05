# Invoke
It is possible to invoke an object, that means calling a function built with the object as the function name. 

Invocation is based on the ``__invoke`` magic method.

Being invokable means that an object may be used as a function name.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/invoke.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/invoke.ini.html","name":"Invoke","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"It is possible to invoke an object, that means calling a function built with the object as the function name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Invoke.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class x {
    function __invoke($a) {
        echo 'I am '.$a;
    }
}

$x = new x;
$x('x'); // I am x

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.magic.php#object.invoke)**
## See Also

+ [The Magical invoke Method in PHP. Your Clean Code Ally](https://www.juannicolas.eu/the-invoke-method-in-php/)

## Related

+ [Magic Methods](magic-method.ini.html)
+ [\_\_invoke() Method](__invoke.ini.html)
