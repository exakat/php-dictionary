# Curly Brackets
Curly brackets have different usage:

+ Delimit a block of code 
+ Represents a variable delimiter inside string
+ It used to identify a single byte in a string, with an array syntax

They are also called curly braces.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/curly-bracket.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/curly-bracket.html","name":"Curly Brackets","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Curly brackets have different usage:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Curly Brackets.html"]}],"alternateName":["curly-braces"],"keywords":["delimiter","disambiguation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/block.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/square-bracket.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/token.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/balanced.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bracketless.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.string.php#language.types.string.parsing.complex"},{"@type":"CreativeWork","name":"PHP Curly Braces: How and When to Use it?","url":"https:\/\/schoolsofweb.com\/php-curly-braces-how-and-when-to-use-it\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"curly-bracket"}]}]}</script>
```php
<?php

    for($a = 1; $a < 10; ++$i) {
        // block
        
        // delimit a variable to avoid confusing it with $vars
        echo "{$var}s";
    }

    // old syntax: it used to be the second character in the string
    // This is a removed feature in PHP 8.0+
    // modern syntax : use angular brackets
    echo $string{1};

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.string.php#language.types.string.parsing.complex)**
## See Also

+ [PHP Curly Braces: How and When to Use it?](https://schoolsofweb.com/php-curly-braces-how-and-when-to-use-it/)

## Related

+ [Block](block.html)
+ [String](string.html)
+ [Square Brackets](square-bracket.html)
+ [Token](token.html)
+ [Balanced](balanced.html)
+ [Bracketless](bracketless.html)
