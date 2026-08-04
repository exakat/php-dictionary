# Back-tick
Back-ticks are only used to execute a command with the underlying operating system. They are the equivalent of ``shell_exec()``. 

Since PHP 8.5, they are deprecated, and should be replaced with a call to ``shell_exec()`` or ``exec()``.
```php
<?php

$dir = `ls`;

?>
```

Related : [shell_exec()](shell_exec()), [exec](exec), [System](System)
