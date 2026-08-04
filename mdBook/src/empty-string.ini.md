# Empty String
The empty string is a string without any content. It may be build with single quotes, double quotes or the Heredoc and NowDoc syntaxes.

The empty string is the neutral element for concatenation: concatenating an empty string to another string does not change the latter.

The empty string may be used as error report: for example, ``substr()`` returns an empty string when the offset is beyong the string range.

The empty string often serves as a default value, for properties and variables.

Comparisons between ``''`` and other falsy values, such as 0 changed with PHP 8.0: it was true and became false.

The empty string is falsy: it is converted to the ``false`` boolean when implicit conversion is need, such as in a condition.
```php
<?php

    $emptyString1 = '';  // single quote
    $emptyString2 = "";  // double quote
    $emptyString3 = <<<STRING
STRING;
    $emptyString4 = <<<'STRING'
STRING;

?>
```

Related : [String](String), [Heredocs](Heredocs), [Nowdocs](Nowdocs), [Falsy](Falsy), [file_put_contents()](file_put_contents()), [str_contains()](str_contains()), [zero](zero)
