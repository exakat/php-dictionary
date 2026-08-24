# Passing By Reference
When calling a method, or returning from it, data may be passed by value or by reference. 

By reference, a reference to the data is passed: any modification on that value inside the method will be reflected in the original value.

This is the alternative way of passing data to methods: the default way is to use by value, which copies the data. 

Passing by reference is the default behavior with object. Otherwise, it needs to be declared with the ``&`` operator, in the function signature.

Returned values are passed back to the calling context with the same rule as for parameters.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/by-reference.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/by-reference.html","name":"Passing By Reference","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 07:40:38 +0000","dateModified":"Mon, 24 Aug 2026 07:40:38 +0000","description":"When calling a method, or returning from it, data may be passed by value or by reference","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/by-reference.html"]}],"keywords":["feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/by-value.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.references.pass.php"},{"@type":"CreativeWork","name":"PHP References: How They Work, and When to Use Them","url":"https:\/\/www.elated.com\/php-references\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"by-reference"}]}]}</script>
```php
<?php

$a = 0;
foo($a);  // displays 1
print $a; // displays 1

function foo(&$a) {
    ++$a;
    echo $a;
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.references.pass.php)**
## See Also

+ [PHP References: How They Work, and When to Use Them](https://www.elated.com/php-references/)

## Related

+ [Passing By Value](by-value.html)
