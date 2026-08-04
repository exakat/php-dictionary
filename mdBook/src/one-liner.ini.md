# One Liner
A one-liner refers to a concise and often single expression that accomplishes a specific task. It's a shorthand way of expressing functionality in a compact form. 

One liner are supposed to fit on one line. The line is also supposed to be limited in size. 

One liners tends to pack a lot of operations in one expression. When used aggressively, one liners become less readable, and more complex. 

Some commands have a short and a long syntax, such as ``if-then-else`` and the ternary operator ``condition ? then : else``.
```php
<?php

    // one-liner
    $condition ? doSomething() : doSomethingElse();
    
    // equivalent to above, not a one liner
    if ($condition) {
        doSomething();
    } else {
        doSomethingElse();
    }

?>
```

## See Also

+ [Avoiding one-liners in PHP](https://localheinz.com/articles/2023/03/18/avoiding-one-liners-in-php/)
+ [Deconstructing PHP ‘One-liner’ Webshells](https://tanzilr.medium.com/decontructing-php-one-liner-webshells-625f6cbb96ff)

Related : [Webshell](Webshell), [Golf](Golf)
