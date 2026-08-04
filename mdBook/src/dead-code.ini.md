# Dead Code
Dead code refers to sections of code that are no longer executed or reachable during the program's execution. It includes any lines or blocks of code that do not contribute to the program's functionality or produce any observable results. Dead code can be the result of code modifications, changes in requirements, or mistakes during development.

Dead code is also known as unused code. It happens to any defined structure. Variables, methods, functions, classes, interfaces, etc..
```php
<?php

    // bar is dead code : never executed
    function bar() { echo 'World'; }
    
    // foo() is alive code : it is executed
    function foo() { echo 'Hello'; }

    echo foo();

?>
```

## See Also

+ [Delete unused code (and how to retrieve it)](https://understandlegacycode.com/blog/delete-unused-code/)
+ [The Art of Code Deletion: Why Removing Code Makes You a Better Developer](https://dev.to/adamgolan/the-art-of-code-deletion-why-removing-code-makes-you-a-better-developer-3cm)
+ [Unused code detector — How to make your PHP code cleaner](https://medium.com/@pogulailo/unused-code-detector-how-to-make-your-php-code-cleaner-50e6f5cb4109)

Related : [Zombie Code](Zombie Code), [Analysis](Analysis), [Habit](Habit), [Legacy](Legacy), [Unreachable Code](Unreachable Code)
