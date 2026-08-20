# Array With Curly Braces
Curly braces used to be a feature, used to access specific index in an array or in a string. They acted like the square braces. 

This features was deprecated in version 8.0.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-curly-braces.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-curly-braces.html","name":"Array With Curly Braces","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Curly braces used to be a feature, used to access specific index in an array or in a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Array With Curly Braces.html"]}],"keywords":["syntax","feature","removed","rfc"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bracket.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.array.php#language.types.array.syntax.accessing"},{"@type":"CreativeWork","name":"PHP RFC: Deprecate curly brace syntax for accessing array elements and string offsets","url":"https:\/\/wiki.php.net\/rfc\/deprecate_curly_braces_array_access"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array-curly-braces"}]}]}</script>
```php
<?php

    $array = ['a', 'b', 'c', 'd'];
    echo $array{2};    // c
    
    $string = 'abcd';
    echo $string{2};   // c

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.array.php#language.types.array.syntax.accessing)**
## See Also

+ [PHP RFC: Deprecate curly brace syntax for accessing array elements and string offsets](https://wiki.php.net/rfc/deprecate_curly_braces_array_access)

## Related

+ [Array, []](array.html)
+ [Bracket](bracket.html)
