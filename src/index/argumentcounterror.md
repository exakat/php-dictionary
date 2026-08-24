# ArgumentCountError
``ArgumentCountError`` is thrown when too few arguments are passed to a user-defined or PHP native function or method. This is an error, not an exception.

No exception is raised for extra parameters, as those may still be processed by the method itself.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/argumentcounterror.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/argumentcounterror.html","name":"ArgumentCountError","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Aug 2026 08:15:04 +0000","dateModified":"Thu, 20 Aug 2026 08:15:04 +0000","description":"ArgumentCountError is thrown when too few arguments are passed to a user-defined or PHP native function or method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/argumentcounterror.html"]}],"keywords":["error","exception","native error"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throw.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/try-catch.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.argumentcounterror.php"},{"@type":"CreativeWork","name":"Tutorial: Solve PHP uncaught ArgumentCountError: Too few arguments to function","url":"https:\/\/www.bestwebframeworks.com\/tutorials\/php\/153\/solve-php-uncaught-argumentcounterror-too-few-arguments-to-function\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"argumentcounterror"}]}]}</script>
```php
<?php

    function foo($a) {}
    
    // No error is raised here
    foo(1,2);
    
    // ArgumentCountError is catchable
    try {
        foo();
    } catch (ArgumentCountError) {
        print 'No enough parameters passed.';
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.argumentcounterror.php)**
## See Also

+ [Tutorial: Solve PHP uncaught ArgumentCountError: Too few arguments to function](https://www.bestwebframeworks.com/tutorials/php/153/solve-php-uncaught-argumentcounterror-too-few-arguments-to-function/)

## Related

+ [throw](throw.html)
+ [Try-catch](try-catch.html)
