# declare()
``declare()``is used to set execution directives for a block of code.

``declare()`` may set the following values: 

+ ``strict_types``: strict typing in the block
+ ``ticks``: generate a tick event 
+ ``encoding``: per-file encoding directive

``declare()`` affects some configuration for the next block of code.

It is a language construct.
```php
<?php

    declare(strict_types=1, encoding='UTF-8');

?>
```

## See Also

+ [Why use declare(strict_types=1) in PHP – Fast tips](https://dev.to/inspector/why-use-declarestricttypes1-in-php-fast-tips-3c1)

Related : [strict_types](strict_types), [Tick](Tick), [declare Encoding](declare Encoding), [Control Flow](Control Flow), [Control Structures](Control Structures), [Unicode](Unicode)
