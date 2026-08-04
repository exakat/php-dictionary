# Shell
A shell is a program that provides an interface for users to interact with the operating system and execute commands. It acts as a command interpreter, taking input from the user, interpreting it, and then executing the appropriate actions.

PHP is able to relay commands to the OS using dedicated local functions, such as ``shell_exec()``, ``exec()``, ``system()``, ``passthru()`` and the back-tick operator \`. It is also able to access remote shells with the ``ssh://`` protocol.

Shells provide a important access to the underlying OS: they are considered as a critical point of entry for security attacks.
```php
<?php

    $output = shell_exec('ls -lart');
    echo "<pre>$output</pre>";

?>
```

Related : [Process Control (pcntl)](Process Control (pcntl)), [Shell Exec](Shell Exec)
