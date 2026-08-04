# Iffectation
An iffection is both an assignation and a condition at the same time. 

Assignation is a condition is debated. It makes the code less readable, as the assignation is hidden in the if condition.

It also saves some extra lines of code, when the condition applies to something that will immediately be used.
```php
<?php

if ($x = foo()) { }

// same, without the iffectation
$x = foo();
if ($x) { }


?>
```

Related : [Condition](Condition), [Assignations](Assignations), [If Then Else](If Then Else), [Short Assignations](Short Assignations)
