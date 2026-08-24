# Leading Numeric String
A leading numeric string is a subset of numeric strings, where the first characters are numbers, or the occasional ``+`` or ``-``, and the rest of the string is non-digits.

Leading numeric strings are used during conversion of strings into a number, although they are not used with the implicit integer conversion for arrays.

Leading numeric strings emit a warning when they drop the final characters.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/leading-numeric-string.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/leading-numeric-string.html","name":"Leading Numeric String","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 09:52:56 +0000","dateModified":"Sat, 15 Aug 2026 09:52:56 +0000","description":"A leading numeric string is a subset of numeric strings, where the first characters are numbers, or the occasional + or -, and the rest of the string is non-digits","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/leading-numeric-string.html"]}],"keywords":["string"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeric-string.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.numeric-strings.php"},{"@type":"CreativeWork","name":"Saner string to number comparisons RFC","url":"https:\/\/wiki.php.net\/rfc\/saner-numeric-strings"},{"@type":"CreativeWork","name":"Type Juggling","url":"https:\/\/www.php.net\/manual\/en\/language.types.type-juggling.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"leading-numeric-string"}]}]}</script>
```php
<?php

    echo '123bc' + 1;
    // Warning: A non-numeric value encountered 
    // 124
    
    print_r(['123bc' =>1]);
    /*
      Array
      (
          [123bc] => 1
      )
    */

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.numeric-strings.php)**
## See Also

+ [Saner string to number comparisons RFC](https://wiki.php.net/rfc/saner-numeric-strings)
+ [Type Juggling](https://www.php.net/manual/en/language.types.type-juggling.php)

## Related

+ [Numeric String](numeric-string.html)
