# Tabulation
A tabulation is a whitespace character, that often represents the equivalent of four spaces characters.

A tabulation is represented by the escape sequence ``\t``, in double quote strings. It is also the ASCII code 9.

Tabulations are important when formatting code, and are opposed to spaces. 

Tabulations are important for heredoc syntax, in particular in its relaxed syntax.

There are horizontal tabulations, which are the most commonly used, and vertical tabulation, with the ASCII code 11 and sequence ``\v``.
```php
<?php

    echo "\t";
    echo chr(9); // ASCII code 9

?>
```

## See Also

+ [Vertical Tab (\v) in PHP](https://mojoauth.com/special-characters/vertical-tab-v-in-php#understanding-the-usage-of-vertical-tab-v-in-php)
+ [Elastic tabstops - a better way to indent and align code](https://nick-gravgaard.com/elastic-tabstops/)

Related : [Space](Space), [Heredocs](Heredocs), [Indentation](Indentation), [Nowdocs](Nowdocs)
