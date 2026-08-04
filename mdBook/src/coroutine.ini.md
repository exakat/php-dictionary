# Coroutine
Coroutines are methods whose execution may be suspended and resumed. 

PHP generators are a sort of coroutines.

Swoole, Openswoole and fibers extensions offer coroutines.
```php
<?php

    // Example from OpenSwoole (https://openswoole.com/docs/modules/swoole-coroutine)
    Co\run(function()
    {
        go(function()
        {
            Co::sleep(1);
            echo "Done 1\n";
        });
    
        go(function()
        {
            Co::sleep(1);
            echo "Done 2\n";
        });
    });

?>
```

## See Also

+ [Coroutine in PHP](https://openswoole.com/coroutine)

Related : [Generator](Generator), [Blocking Wait](Blocking Wait), [Stealth Generator](Stealth Generator), [Actor Model](Actor Model), [Channel](Channel), [Continuation](Continuation), [Green Thread](Green Thread), [AMP (Asynchronous Markup Protocol)](AMP (Asynchronous Markup Protocol)), [OpenSwoole](OpenSwoole), [ReactPHP](ReactPHP), [Swoole](Swoole)
