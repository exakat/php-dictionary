# Double Quotes Strings
Double quoted strings are strings, similar to the single quoted strings. They are also able to interpolate variables, properties and arrays, which are included at execution time. 

Double quoted strings do not interpolate constants. 

Double quoted strings support escape sequences, such as ``u{1F3c}`` or ``\n``.

This is an extended version of the single-quoted strings. They are similar to the heredoc syntax.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/double-quote.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/double-quote.html","name":"Double Quotes Strings","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Double quoted strings are strings, similar to the single quoted strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Double Quotes Strings.html"]}],"keywords":["delimiter","syntax","animal"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/single-quote.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interpolation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/heredoc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape-sequence.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/balanced.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/double.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/oblic-quote.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.string.php#language.types.string.syntax.double"},{"@type":"CreativeWork","name":"Single Quotes and Double Quotes : String Interpolation and Performance","url":"https:\/\/dev.to\/parzival_computer\/single-quotes-and-double-quotes-string-interpolation-and-performance-32p2"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"double-quote"}]}]}</script>
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

+ [Single Quotes Strings](single-quote.html)
+ [Interpolation](interpolation.html)
+ [String](string.html)
+ [Heredocs](heredoc.html)
+ [Escape Sequences](escape-sequence.html)
+ [Balanced](balanced.html)
+ [Double](double.html)
+ [Oblic Quotes](oblic-quote.html)
