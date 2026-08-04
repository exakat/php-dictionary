# Variable Variables
Variable variables refer to a feature that allows to use the value of a variable as the name of another variable. It provides a way to dynamically create and access variables based on runtime values.

Variable variables are denoted by the double dollar sign ``$$`` followed by the name of the variable stored in another variable. More dollar signs may be compounded, though it is rare.

```php
<?php

$a = 'b';
$b = 'c';

echo $$b;

?>
```

## See Also

+ [The Dangers of PHP's $$](https://andy-carter.com/blog/the-dangers-of-php-variable-variables)

Related : [Variables](Variables), [Static Variables](Static Variables), [compact()](compact()), [extract()](extract()), [Global Variables](Global Variables), [global Scope](global Scope), [$GLOBALS]($GLOBALS), [$GLOBALS]($GLOBALS), [Superglobal Variables](Superglobal Variables), [Superglobal Variables](Superglobal Variables), [Dollar $](Dollar $), [Dynamic](Dynamic)
