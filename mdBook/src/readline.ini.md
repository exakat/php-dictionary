# Readline
``readline`` is the PHP extension to the GNU Readline library. This library provide features to interact with the command line, and its prompt.
```php
<?php

    // read 3 commands from user
    for ($i=0; $i < 3; $i++) {
            $line = readline("Commande :");
            readline_add_history($line);
    }
    
    // list the command line history
    print_r(readline_list_history());

?>
```

## See Also

+ [GNU readline](https://tiswww.case.edu/php/chet/readline/rltop.html)
+ [How to read user or console input in PHP](https://impactmillions.org/how-to-read-user-or-console-input-in-php/)
+ [How to read user or console input in PHP ?](https://www.geeksforgeeks.org/php/how-to-read-user-or-console-input-in-php/)
+ [How To Take Input From User In PHP Without Form](https://www.talkerscode.com/howto/how-to-take-input-from-user-in-php-without-form.php)

Related : [Extensions](Extensions), [Read Eval Print Loop (REPL)](Read Eval Print Loop (REPL))
