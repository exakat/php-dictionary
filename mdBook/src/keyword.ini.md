# Keyword
PHP has a list of keywords, which are also called reserved names. Those are names used with some functions or operators. 

Keywords are not allowed in function, constant, class, interface, enum and trait names. They are allowed in method, properties, variables and class constant names.

While legit, it is usually recommended to avoid using PHP keywords as identifiers, so as to prevent confusion.
```php
<?php

    class MyNamespace {
        function array() {
            return array();
        }
    }
    
    print_r((new myNamespace)->array());
    
    class X {
        const array ARRAY = array(); // possible confusion here
    }

?>
```

## See Also

+ [List of other reserved words](https://www.php.net/manual/en/reserved.other-reserved-words.php)

Related : [Reserved Names](Reserved Names), [And Operator](And Operator), [Self](Self)
