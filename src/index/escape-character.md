# Escape Character
Escape characters are special characters, that introduce a special meaning, for example when redacting an escape sequence.

Escape characters are often generating a special sequence to escape themselves and allow their literal meaning to be expressed.

In strings and HEREDOC, the escape character is the backslash: ``\``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape-character.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape-character.html","name":"Escape Character","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Escape characters are special characters, that introduce a special meaning, for example when redacting an escape sequence","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape-character.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/heredoc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/regex.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xss.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/back-slash.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape-data.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/slash.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/regexp.reference.escape.php"},{"@type":"CreativeWork","name":"String literals (MySQL)","url":"https:\/\/dev.mysql.com\/doc\/refman\/8.0\/en\/string-literals.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"escape-character"}]}]}</script>
```php
<?php

    echo '<a href="https://www.exakat.io/" />';
    
    // This prevents the variable $x to be interpolated
    echo <<<HEREDOC
    echo $x;
HEREDOC;

?>
```

**[Documentation](https://www.php.net/manual/en/regexp.reference.escape.php)**
## See Also

+ [String literals (MySQL)](https://dev.mysql.com/doc/refman/8.0/en/string-literals.html)

## Related

+ [Heredocs](heredoc.html)
+ [Injection](injection.html)
+ [Regular Expression](regex.html)
+ [Security](security.html)
+ [Structured Query Language (SQL)](sql.html)
+ [String](string.html)
+ [Cross Site Scripting (XSS)](xss.html)
+ [Backslash \\](back-slash.html)
+ [Escape Data](escape-data.html)
+ [Slash /](slash.html)
