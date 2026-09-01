# Whitespace
Whitespace refers to spaces, tabulations, and newline characters. Those characters are invisible on a white background, hence the name. 

Whitespace is used to format and organize the code, making it more readable. 

However, whitespace is generally not significant in terms of parsing; the PHP interpreter usually ignores whitespace. There are some rare situations where the whitespaces have a role: in heredoc syntax, and for formatting floats.

Whitespace is not a notion specific to PHP: other languages have them too. For example, ``trim()`` removes whitespace at the beginning and the end of a string value.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/whitespace.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/whitespace.html","name":"Whitespace","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 07:51:02 +0000","dateModified":"Tue, 01 Sep 2026 07:51:02 +0000","description":"Whitespace refers to spaces, tabulations, and newline characters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/whitespace.html"]}],"keywords":["character","_nocompileOK"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/token.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Whitespace_character"},{"@type":"CreativeWork","name":"php_strip_whitespace()","url":"https:\/\/www.php.net\/manual\/en\/function.php-strip-whitespace.php"},{"@type":"CreativeWork","name":"Be careful of whitespace in .php files","url":"https:\/\/avdi.codes\/be-careful-of-whitespace-in-php-files\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"whitespace"}]}]}</script>
```php
<?php

    $heredoc = <<<HEREDOC
        One tab shift
        Here
        HEREDOC;
    
    $x = 1 . 0; // This is 10
    
    $y = 1.0; // This is 1.0
    
    //$z = 1. 0; // This is a syntax error

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Whitespace_character)**
## See Also

+ [php_strip_whitespace()](https://www.php.net/manual/en/function.php-strip-whitespace.php)
+ [Be careful of whitespace in .php files](https://avdi.codes/be-careful-of-whitespace-in-php-files/)

## Related

+ [Token](token.html)
