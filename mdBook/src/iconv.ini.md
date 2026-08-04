# Iconv
``iconv`` is a PHP extension that stands for "Internationalized CONVersion". It provides functionality to convert strings between different character encodings, making it useful for dealing with multilingual and internationalized applications.

The ``iconv`` extension allows to convert strings from one character encoding to another, and it also supports transliteration and character set detection. This is particularly important when dealing with data that may come from different sources with various character encodings.

``iconv`` is both a PHP function, a PHP extension and an independent library for character encoding conversion, also known as ``libiconv``.
```php
<?php

  echo 'TRANSLIT : ', iconv("UTF-8", "ISO-8859-1//TRANSLIT", $text), PHP_EOL;
  // TRANSLIT : This is the Euro symbol 'EUR'.

?>
```

## See Also

+ [libiconv](http://www.gnu.org/software/libiconv/)
+ [How to use Iconv function in PHP](https://topic.alibabacloud.com/a/how-to-use-font-colorrediconvfont-function-in-php_4_86_30934271.html)

Related : [Multibyte String](Multibyte String), [Text Encoding](Text Encoding), [Encoding](Encoding)
