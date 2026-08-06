# Nullable
Nullable is the name of the NULL value, when used as a type. Until PHP 8.0, it was marked as a question mark with types, and since PHP 8.0, it is also marked with its own name, as an union type.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/nullable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/nullable.html","name":"Nullable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Nullable is the name of the NULL value, when used as a type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Nullable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

function foo(?A $a) : null | B {
    // code
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.null.php)**
## See Also

+ [Dealing with null](https://front-line-php.com/dealing-with-null)

## Related

+ [Null](null.ini.html)
+ [Type System](type.ini.html)
+ [Contravariance](type-contravariance.ini.html)
+ [Intersection Type](intersection-type.ini.html)
+ [Property Type Declaration](type-declaration-property.ini.html)
