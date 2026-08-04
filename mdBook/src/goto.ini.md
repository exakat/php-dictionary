# Goto
The ``goto`` operator is a language construct that allows to perform an unconditional jump in the flow of your code to a specified label. 

``goto`` one of the very controversial PHP features and has been the subject of much debate due to its potential to create spaghetti code and make code difficult to read and maintain.

Some legit uses of ``goto`` include breaking out of nested loops, implementing state machines, or in some cases for error handling. However, they are rare, and should only considered in last resort.

The target label must be within the same file and context, meaning that it is not possible to jump out of a function or method, nor to jump into one.

``goto`` is case insensitive.
```php
<?php
  
  goto a;
  echo 'Foo';
   
  a:
  echo 'Bar';

?>
```

## See Also

+ [GoTo statement in PHP](https://www.thecreativedev.com/goto-statement-in-php/)
+ [Why PHP, goto, and bubblesort, are good, actually](https://topher.io/writing/why-php-goto-and-bubblesort-are-good/)

Related : [Goto Labels](Goto Labels), [Colon](Colon), [Jump](Jump), [Control Flow](Control Flow)
