# Regular Expression
A regular expression, or regex, is a sequence of characters that specifies a search pattern. PHP currently uses the PCRE library, and used to have 2 such libraries.
```php
<?php

    preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
    print_r($matches);

?>
```

## See Also

+ [How to Use PHP Regular Expressions for Pattern Matching and Data Validation](https://medium.com/@olivia.j.01101001/how-to-use-php-regular-expressions-for-pattern-matching-and-data-validation-d58dacb06ea1)
+ [Getting Started with PHP Regular Expressions](https://www.jotform.com/blog/php-regular-expressions/)
+ [PHP Regular Expressions](https://thecodeforge.io/php/php-regular-expressions/)

Related : [Question Mark ?](Question Mark ?), [Regexploit](Regexploit), [Reverse Regex](Reverse Regex), [Star *](Star *), [Wildcard](Wildcard), [Escape Character](Escape Character), [Perl Compatible Regular Expressions (PCRE)](Perl Compatible Regular Expressions (PCRE)), [Preg_match](Preg_match)
