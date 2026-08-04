# Dynamic Call
A dynamic call happens when part of the syntax comes from a variable, and is not known at code writing time.

PHP allows every syntax to be used as a dynamic call.
```php
<?php

    $constant = 'Name';
    echo constant($constant); 
    echo constant("someClass::$constant"); 
    
    $variable = 'a';
    $a = 'b';
    echo $$variable; // b
    
    $function = 'mine';
    $function($arg);
    
    $className = '\stdclass';
    new $className;
    
    $method = 'method';
    $object->$method();
    
    echo $object::CONSTANT;

?>
```

## See Also

+ [All the Dynamic Syntaxes in PHP](https://www.exakat.io/en/all-the-dynamic-syntaxes-in-php/)

Related : [Anonymous](Anonymous), [Code Injection](Code Injection), [Dynamic](Dynamic), [Static Call](Static Call)
