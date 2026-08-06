# As
The as operator has several usage:

+ It is an optional keyword with the ``foreach()`` control structure, to access the key of the looped array
+ It is an optional keyword with the use expression, in trait import
+ It is an optional keyword with the use expression, in namespace import

The ``as`` operator often works to give a distinct name to an existing structure.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/as.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/as.html","name":"As","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 10:52:49 +0000","dateModified":"Tue, 04 Aug 2026 10:52:49 +0000","description":"The as operator has several usage:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/As.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [foreach()](foreach.ini.html)
+ [Use Alias](use-alias.ini.html)
+ [Alias](alias.ini.html)
