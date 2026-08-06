# Slash /
``/`` is character, used in various situations: 

+ Decimal division: ``3 / 2``
+ Path separator: ``/user/php/document.txt``
+ Regex delimiter: ``/[abc]/i``, very frequent but not the only one
+ Regex escape char: ``/a\.b/i``
+ Double slash is the marker of a comment: ``// a comment till the end of the line``
+ With star, ``/*`` is a multi line comment: ``/* */``
+ With double star, ``/**`` is a phpdoc comment: ``/** */``
+ ``stripslashes()`` removes slashes used for escaping, in strings
+ ``addslashes()`` adds slashes for escaping, in strings
+ ``addcslashes()`` adds slashes for escaping arbitrary characters

The slash looks like the back-slash character ``\``, though they have very different use.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/slash.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/slash.html","name":"Slash \/","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 17:03:08 +0000","dateModified":"Mon, 20 Jul 2026 17:03:08 +0000","description":"``\/`` is character, used in various situations: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Slash \/.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    file_get_contents('/tmp/test.txt');

    echo 1234 / 2;

    // Just a comment

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Slash_(punctuation))**
## Related

+ [Backslash \\](back-slash.ini.html)
+ [Escape Character](escape-character.ini.html)
+ [Portability](portability.ini.html)
+ [Pound #](pound.ini.html)
