# Arm
An arm is a branch in a ``match()`` expression. There is the ``default`` arm, and the other ``arm``. The arm includes the case, on the left, and the payload, on the right.
```php
<?php

    // a match with 2 arm, including the default
    $a = match($b) {
        1 => 2,
        default => 3,
    };

?>
```

Related : [If Then Else](If Then Else), [Branch](Branch), [Match](Match)
