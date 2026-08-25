# Literal Types
Literal types are types which not only check the type of a value but also the value itself. PHP has support for two literal types: false as of PHP 8.0.0, and true as of PHP 8.2.0.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/literal-types.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/literal-types.html","name":"Literal Types","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 23 Aug 2026 20:40:03 +0000","dateModified":"Sun, 23 Aug 2026 20:40:03 +0000","description":"Literal types are types which not only check the type of a value but also the value itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/literal-types.html"]}],"keywords":["type"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scalar-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/union-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative-types.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.string.php"},{"@type":"CreativeWork","name":"PHP RFC: Allow null and false as stand-alone types","url":"https:\/\/wiki.php.net\/rfc\/null-false-standalone-types"},{"@type":"CreativeWork","name":"PHP RFC: Add true type","url":"https:\/\/wiki.php.net\/rfc\/true-type"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"literal-types"}]}]}</script>
```php
<?php

    // bool is a type
    // false is a literal type : a bool, which value is false
    function foo(bool $a) : false {
        return false;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.string.php)**
## See Also

+ [PHP RFC: Allow null and false as stand-alone types](https://wiki.php.net/rfc/null-false-standalone-types)
+ [PHP RFC: Add true type](https://wiki.php.net/rfc/true-type)

## Related

+ [Scalar Types](scalar-type.html)
+ [Union Type](union-type.html)
+ [Relative Types](relative-types.html)
