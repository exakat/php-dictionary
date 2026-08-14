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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/slash.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/slash.html","name":"Slash \/","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"\/ is character, used in various situations: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Slash \/.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"slash"}]}]}</script>
```php
<?php

    file_get_contents('/tmp/test.txt');

    echo 1234 / 2;

    // Just a comment

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Slash_(punctuation))**
## See Also

+ [Understanding the Backslash (\) and Forward Slash (/) in Programming](https://medium.com/@rishabhsharmaa1/understanding-the-backslash-and-forward-slash-in-programming-fb8b21457704)

## Related

+ [Backslash \\](back-slash.html)
+ [Escape Character](escape-character.html)
+ [Portability](portability.html)
+ [Pound #](pound.html)
