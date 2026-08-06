# Leading Numeric String
A leading numeric string is subset of numeric string, where the first characters are numbers, or the occasional ``+`` or ``-``, and the rest of the string is non digits.

Leading numeric strings are used during conversion of strings into a string, although they are not used with the implicit integer conversion for arrays.

Leading numeric strings emit a warning when they drop the final characters.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/leading-numeric-string.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/leading-numeric-string.html","name":"Leading Numeric String","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:39:33 +0000","dateModified":"Mon, 20 Jul 2026 08:39:33 +0000","description":"A leading numeric string is subset of numeric string, where the first characters are numbers, or the occasional ``+`` or ``-``, and the rest of the string is non digits","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Leading Numeric String.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Numeric String](numeric-string.ini.html)
