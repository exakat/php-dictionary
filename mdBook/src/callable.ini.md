# Callables
A callable is an object that can pass the ``callable`` type. 

A callable may be a callback function or method, represented as a string, a closure or an arrow function. 

Objects may also be callable, when their class implement the magic method ``__invoke()``.
```php
<?php

function foo() { echo __METHOD__; }

call_user_func('foo');

?>
```

## See Also

+ [What Is the callable Type in PHP?](https://www.designcise.com/web/tutorial/what-is-the-callable-type-in-php)

Related : [Callbacks](Callbacks), [Closure](Closure), [__invoke() Method](__invoke() Method), [Arrow Functions](Arrow Functions), [Callable Arrays](Callable Arrays), [Call](Call), [Pseudo-type](Pseudo-type), [Special Types](Special Types), [Identity](Identity), [PHP Natives](PHP Natives)
