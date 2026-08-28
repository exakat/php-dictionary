# Precedence
Precedence organizes the way operators are executed, when they are mixed in the same expression.

For example, ``1 + 2 * 3`` will produce ``7``, since ``*`` has a higher precedence than ``+``. 

Every operator has a precedence, and when they have the same precedence, the rightmost one yield to the leftmost one.

Precedence offers some reading surprises to human readers. For example, ``! $b instanceof \X`` really applies ``instanceof`` first, and ``&&`` has a higher priority than ``and``, even though they perform the same function.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/precedence.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/precedence.html","name":"Precedence","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Precedence organizes the way operators are executed, when they are mixed in the same expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/precedence.html"]}],"keywords":["operator"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/operator.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.precedence.php"},{"@type":"CreativeWork","name":"Understanding PHP Operators of Logic, or || and && and ! a lot more","url":"https:\/\/wpshout.com\/php-logic-operators\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"precedence"}]}]}</script>
```php
<?php

var_dump(!$b instanceof \X);
var_dump($a = 1 and 2);

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.precedence.php)**
## See Also

+ [Understanding PHP Operators of Logic, or || and && and ! a lot more](https://wpshout.com/php-logic-operators/)

## Related

+ [Operators](operator.html)
