# Heredocs
Heredoc is a string syntax, similar to nowdoc, with internal variable interpolation. They behave like double quoted strings.

The Heredocs syntax uses an arbitrary delimiter. The same delimiter will mark the end of the string.

Heredocs are convenient for large amount of text, that has to be hardcoded. Smaller string will be better suited with double quotes, while even longer text should be processed with a templating system.

It is possible to indent the text in a nowdocs string: to avoid this indentation to be passed at execution time, the final delimiter may be indented too. Its indentation will be removed from the parsed text.
```php
<?php

$heredoc = <<<DELIM
This is a long text.

$variable will not be replaced, and the text stays intact.

DELIM;

$heredoc = <<<DELIM
    This is an indented text.
    DELIM;

?>
```

## See Also

+ [PHP Heredoc](https://www.phptutorial.net/php-tutorial/php-heredoc/)

Related : [Nowdocs](Nowdocs), [String](String), [Concatenation \.](Concatenation \.), [Indentation](Indentation), [Interpolation](Interpolation), [Single Quotes Strings](Single Quotes Strings), [Tabulation](Tabulation), [Space](Space), [Double Quotes Strings](Double Quotes Strings), [Empty String](Empty String), [Escape Character](Escape Character)
