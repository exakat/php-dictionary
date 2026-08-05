# Single Quotes Strings
Single quoted strings are strings that include a literal value. 

This is an simpler version of the double-quoted strings. 

It is possible to include variables ``$var``, single-dimension arrays ``$array[1]`` or ``$array[index]``, and single-dereferencing object members ``$object->member``. More complex expressions require usage of curly braces ``{$}``, or the usage of the dot operator.

Double quoted strings use the anti-slash ``\`` to escape special characters, such as the anti-slash and the ``$`` sign.

Single quote is also a simple characters. It is used for string, and as a delimiter in many other languages, such as HTML, XML or SQL.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/single-quote.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/single-quote.ini.html","name":"Single Quotes Strings","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:06:31 +0000","dateModified":"Thu, 09 Jul 2026 09:06:31 +0000","description":"Single quoted strings are strings that include a literal value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Single Quotes Strings.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Double Quotes Strings](double-quote.ini.html)
+ [Heredocs](heredoc.ini.html)
+ [Interpolation](interpolation.ini.html)
+ [String](string.ini.html)
+ [Dollar $](dollar.ini.html)
+ [Balanced](balanced.ini.html)
+ [Oblic Quotes](oblic-quote.ini.html)
+ [Single](single.ini.html)
