# Spaceship Operator
Spaceship operator is an operator which reports if a value is larger, equal or smaller than another value. It returns 1, 0 or -1 in each case, respectively.

The spaceship operator may be replaced by a ``-`` minus sign, if the compared values are correct. It may also be replaced with ``!=``, since ``-1`` and ``1`` are both cast to ``true``.

The spaceship operator got its name from its resemblance to a flying saucer. Battleship operator, or death star operator do not exist.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spaceship.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spaceship.html","name":"Spaceship Operator","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:48:05 +0000","dateModified":"Wed, 19 Aug 2026 06:48:05 +0000","description":"Spaceship operator is an operator which reports if a value is larger, equal or smaller than another value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spaceship.html"]}],"keywords":["operator"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/comparison-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/comparison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/minus-one.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/migration70.new-features.php#migration70.new-features.spaceship-op"},{"@type":"CreativeWork","name":"Weird operators in PHP","url":"https:\/\/www.exakat.io\/en\/weird-operators-in-php\/"},{"@type":"CreativeWork","name":"What Is the PHP Spaceship Operator?","url":"https:\/\/www.designcise.com\/web\/tutorial\/what-is-the-php-spaceship-operator"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"spaceship"}]}]}</script>
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

+ [Comparison](comparison-operator.html)
+ [Comparison](comparison.html)
+ [Minus One -1](minus-one.html)
