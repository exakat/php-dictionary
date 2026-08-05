# Plain Text
Plain Text refers to data that is human-readable, and not protected by any cryptography transformation. It may be read and understood as is.

Plain text is the result of a cracking process, or deciphering, where the original data is crypted, and that transformation was lifted.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/plain-text.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/plain-text.ini.html","name":"Plain Text","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Plain Text refers to data that is human-readable, and not protected by any cryptography transformation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Plain Text.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $plainText = 'PHP Rocks!';
    
    $cryptedData = str_rot13($plainText); // cannot be read anymore
    
    $plainTextAgain = str_rot13($cryptedData);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Plain_text)**
## Related

+ [To Crypt](crypt.ini.html)
+ [Rich Text](rich-text.ini.html)
+ [Markdown](markdown.ini.html)
+ [PDF](pdf.ini.html)
+ [Text](text.ini.html)
