# As
The as operator has several usage:

+ It is an optional keyword with the ``foreach()`` control structure, to access the key of the looped array
+ It is an optional keyword with the use expression, in trait import
+ It is an optional keyword with the use expression, in namespace import

The ``as`` operator often works to give a distinct name to an existing structure.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/as.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/as.html","name":"As","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The as operator has several usage:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/As.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"as"}]}]}</script>
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

+ [PHP as Keyword](https://zetcode.com/php/as-keyword/)

## Related

+ [foreach()](foreach.html)
+ [Use Alias](use-alias.html)
+ [Alias](alias.html)
