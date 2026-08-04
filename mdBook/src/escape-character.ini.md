# Escape Character
Escape characters are special characters, that introduce a special meaning, for example when redacting an escape sequence.

Escape characters are often generating a special sequence to escape themselves and allow their literal meaning to be expressed.

In strings and HEREDOC, the escape character is the backslash: ``\``.
```php
<?php

    echo '<a href="https://www.exakat.io/" />';
    
    // This prevents the variable $x to be interpolated
    echo <<<HEREDOC
    echo $x;
HEREDOC;

?>
```

## See Also

+ [String literals (MySQL)](https://dev.mysql.com/doc/refman/8.0/en/string-literals.html)

Related : [Heredocs](Heredocs), [Injection](Injection), [Regular Expression](Regular Expression), [Security](Security), [Structured Query Language (SQL)](Structured Query Language (SQL)), [String](String), [Cross Site Scripting (XSS)](Cross Site Scripting (XSS)), [Backslash \](Backslash \), [Escape Data](Escape Data), [Slash /](Slash /)
