# Nullable
Nullable is the name of the NULL value, when used as a type. Until PHP 8.0, it was marked as a question mark with types, and since PHP 8.0, it is also marked with its own name, as an union type.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nullable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nullable.html","name":"Nullable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Nullable is the name of the NULL value, when used as a type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Nullable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Nullable"}]}]}</script>
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

+ [Null](null.html)
+ [Type System](type.html)
+ [Contravariance](type-contravariance.html)
+ [Intersection Type](intersection-type.html)
+ [Property Type Declaration](type-declaration-property.html)
