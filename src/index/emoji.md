# Emoji
Emojis are small digital images or icons used to express ideas, emotions, objects, or concepts in electronic communication. The word ``emoji`` comes from Japanese, combining ``e``, picture and ``moji``, character or letter.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/emoji.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/emoji.html","name":"Emoji","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Emojis are small digital images or icons used to express ideas, emotions, objects, or concepts in electronic communication","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/emoji.html"]}],"keywords":["character","name"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape-sequence.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/utf8.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unicode.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/unicode.org\/emoji\/charts\/full-emoji-list.html"},{"@type":"CreativeWork","name":"Emoji list","url":"https:\/\/en.wikipedia.org\/wiki\/Emoji"},{"@type":"CreativeWork","name":"Where you can (and can't) use Emoji in PHP","url":"https:\/\/shkspr.mobi\/blog\/2024\/04\/where-you-can-and-cant-use-emoji-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"emoji"}]}]}</script>
```php
<?php

    // Emoji, directly in the string, when the file is also supporting Unicode, like with UTF8
    echo "Hello 😊";
    
    // Emoji, with a PHP escape sequence
    echo "\u{1F60A}";
    
    // Emoji, with an HTML escape sequence
    echo "&#128522;";

?>
```

**[Documentation](https://unicode.org/emoji/charts/full-emoji-list.html)**
## See Also

+ [Emoji list](https://en.wikipedia.org/wiki/Emoji)
+ [Where you can (and can't) use Emoji in PHP](https://shkspr.mobi/blog/2024/04/where-you-can-and-cant-use-emoji-in-php/)

## Related

+ [Escape Sequences](escape-sequence.html)
+ [UTF-8](utf8.html)
+ [Unicode](unicode.html)
