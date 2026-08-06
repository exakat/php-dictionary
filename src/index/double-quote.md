# Double Quotes Strings
Double quoted strings are strings, similar to the single quoted strings. They are also able to interpolate variables, properties and arrays, which are included at execution time. 

Double quoted strings do not interpolate constants. 

Double quoted strings support escape sequences, such as ``u{1F3c}`` or ``\n``.

This is an extended version of the single-quoted strings. They are similar to the heredoc syntax.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/double-quote.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/double-quote.html","name":"Double Quotes Strings","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:59:23 +0000","dateModified":"Thu, 09 Jul 2026 08:54:45 +0000","description":"Double quoted strings are strings, similar to the single quoted strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Double Quotes Strings.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // single quoted string : all literal values
    $name = 'Elephpant loves $signs.'; 
    
    // single quoted string : all literal values
    $signs = 'PHP';
    $name = 'Elephpant loves $signs.';  // Elephpant loves PHP
    
    echo "\u{01f418}"; // escape sequence of an elephant

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double)**
## See Also

+ [Single Quotes and Double Quotes : String Interpolation and Performance](https://dev.to/parzival_computer/single-quotes-and-double-quotes-string-interpolation-and-performance-32p2)

## Related

+ [Single Quotes Strings](single-quote.ini.html)
+ [Interpolation](interpolation.ini.html)
+ [String](string.ini.html)
+ [Heredocs](heredoc.ini.html)
+ [Escape Sequences](escape-sequence.ini.html)
+ [Balanced](balanced.ini.html)
+ [Double](double.ini.html)
+ [Oblic Quotes](oblic-quote.ini.html)
