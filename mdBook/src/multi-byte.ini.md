# Multi-byte
Multi-byte refers to string encoding where characters are coded over several bytes, rather than just one. 

In ASCII, the roman alphabet is coded over 1 character, making it mono-byte. But other languages, such as Chinese, needs for than one byte to represents all the ideograms. 

Unicode, for example, is multi-byte: 2 bytes. It may be encoded as UTF-8 on 2 bytes, UTF-16 on 4 bytes or UTF-32 on 8 bytes.

String functions are single-byte. When needed, extensions such as ``iconv``, ``intl`` and ``mbstring`` are able to manipulate multi-byte characters without breaking them.
```php
<?php

    print strlen('me'); // 2 chars
    
    print strlen('我'); // 3 chars
    
    print mb_strlen('我'); // 1 chars

?>
```

## See Also

+ [Character Encoding](https://medium.com/@gftea/character-encoding-ff9a14a10ec7)

Related : [Unicode](Unicode), [UTF-8](UTF-8), [American Standard Code for Information Interchange (ASCII)](American Standard Code for Information Interchange (ASCII)), [Byte](Byte), [Text](Text)
