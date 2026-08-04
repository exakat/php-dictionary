# Reverse Regex
A reverse regex is a library that produces a string based on a regex. The resulting string satisfy the regex.

Such tool is good for testing, so as to find possible regexploits, or simple loopholes in the original regex.
```php
<?php

    preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
    print_r($matches);

?>
```

Related : [Regular Expression](Regular Expression)
