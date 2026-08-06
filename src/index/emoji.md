# Emoji
Emojis are small digital images or icons used to express ideas, emotions, objects, or concepts in electronic communication. The word ``emoji`` comes from Japanese, combining ``e``, picture and ``moji``, character or letter.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/emoji.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/emoji.html","name":"Emoji","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Emojis are small digital images or icons used to express ideas, emotions, objects, or concepts in electronic communication","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Emoji.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Escape Sequences](escape-sequence.ini.html)
+ [UTF-8](utf8.ini.html)
+ [Unicode](unicode.ini.html)
