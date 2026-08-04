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
```php
<?php

    file_get_contents('/tmp/test.txt');

    echo 1234 / 2;

    // Just a comment

?>
```

Related : [Backslash \](Backslash \), [Escape Character](Escape Character), [Portability](Portability), [Pound #](Pound #)
