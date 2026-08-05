# Array With Curly Braces
Curly braces used to be a feature, used to access specific index in an array or in a string. They acted like the square braces. 

This features was deprecated in version 8.0.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array-curly-braces.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array-curly-braces.ini.html","name":"Array With Curly Braces","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Curly braces used to be a feature, used to access specific index in an array or in a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Array With Curly Braces.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Array, []](array.ini.html)
+ [Bracket](bracket.ini.html)
