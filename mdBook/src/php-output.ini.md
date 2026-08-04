# php://output
``php://output`` is a special write-only stream that gives access the body of the outgoing HTTP response. It does not work with CLI environment.

``php://output`` is also implicitly written when using ``echo``, ``print``, the HTML mode, or ``print_r()``.
```php
<?php

    $incoming = file_put_contents('php://output', '<p>hello world</p>');

?>
```

## See Also

+ [PHP Output Buffering for dummies](https://medium.com/@eric.morand/php-output-buffering-for-dummies-fad9624554b4)

Related : [Hyper Text Transfer Protocol (HTTP)](Hyper Text Transfer Protocol (HTTP)), [Stream](Stream), [Echo](Echo), [Print](Print), [php://input](php://input), [file_put_contents()](file_put_contents()), [$HTTP_RAW_POST_DATA]($HTTP_RAW_POST_DATA)
