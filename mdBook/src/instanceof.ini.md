# instanceof
``instanceof`` is used to determine whether a PHP variable is an instantiated object of a certain class. It is related to the function ``is_a()``.

``instanceof`` has a higher precedence than ``!`` operator, so it is applied before the latter. In case of confusion, use parenthesis.

``instanceof`` does not check that the checked class exists: it just checks that the provided object match the class name. If a typo happens in the class name or the class does not exists, the operator fails every time.


```php
<?php

    if ($user instanceof Administrator) {
        $user->admin();
    }
    
    // If The user is not of class User...
    if ( !$user instanceof User ) {
    //if ( !($user instanceof User) ) {
        $user->admin();
    }
    
    var_dump($user instanceof UndefinedClass); // false

?>
```

Related : [Operators](Operators), [is_a()](is_a()), [Type Checking](Type Checking), [Object](Object), [Polymorphism](Polymorphism), [is_object()](is_object()), [Object Type](Object Type), [Multiple Dispatch](Multiple Dispatch), [Smart Cast](Smart Cast), [Sum Type](Sum Type), [Type Narrowing](Type Narrowing)
