# Character
A character is a unit of information, that represents represents letters, punctuation signs, ideogram, etc. 

Characters may be represented as a byte, on 8 bits, but also on longer sequences, with UTF-8 or UTF-16. By default, PHP uses 8 bits, and there are several extensions to manipulate the encodings.

There is no dedicated type for characters: a string of one element is used for that purpose. There are some special constraints related to manipulating characters inside a string: it is possible to access individual character in a string, with the array syntax, both to read or modify them.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/character.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/character.html","name":"Character","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A character is a unit of information, that represents represents letters, punctuation signs, ideogram, etc","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Character.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"character"}]}]}</script>
```php
<?php

    $string = 'abc';
    
    echo $string[1]; // display b
    
    var_dump($string[1]);
    //string(1) b

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.string.php)**
## Related

+ [Encoding](encoding.html)
+ [UTF-8](utf-8.html)
+ [American Standard Code for Information Interchange (ASCII)](ascii.html)
+ [Byte](byte.html)
+ [Text Encoding](encoding-text.html)
+ [Null Byte](null-byte.html)
