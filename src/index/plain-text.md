# Plain Text
Plain Text refers to data that is human-readable, and not protected by any cryptography transformation. It may be read and understood as is.

Plain text is the result of a cracking process, or deciphering, where the original data is crypted, and that transformation was lifted.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/plain-text.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/plain-text.html","name":"Plain Text","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Plain Text refers to data that is human-readable, and not protected by any cryptography transformation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Plain Text.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crypt.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rich-text.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/markdown.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pdf.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/text.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Plain_text"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"plain-text"}]}]}</script>
```php
<?php

    $plainText = 'PHP Rocks!';
    
    $cryptedData = str_rot13($plainText); // cannot be read anymore
    
    $plainTextAgain = str_rot13($cryptedData);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Plain_text)**
## Related

+ [To Crypt](crypt.html)
+ [Rich Text](rich-text.html)
+ [Markdown](markdown.html)
+ [PDF](pdf.html)
+ [Text](text.html)
