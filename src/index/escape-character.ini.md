# Escape Character
Escape characters are special characters, that introduce a special meaning, for example when redacting an escape sequence.

Escape characters are often generating a special sequence to escape themselves and allow their literal meaning to be expressed.

In strings and HEREDOC, the escape character is the backslash: ``\``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/escape-character.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/escape-character.ini.html","name":"Escape Character","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 18 Jun 2026 13:44:15 +0000","dateModified":"Thu, 18 Jun 2026 13:44:15 +0000","description":"Escape characters are special characters, that introduce a special meaning, for example when redacting an escape sequence","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Escape Character.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Heredocs](heredoc.ini.html)
+ [Injection](injection.ini.html)
+ [Regular Expression](regex.ini.html)
+ [Security](security.ini.html)
+ [Structured Query Language (SQL)](sql.ini.html)
+ [String](string.ini.html)
+ [Cross Site Scripting (XSS)](xss.ini.html)
+ [Backslash \\](back-slash.ini.html)
+ [Escape Data](escape-data.ini.html)
+ [Slash /](slash.ini.html)
