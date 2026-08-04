# Oblic Quotes
Oblic quotes, also called backticks, `` \` `` were used to make a shell call to the operating system. They are deprecated since version 8.5, and they have no more specific usage.

`` \` `` is a character, that needs to be balanced, when used in code syntax.

```php
<?php

    echo `ls -hla`;
    
    // moder alternative
    echo shell_exec('ls -hla');

?>
```

Related : [Balanced](Balanced), [Double Quotes Strings](Double Quotes Strings), [Single Quotes Strings](Single Quotes Strings)
