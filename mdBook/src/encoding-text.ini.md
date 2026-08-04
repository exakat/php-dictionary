# Text Encoding
Encoding is the way characters are organized to hold a meaning while being transmitted, stored or manipulated. 

Encoding applies to PHP scripts, which should be UTF-8 encoded, although it might support other formats.

Encoding applies to incoming and outgoing data.

Encoding operations are provided with ``ext/mbstring``, ``ext/iconv`` and ``ext/intl`` extensions. 

Encoding is also used for code: the source is encoded when it is transformed in an unreadable yet still executable form.

Encoding is also called a character set.
```php
<?php
$text = 'This is the Euro symbol €.';

echo 'Original : ', $text, PHP_EOL;
echo 'TRANSLIT : ', iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $text), PHP_EOL;
echo 'IGNORE   : ', iconv('UTF-8', 'ISO-8859-1//IGNORE', $text), PHP_EOL;
echo 'Plain    : ', iconv('UTF-8', 'ISO-8859-1', $text), PHP_EOL;

?>
```

## See Also

+ [Useful Encoding and decoding Functions You Need to Know](https://medium.com/canopas/php-useful-encoding-and-decoding-functions-you-need-to-know-210e523a065f)
+ [Character Encoding for PHP Developers: Unicode, UTF-8 and ASCII](https://www.honeybadger.io/blog/php-character-encoding-unicode-utf8-ascii/)

Related : [Multibyte String](Multibyte String), [Iconv](Iconv), [Internationalization Functions](Internationalization Functions), [Character](Character), [HTML Entity](HTML Entity)
