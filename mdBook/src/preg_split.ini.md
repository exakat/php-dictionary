# preg_split()
``preg_split()`` splits strings with a regular expression. 

That function allows for complex splitting of strings, including capturing the separators. For simpler splits where the separator is a static value, use ``explode()``.

```php
<?php

$sentence = 'hypertext language, programming';

$keywords = preg_split('/[\s,]+/', $sentence);
// ['hypertext', 'language', 'programming']

// This needs the parenthesis in the regex. Multiple parenthesis are possible.
$separators = preg_split('/([\s,]+)/', $sentence, flags: PREG_SPLIT_DELIM_CAPTURE);
// ['hypertext', ' ', 'language', ', ', 'programming']
print_r($separators);

$words = explode(' ', $sentence);
// ['hypertext', 'language,', 'programming']
// comma is still collected

?>
```

## See Also

+ [Getting Started with PHP’s preg_split() Function](https://clouddevs.com/php/preg_split-function/)

Related : [explode()](explode())
