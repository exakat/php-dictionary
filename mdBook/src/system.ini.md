# System
The system, or the operating system, is the environment where PHP is running. It might be ``Linux``, ``MacOSX``, ``Windows``, ``Debian`` etc. The system provides specific features, such as access to the file system, or a shell to run commands.

``system()`` is also a PHP native function, which execute a system command, and immediately display it to the standard output. It is usually recommended to use ``shell_exec()``, which returns the results, rather than display it.
```php
<?php

// use a system command to get the name of the underlying OS name
echo shell_exec('cat /etc/os-releaselsb_release –ahostnamectl');

// same as above
system('cat /etc/os-releaselsb_release –ahostnamectl');

?>
```

## See Also

+ [statgrab](https://github.com/iliaal/statgrab)

Related : [shell_exec()](shell_exec()), [Back-tick](Back-tick), [Execution](Execution), [System Call](System Call)
