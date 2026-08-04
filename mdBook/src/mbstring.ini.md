# Multibyte String
``mbstring`` provides function to process multibyte strings functions. Moreover, ``mbstring`` converts from and to various character encodings.
```php
<?php

    /* Convert EUC-JP to UTF-7 */
    $str = mb_convert_encoding($str, "UTF-7", "EUC-JP");

?>
```

Related : [Iconv](Iconv), [Encoding](Encoding), [Text Encoding](Text Encoding), [strtolower()](strtolower()), [strtoupper()](strtoupper())
