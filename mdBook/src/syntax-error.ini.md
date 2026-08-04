# Syntax Error
A syntax error happens when the text could not be parsed into tokens by PHP. PHP would use the tokens to interpret the code, but here, the tokens are not recognizable. 

Syntax error happen for a variety of reasons, which may compound one with the other: 

+ Unbalanced opening/closing tokens, such as parenthesis ``()``, brackets ``[]``, curly brackets ``{}``
+ Unfinished command: the final semi colon ``;`` was forgotten
+ Forgotten ``)``, in particular when there need to be more than 2, sometimes even 1.
```php
<?php

$a[1  = 3;

?>
```

## See Also

+ [Types of Errors in PHP](https://www.scaler.com/topics/php-tutorial/types-of-errors-in-php/)

Related : [Syntax](Syntax), [Lint, Won't Execute](Lint, Won't Execute)
