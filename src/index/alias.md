# Alias
An alias is a distinct name for an existing named structure. It is a classic way to cope with possible naming conflict, and improve readability. 

For example, there are aliases in namespaces import, to disambiguate classes, traits, interfaces, enums, functions and constants from other namespaces. There is also the ``class_alias()`` function, which allows the application-wide creation of aliases. 

There are also aliases for methods, when importing them from a trait. 

References are also considered an alias, as they stand for a variable with another name.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/alias.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/alias.html","name":"Alias","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"An alias is a distinct name for an existing named structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Alias.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"alias"}]}]}</script>
```php
<?php

    use stdClass as StandardClass;
    
    foreach($map as $key => $value) {
        print "$key => $value\n";
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.assignment.php)**
## See Also

+ [Using namespaces: Aliasing/Importing](https://www.php.net/manual/en/language.namespaces.importing.php)

## Related

+ [Use Alias](use-alias.html)
+ [Alias Types](type-alias.html)
+ [Insteadof](insteadof.html)
+ [References](reference.html)
+ [class\_alias()](class_alias.html)
+ [As](as.html)
