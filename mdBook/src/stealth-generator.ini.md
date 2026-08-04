# Stealth Generator
A function becomes a generator as soon as the ``yield`` keyword is added to the block of code. At that point, the function may be called, but it won't do anything until the ``yield`` are executed. The code continues its execution, though.
```php
<?php

function foo() {
    print a;
    yield 2;
    print b;
}

foo();
print c;

?>
```

## See Also

+ [Stealth generator in action](https://3v4l.org/p6niX)

Related : [Generator](Generator), [Yield](Yield), [yield from Keyword](yield from Keyword), [Coroutine](Coroutine), [Async](Async), [Lazy Loading](Lazy Loading)
