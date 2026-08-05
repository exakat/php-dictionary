# Spaceship Operator
Spaceship operator is an operator which reports if a value is larger, equal or smaller than another value. It return 1, 0 or -1 in each case, respectively. 

The spaceship operator may be replace by a ``-`` minus sign, if the compared values are correct. It may also be replace with ``!=``, since ``-1`` and ``1`` are both cast to ``true``. 

The spaceship operator got its name from its resemblance to an flying saucer. Battleship operator, or death star operator do not exist.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/spaceship.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/spaceship.ini.html","name":"Spaceship Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Spaceship operator is an operator which reports if a value is larger, equal or smaller than another value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Spaceship Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $a = 1;
    $b = 3;
    
    print $a <=> $b;

?>
```

**[Documentation](https://www.php.net/manual/en/migration70.new-features.php#migration70.new-features.spaceship-op)**
## See Also

+ [Weird operators in PHP](https://www.exakat.io/en/weird-operators-in-php/)
+ [What Is the PHP Spaceship Operator?](https://www.designcise.com/web/tutorial/what-is-the-php-spaceship-operator)

## Related

+ [Comparison](comparison-operator.ini.html)
+ [Comparison](comparison.ini.html)
+ [Minus One -1](minus-one.ini.html)
