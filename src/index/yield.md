# Yield
In its simplest form, a yield statement looks much like a return statement, except that instead of stopping execution of the function and returning, yield instead provides a value to the code looping over the generator and pauses execution of the generator function. 
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/yield.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/yield.html","name":"Yield","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"In its simplest form, a yield statement looks much like a return statement, except that instead of stopping execution of the function and returning, yield instead provides a value to the code looping over the generator and pauses execution of the generator function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Yield.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function gen_one_to_three() {
        for ($i = 1; $i <= 3; $i++) {
            // Note that $i is preserved between yields.
            yield $i;
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.generators.syntax.php#control-structures.yield)**
## See Also

+ [Introduction to PHP yield](https://www.educba.com/php-yield/)

## Related

+ [yield from Keyword](yield-from.ini.html)
+ [Generator](generator.ini.html)
+ [Jump](jump.ini.html)
+ [Double Arrow](double-arrow.ini.html)
+ [iterator\_to\_array()](iterator_to_array.ini.html)
+ [range()](range.ini.html)
+ [Stealth Generator](stealth-generator.ini.html)
