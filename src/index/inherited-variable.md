# Inherited Variable
An inherited variable is a variable that was passed to a closure via the ``use`` clause in the closure definition.

The variable is said 'inherited', as it is extracted from the context at definition time, and not passed as parameter, at call time.

Contrary to parameters, inherited variable cannot be typed.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inherited-variable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inherited-variable.html","name":"Inherited Variable","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 07:46:08 +0000","dateModified":"Sun, 16 Aug 2026 07:46:08 +0000","description":"An inherited variable is a variable that was passed to a closure via the use clause in the closure definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inherited-variable.html"]}],"keywords":["variable"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parameter.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/functions.anonymous.php"},{"@type":"CreativeWork","name":"Closure (computer programming) (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Closure_(computer_programming)"},{"@type":"CreativeWork","name":"Arrow Functions","url":"https:\/\/www.php.net\/manual\/en\/functions.arrow.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"inherited-variable"}]}]}</script>
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
## See Also

+ [Closure (computer programming) (Wikipedia)](https://en.wikipedia.org/wiki/Closure_(computer_programming))
+ [Arrow Functions](https://www.php.net/manual/en/functions.arrow.php)

## Related

+ [Closure](closure.html)
+ [Parameter](parameter.html)
