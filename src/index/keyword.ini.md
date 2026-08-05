# Keyword
PHP has a list of keywords, which are also called reserved names. Those are names used with some functions or operators. 

Keywords are not allowed in function, constant, class, interface, enum and trait names. They are allowed in method, properties, variables and class constant names.

While legit, it is usually recommended to avoid using PHP keywords as identifiers, so as to prevent confusion.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/keyword.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/keyword.ini.html","name":"Keyword","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"PHP has a list of keywords, which are also called reserved names","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Keyword.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class MyNamespace {
        function array() {
            return array();
        }
    }
    
    print_r((new myNamespace)->array());
    
    class X {
        const array ARRAY = array(); // possible confusion here
    }

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.keywords.php)**
## See Also

+ [List of other reserved words](https://www.php.net/manual/en/reserved.other-reserved-words.php)

## Related

+ [Reserved Names](reserved-name.ini.html)
+ [And Operator](and.ini.html)
+ [Self](self.ini.html)
