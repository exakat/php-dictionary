# Emoji
Emojis are small digital images or icons used to express ideas, emotions, objects, or concepts in electronic communication. The word ``emoji`` comes from Japanese, combining ``e``, picture and ``moji``, character or letter.
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

## See Also

+ [Emoji list](https://en.wikipedia.org/wiki/Emoji)
+ [Where you can (and can't) use Emoji in PHP](https://shkspr.mobi/blog/2024/04/where-you-can-and-cant-use-emoji-in-php/)

Related : [Escape Sequences](Escape Sequences), [UTF-8](UTF-8), [Unicode](Unicode)
