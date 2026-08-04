# Defensive Programming
Defensive programming is a programming approach where the code is written assuming that things can go wrong, even when they shouldn't, and it should actively guard against incorrect input, unexpected states, or misuse.
```php
<?php

try {
    $number = random_int(0, 10);
} catch (Random\RandomException $e) {
    // This handle cases where no entropy sources are found 
    // This is very rare
}

?>
```

Related : [Offensive Programming](Offensive Programming), [Paradigm](Paradigm), [Double Check](Double Check)
