# Character
A character is a unit of information, that represents represents letters, punctuation signs, ideogram, etc. 

Characters may be represented as a byte, on 8 bits, but also on longer sequences, with UTF-8 or UTF-16. By default, PHP uses 8 bits, and there are several extensions to manipulate the encodings.

There is no dedicated type for characters: a string of one element is used for that purpose. There are some special constraints related to manipulating characters inside a string: it is possible to access individual character in a string, with the array syntax, both to read or modify them.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/character.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/character.html","name":"Character","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 26 Aug 2026 04:23:49 +0000","dateModified":"Wed, 26 Aug 2026 04:23:49 +0000","description":"A character is a unit of information, that represents represents letters, punctuation signs, ideogram, etc","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/character.html"]}],"keywords":["encoding"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/encoding.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/utf-8.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ascii.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/byte.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/encoding-text.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/null-byte.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.string.php"},{"@type":"CreativeWork","name":"PHP: mbstring","url":"https:\/\/www.php.net\/manual\/en\/book.mbstring.php"},{"@type":"CreativeWork","name":"Character encoding","url":"https:\/\/en.wikipedia.org\/wiki\/Character_encoding"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"character"}]}]}</script>
```php
<?php

    $string = 'abc';
    
    echo $string[1]; // display b
    
    var_dump($string[1]);
    //string(1) b

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.string.php)**
## See Also

+ [PHP: mbstring](https://www.php.net/manual/en/book.mbstring.php)
+ [Character encoding](https://en.wikipedia.org/wiki/Character_encoding)

## Related

+ [Encoding](encoding.html)
+ [UTF-8](utf-8.html)
+ [American Standard Code for Information Interchange (ASCII)](ascii.html)
+ [Byte](byte.html)
+ [Text Encoding](encoding-text.html)
+ [Null Byte](null-byte.html)
