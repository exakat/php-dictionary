# Abstraction
An abstraction, or also an abstraction layer, is a way to hide the underlying complexity of some logic behind a simpler interface so that other parts of the program don't need to worry about the details.

In that sense, it is related to the ``abstract`` keyword, which introduces a signature and leaves freedom of implementation.

Abstraction is also the name of the refactor to replace a piece of code by an easily changed piece of code.
```php
<?php

    echo 1; // displays 1 
    
    // This depends on the execution environment
    const A = PHP_OS == 'win' ? 'Windows' : 'Others';
    
    echo A; // display the value of A

?>
```

## See Also

+ [Abstraction in PHP](https://mohasin-dev.medium.com/abstraction-in-php-8c6685893bb8)

Related : [Abstract Keyword](Abstract Keyword), [Inlining](Inlining), [Facade](Facade), [Over-engineer](Over-engineer), [Separation Of Concerns](Separation Of Concerns)
