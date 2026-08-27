# Writable
Something is writable when a new value may be assigned to it, in the correct context. For example, a variable is writable, as it may be assigned a new value in the local context.

Variable, properties, given the correct visibility, static properties, array elements are writable. 

On the other hand, constants, method calls, function calls, or instantiation are not writable: they provide a value, but do not accept to be written to.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writable.html","name":"Writable","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 27 Aug 2026 05:42:51 +0000","dateModified":"Thu, 27 Aug 2026 05:42:51 +0000","description":"Something is writable when a new value may be assigned to it, in the correct context","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writable.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/visibility.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/container.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-element.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readable.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.is-writable.php"},{"@type":"CreativeWork","name":"PHP: Variables","url":"https:\/\/www.php.net\/manual\/en\/language.variables.php"},{"@type":"CreativeWork","name":"Assignment (computer science) - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Assignment_(computer_science)"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"writable"}]}]}</script>
```php
<?php

$x = 3;
$y = $x + 4;

// syntax error
// new x = 3;

?>
```

**[Documentation](https://www.php.net/manual/en/function.is-writable.php)**
## See Also

+ [PHP: Variables](https://www.php.net/manual/en/language.variables.php)
+ [Assignment (computer science) - Wikipedia](https://en.wikipedia.org/wiki/Assignment_(computer_science))

## Related

+ [Visibility](visibility.html)
+ [Variables](variable.html)
+ [Static Property](static-property.html)
+ [Properties](property.html)
+ [Container](container.html)
+ [Array Element](array-element.html)
+ [Readable](readable.html)
