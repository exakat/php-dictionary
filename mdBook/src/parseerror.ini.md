# ParseError
A ``ParseError`` is thrown when an error occurs while parsing PHP code, such as when ``eval()`` is called or when including non-compilable code.
```php
<?php

try {
    eval (' A A ');
} catch (ParseError $e) {
    echo "This is not PHP code";
}

?>
```

## See Also

+ [What is a Parse Error?](https://www.ionos.com/help/hosting/troubleshooting-for-php/what-is-a-parse-error/)
+ [Syntax errors](https://php-errors.readthedocs.io/en/latest/syntaxerror.html)

Related : [Error](Error), [Eval()](Eval()), [Parse](Parse), [Parser](Parser)
