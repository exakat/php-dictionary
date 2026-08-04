# Dynamic Variable
A dynamic variable is a variable whose name stored in a variable or an expression. 

They are identified by a double $ sign, though the same operator may be used multiple times. 

They are also called variable variable.
```php
<?php

$a = 'b';
$b = 'c';
$c = 'd';

echo $$$a; 
echo $$b; 
echo $c; 

?>
```

## See Also

+ [The Dangers of PHP's $$](https://andy-carter.com/blog/the-dangers-of-php-variable-variables)

Related : [Variables](Variables), [Dynamic](Dynamic)
