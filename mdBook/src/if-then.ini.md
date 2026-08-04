# If Then Else
A ``if-then-else`` command branches the execution based on an condition. When the condition is true, the first branch, called ``then`` is executed. When the condition is false, the second branch, called ``else``, is executed. 

If-then structures may be chained with the ``elseif`` keyword. The ``else`` branch is then a new if-then structure, with a second condition.
```php
<?php

    $number = rand(0, 10);
    
    if ($number % 2 === 0) {
        print "$number is even\n";
    } else {
        print "$number is odd\n";
    }

?>
```

## See Also

+ [How to use PHP if-else for conditional logic and programming](https://www.ionos.com/digitalguide/websites/web-development/php-if-else/)

Related : [Switch](Switch), [Match](Match), [Ternary Operator](Ternary Operator), [Coalesce Operator](Coalesce Operator), [Arm](Arm), [Branch](Branch), [Jump](Jump), [Conditional Structures](Conditional Structures), [Control Flow](Control Flow), [Simple Switch](Simple Switch), [Iffectation](Iffectation)
