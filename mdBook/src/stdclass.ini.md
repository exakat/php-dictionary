# stdclass
Stdclass is a native PHP class. It is the class used when a generic object is created, for example with ``json_decode()`` or the ``(object)`` cast operator.

The stdClass is allowed to create dynamic properties on the fly, as its base definition has none.
```php
<?php

class X {
    private $property = 1;
    
    function foo() {
        // dynamic property
        $this->a = 1;
        
        // dynamic property with variable name 
        $b = "abc";
        $this->$b = 1; 
        
        // static property
        $this->property = 1;
    }
}

?>
```

## See Also

+ [Quick way to create a PHP stdClass](https://www.simonholywell.com/post/2016/11/quick-way-to-create-php-stdclass/)

Related : [Properties](Properties), [Dynamic Properties](Dynamic Properties), [is_object()](is_object()), [Plain Old PHP Object (POPO)](Plain Old PHP Object (POPO))
