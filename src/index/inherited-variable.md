# Inherited Variable
An inherited variable is a variable that was passed to a closure via the ``use`` clause in the closure definition.

The variable is said 'inherited', as it is extracted from the context at definition time, and not passed as parameter, at call time.

Contrary to parameters, inherited variable cannot be typed.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/inherited-variable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/inherited-variable.html","name":"Inherited Variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"An inherited variable is a variable that was passed to a closure via the ``use`` clause in the closure definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Inherited Variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$inherited = 'yes';

$closure = function() use ($inherited) {
    return $inherited;
};

foo($closure);

function foo($closure) {
    $inherited = 'no'; // This is local to the foo function
    
    echo $closure(); // display yes 
}

?>
```

**[Documentation](https://www.php.net/manual/en/functions.anonymous.php)**
## Related

+ [Closure](closure.ini.html)
+ [Parameter](parameter.ini.html)
