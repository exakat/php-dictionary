# Escape Sequences
Escape sequences are sequences of characters with a special meaning. Most of the time, the literal value of the character displayed is its meaning, while, sometimes, there are other hidden meaning.

An escape sequence is dedicated to a technology, and they are rare the same between two technologies, or even, between two engines dedicated to that technology.

Here are some examples of escape sequences from PHP: 

+ ``\n``: new line
+ ``\t``: horizontal tabulation
+ ``"\""``: double quote, inside a double quoted-string
+ ``\'`` This is not an escape sequence: single quoted string do not recognize this
+ ``\u{01f418}``: a unicode codepoint, representing an elephpant
+ ``\200``: a character in octal notation
+ ``\x69``: a character in hexadecimal notation

Here are some examples of escape sequences from HTML: 

+ &acute;, a acute accent
+ &quote;, double quote
+ There are many more of them. See external links.

Escape sequences should not be confused with escape characters, though they are related: some escape sequences are introduced by an escape character. Others rely on a format.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/escape-sequence.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/escape-sequence.html","name":"Escape Sequences","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:08:29 +0000","dateModified":"Thu, 09 Jul 2026 09:08:29 +0000","description":"Escape sequences are sequences of characters with a special meaning","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Escape Sequences.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // \1 is an escape sequence that represents the first capturing parenthsis. 
    // It is a special meaning for REGEX.
    preg_match('/(.)\1/', $string);
    
    // Displays AA
    echo "A\101";

?>
```

**[Documentation](https://www.php.net/manual/en/regexp.reference.escape.php)**
## See Also

+ [String literals (MySQL)](https://dev.mysql.com/doc/refman/8.0/en/string-literals.html)
+ [Lexical Structure (PostgreSQL)](https://www.postgresql.org/docs/current/sql-syntax-lexical.html#:~:text=PostgreSQL%20also%20accepts%20%E2%80%9Cescape%E2%80%9D%20string,e.g.%2C%20E'foo'%20.)
+ [INI file](https://en.wikipedia.org/wiki/INI_file.)

## Related

+ [Double Quotes Strings](double-quote.ini.html)
+ [Codepoint](codepoint.ini.html)
+ [E](e.ini.html)
+ [Emoji](emoji.ini.html)
+ [Escape Data](escape-data.ini.html)
