# Plain Text
Plain Text refers to data that is human-readable, and not protected by any cryptography transformation. It may be read and understood as is.

Plain text is the result of a cracking process, or deciphering, where the original data is crypted, and that transformation was lifted.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/plain-text.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/plain-text.html","name":"Plain Text","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 07:53:07 +0000","dateModified":"Wed, 19 Aug 2026 07:53:07 +0000","description":"Plain Text refers to data that is human-readable, and not protected by any cryptography transformation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/plain-text.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crypt.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rich-text.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/markdown.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pdf.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/text.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Plain_text"},{"@type":"CreativeWork","name":"RFC 2046: MIME Part Two, Media Types (text\/plain)","url":"https:\/\/www.rfc-editor.org\/rfc\/rfc2046.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"plain-text"}]}]}</script>
```php
<?php

    $plainText = 'PHP Rocks!';
    
    $cryptedData = str_rot13($plainText); // cannot be read anymore
    
    $plainTextAgain = str_rot13($cryptedData);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Plain_text)**
## See Also

+ [RFC 2046: MIME Part Two, Media Types (text/plain)](https://www.rfc-editor.org/rfc/rfc2046.html)

## Related

+ [To Crypt](crypt.html)
+ [Rich Text](rich-text.html)
+ [Markdown](markdown.html)
+ [PDF](pdf.html)
+ [Text](text.html)
