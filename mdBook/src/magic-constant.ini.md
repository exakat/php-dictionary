# Magic Constants
Constants which hold information about the current location of the code.

Those constants are magic, because they have a constant syntax, yet their value may change, even during the execution of the code. 

+ __LINE__	The current line number of the file.
+ __FILE__	The full path and filename of the file with symlinks resolved. If used inside an include, the name of the included file is returned.
+ __DIR__	The directory of the file. If used inside an include, the directory of the included file is returned. This is equivalent to ``dirname(__FILE__)``. This directory name does not have a trailing slash unless it is the root directory.
+ __FUNCTION__	The function name, or ``{closure}`` for anonymous functions.
+ __CLASS__	The class name. The class name includes the namespace it was declared in, e.g. ``Foo\Bar``. When used in a trait method, __CLASS__ is the name of the class the trait is used in.
+ __TRAIT__	The trait name. The trait name includes the namespace it was declared in, e.g. ``Foo\Bar``.
+ __METHOD__	The class method name.
+ __NAMESPACE__ The name of the current namespace.
+ __PROPERTY__ The name of the current property hook.

Those constants are case insensitive. While the common convention is to use them all in uppercase, all the following syntaxes work: ``__METHOD__``, ``__method__``, ``__meTHod__``.
```php
<?php

function foo() {
    // shows foo
    echo __FUNCTION__;
}

function goo() {
    // shows goo
    echo __FUNCTION__;
}

?>
```

Related : [Magic](Magic), [Magic Property](Magic Property), [Magic Methods](Magic Methods), [__CLASS__](__CLASS__), [__FUNCTION__](__FUNCTION__), [__METHOD__](__METHOD__), [Property Hook](Property Hook), [__get() Method](__get() Method), [__set() Method](__set() Method), [Special Constant](Special Constant), [__FILE__](__FILE__), [__LINE__](__LINE__), [__unset() Method](__unset() Method), [Constant Case](Constant Case), [Automagic](Automagic)
