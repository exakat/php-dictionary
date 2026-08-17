# Escape Sequences
Escape sequences are sequences of characters with a special meaning. Most of the time, the literal value of the character displayed is its meaning, while, sometimes, there are other hidden meanings.

Escape sequences are dedicated to a technology, and they are rarely the same between two technologies, or even, between two engines dedicated to that technology.

Here are some examples of escape sequences from PHP: 

+ ``\n``: new line
+ ``\t``: horizontal tabulation
+ ``"\""``: double quote, inside a double quoted-string
+ ``\'`` This is not an escape sequence: single-quoted strings do not recognize this
+ ``\u{01f418}``: a unicode codepoint, representing an elephpant
+ ``\200``: a character in octal notation
+ ``\x69``: a character in hexadecimal notation

Here are some examples of escape sequences from HTML: 

+ &acute;, an acute accent
+ &quot;, double quote
+ There are many more of them. See external links.

Escape sequences should not be confused with escape characters, though they are related: some escape sequences are introduced by an escape character. Others rely on a format.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape-sequence.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape-sequence.html","name":"Escape Sequences","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:50:34 +0000","dateModified":"Tue, 11 Aug 2026 20:50:34 +0000","description":"Escape sequences are sequences of characters with a special meaning","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Escape Sequences.html"]}],"alternateName":["string-sequence"],"keywords":["syntax","concept","character","animal"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/double-quote.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/codepoint.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/e.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/emoji.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape-data.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/regexp.reference.escape.php"},{"@type":"CreativeWork","name":"String literals (MySQL)","url":"https:\/\/dev.mysql.com\/doc\/refman\/8.0\/en\/string-literals.html"},{"@type":"CreativeWork","name":"Lexical Structure (PostgreSQL)","url":"https:\/\/www.postgresql.org\/docs\/current\/sql-syntax-lexical.html#:~:text=PostgreSQL%20also%20accepts%20%E2%80%9Cescape%E2%80%9D%20string,e.g.%2C%20E'foo'%20."},{"@type":"CreativeWork","name":"INI file","url":"https:\/\/en.wikipedia.org\/wiki\/INI_file."}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"escape-sequence"}]}]}</script>
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

+ [Double Quotes Strings](double-quote.html)
+ [Codepoint](codepoint.html)
+ [E](e.html)
+ [Emoji](emoji.html)
+ [Escape Data](escape-data.html)
