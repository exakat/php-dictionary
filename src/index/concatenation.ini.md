# Concatenation .
Concatenation is the PHP feature that appends two strings together, to make a third, longer one.

Concatenation is also achieved with interpolation, inside a string; by calling echo, multiple times or with multiple arguments; by using the ``join()`` function.

Concatenation is done with the dot operator ``.``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/concatenation.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/concatenation.ini.html","name":"Concatenation .","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:33:37 +0000","dateModified":"Mon, 20 Jul 2026 08:33:37 +0000","description":"Concatenation is the PHP feature that appends two strings together, to make a third, longer one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Concatenation ..html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $a = "world";
    $b = "Hello ";
    echo $b . $a; 
    // displays Hello world

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.string.php)**
## See Also

+ [All String Concatenations in PHP](https://www.exakat.io/en/all-string-concatenations-in-php/)

## Related

+ [String](string.ini.html)
+ [Interpolation](interpolation.ini.html)
+ [Heredocs](heredoc.ini.html)
+ [\_\_toString() Method](__tostring.ini.html)
+ [implode()](implode.ini.html)
