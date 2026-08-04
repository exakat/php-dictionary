# Absolute
An ``absolute`` value is independent from the context in which it operates. 

The notion of ``absolute`` has several usages:

+ There are absolute names, also known as fully qualified name: ``\get_class()``, ``new myClass()``
+ There are absolute path, which are path that starts at the root of the file system: ``/tmp/path/to/file.txt``
+ There are absolute values, supported by ``abs()`` math function
+ The ``absolute`` parameter, when processing a ``DateTimeInterface`` difference

The notion of absolute is the opposite of the notion of relative, which depends on a local context.
```php
<?php

// global namespace
namespace {
    // first definition
    function bar() { 
        echo 'in the global scope.';
    }
}

namespace foo{
    // second definition
    function bar() { 
        echo 'in the foo scope.';
    }

    bar(); // relative call: it goes to the second definition
    \bar(); // absolute call: it goes to the first definition
    \foo\bar(); // absolute call: it goes to the second definition
}

?>
```

Related : [Fully Qualified Name](Fully Qualified Name), [Absolute Value](Absolute Value), [Path](Path), [Relative](Relative), [abs()](abs())
