# UTF-8
UTF-8 is a character encoding standard. It is defined by the Unicode Standard. The acronym stands for ``Unicode Transformation Format – 8-bit``. 

PHP handles the UTF-8 encoding natively: at input time, with the ``input_encoding`` directive; at output time, with the ``output_encoding`` and internally with the ``internal_encoding``. All of them can use independent values, yet they all default to ``default_charset``, which uses ``UTF-8`` as default value.

For other manipulations, such as converting sources such as file or databases content to and from UTF-8, PHP relies on ``mbstring`` and ``iconv`` libraries.

Special functions, such as ``utf8_encode()`` and ``utf8_decode()`` are deprecated since PHP 8.2, and should be be used.

## See Also

+ [The Fun that is UTF-8 Support in PHP](https://blog.martinfjordvald.com/the-fun-that-is-utf-8-support-in-php/)
+ [UTF-8, PHP and MySQL](https://akrabat.com/utf8-php-and-mysql//)

Related : [Encoding](Encoding), [Latin1](Latin1), [Character](Character), [default_charset](default_charset)
