# Perl Compatible Regular Expressions (PCRE)
PCRE is the library that supports regular expressions. It offers functions to search and replace in strings, and arrays of strings.

PHP exposes PCRE through the ``preg_*`` family of functions: ``preg_match()`` and ``preg_match_all()`` search for a pattern, ``preg_replace()`` and ``preg_replace_callback()`` substitute matches, ``preg_split()`` breaks a string apart using a pattern as the delimiter, and ``preg_quote()`` escapes special characters in user-supplied strings so they can be safely embedded in a pattern. Patterns are written as delimited strings, most commonly with ``/`` as the delimiter, and support modifiers such as ``i`` for case-insensitive matching or ``m`` for multiline mode.

PCRE patterns are considerably more expressive than the simpler POSIX regular expressions PHP used to support, via the now-removed ``ereg`` functions, offering features like lookahead and lookbehind assertions, named capture groups, and non-greedy quantifiers. Because complex patterns can be slow or, in pathological cases, exhibit catastrophic backtracking, patterns built from untrusted input deserve particular care.
```php
<?php

    preg_match('/PHP is (.*?)\./', 'PHP is fantastic.', $r);

    print $r[1]; // fantastic

?>
```

## See Also

+ [PCRE - Perl Compatible Regular Expressions](https://www.pcre.org/)

Related : [Regular Expression](Regular Expression)
