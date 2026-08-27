# Interpolation
Interpolation is the PHP feature that automatically replaces variables and public properties by their value in double-quoted strings and Heredoc syntax.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interpolation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interpolation.html","name":"Interpolation","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Interpolation is the PHP feature that automatically replaces variables and public properties by their value in double-quoted strings and Heredoc syntax","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interpolation.html"]}],"keywords":["string","feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concatenation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/heredoc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dollar.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/double-quote.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/single-quote.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.string.php#language.types.string.syntax.double"},{"@type":"CreativeWork","name":"String Interpolation in PHP","url":"https:\/\/jeffreyeverhart.com\/2019\/11\/21\/string-interpolation-in-php\/"},{"@type":"CreativeWork","name":"Interpolating Strings in PHP","url":"https:\/\/reqbin.com\/code\/php\/08tym4bq\/php-string-interpolation-example"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"interpolation"}]}]}</script>
```php
<?php

    $string = "world";
    
    echo "Hello $string"; 
    // displays Hello world

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double)**
## See Also

+ [String Interpolation in PHP](https://jeffreyeverhart.com/2019/11/21/string-interpolation-in-php/)
+ [Interpolating Strings in PHP](https://reqbin.com/code/php/08tym4bq/php-string-interpolation-example)

## Related

+ [String](string.html)
+ [Concatenation \\.](concatenation.html)
+ [Heredocs](heredoc.html)
+ [Variables](variable.html)
+ [Dollar $](dollar.html)
+ [Double Quotes Strings](double-quote.html)
+ [Single Quotes Strings](single-quote.html)
