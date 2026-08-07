# Return Type
Return types are the types used for the return value of a method or function. 

They are the same as the argument types, with a few addition: 

+ ``void``, which means that no value is returned. No usage of return, or return with no explicit value
+ ``never``, which means that the function won't return: either it will kill the application, or it will throw an exception.

Return types are ignored when the method throws an exception. 

Return type are covariant: they get more or equally precise with each new child generation.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return-type.html","name":"Return Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Return types are the types used for the return value of a method or function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Return Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Return Type"}]}]}</script>
```php
<?php

function foo() : bool {
    if (rand(0,1)) {
        return true;
    } else {
        return false;
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/functions.returning-values.php)**
## See Also

+ [Return Types In PHP](https://dev.to/karleb/return-types-in-php-3fip)

## Related

+ [Type System](type.html)
+ [Return](return.html)
+ [Covariance](type-covariance.html)
+ [Generator](generator.html)
+ [Intersection Type](intersection-type.html)
+ [Property Type Declaration](type-declaration-property.html)
