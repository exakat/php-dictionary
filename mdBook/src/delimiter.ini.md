# Delimiter
Delimiters are specific characters that starts and ends a specific area. They are used in structured dataset, to identify a special value among others.

Delimiters are a kind of separators: while separators are the boundary between two distinct values, delimiters frame them with a beginning and an end.

Delimiters may be the same at the beginning and the end. For examples, single or double quotes for strings. Or the classic ``/`` for regexes, which may actually be any non-alpha-numeric character.

Delimiters may be the different at the beginning and the end. For examples, parenthesis ``()`` and curly braces ``{}``, or the PHP tags, ``<?php  ?>``. 

Inside the structure, the delimiters are forbidden, to avoid confusing them with the actual limits of the data. If the delimiter characters are needed inside the structure, they may be either escaped with another character, such as backslash inside strings ``'\''``; the delimiters may be replaced by another delimiter, such as in regex where a lot of delimiters are possible; they may also be deactivates with options, such as ``\Q`` and ``\E`` in regexes.
```php
<?php

    // delimiters for strings
    echo '';
    
    // special options in regexes
    print preg_match('/^\Q'.$regex.'\E$/i', 'tests') ? 'match' : 'nomatch';

?>
```

Related : [Separator](Separator)
