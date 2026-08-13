# Single Quotes Strings
Single quoted strings are strings that include a literal value. 

This is an simpler version of the double-quoted strings. 

It is possible to include variables ``$var``, single-dimension arrays ``$array[1]`` or ``$array[index]``, and single-dereferencing object members ``$object->member``. More complex expressions require usage of curly braces ``{$}``, or the usage of the dot operator.

Double quoted strings use the anti-slash ``\`` to escape special characters, such as the anti-slash and the ``$`` sign.

Single quote is also a simple characters. It is used for string, and as a delimiter in many other languages, such as HTML, XML or SQL.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/single-quote.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/single-quote.html","name":"Single Quotes Strings","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Single quoted strings are strings that include a literal value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Single Quotes Strings.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"single-quote"}]}]}</script>
```php
<?php

    // single quoted string : all literal values
    $name = 'elephpant loves $signs.'; 
    
    // double quoted string : variable value will be replaced at execution time.
    $greeting = "Hello! $name"; 
    
    // identical to
    $greeting = 'Hello! '.$name; 

?>
```

**[Documentation](https://www.php.net/manual/en/ini.core.php#ini.disable-functions)**
## See Also

+ [What is the difference between single-quoted and double-quoted strings in PHP?](https://www.geeksforgeeks.org/php/what-is-the-difference-between-single-quoted-and-double-quoted-strings-in-php/)

## Related

+ [Double Quotes Strings](double-quote.html)
+ [Heredocs](heredoc.html)
+ [Interpolation](interpolation.html)
+ [String](string.html)
+ [Dollar $](dollar.html)
+ [Balanced](balanced.html)
+ [Oblic Quotes](oblic-quote.html)
+ [Single](single.html)
