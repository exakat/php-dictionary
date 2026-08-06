# Alias
An alias is a distinct name for an existing named structure. It is a classic way to cope with possible naming conflict, and improve readability. 

For example, there are aliases in namespaces import, to disambiguate classes, traits, interfaces, enums, functions and constants from other namespaces. There is also the ``class_alias()`` function, which allows the application-wide creation of aliases. 

There are also aliases for methods, when importing them from a trait. 

References are also considered an alias, as they stand for a variable with another name.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/alias.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/alias.html","name":"Alias","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"An alias is a distinct name for an existing named structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Alias.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Use Alias](use-alias.ini.html)
+ [Alias Types](type-alias.ini.html)
+ [Insteadof](insteadof.ini.html)
+ [References](reference.ini.html)
+ [class\_alias()](class_alias.ini.html)
+ [As](as.ini.html)
