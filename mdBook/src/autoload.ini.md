# Class Autoloading
Autoloading provides a hook to allow the loading of a class, the first time PHP requires it. This is a more flexible way to handle the class definitions than the traditional inclusions, which requires good planning.

Autoloading requires each class, trait, interface or enumeration to be stored in a distinct file. This is the most popular way, yet autoloading allows any other strategy of storage, as long as the class may be loaded based only on its name.

Autoloading relies on the ``spl_autoload_register()`` function. Prior to PHP 8.0, it was possible to define the  ``__autoload()`` method, and this function has been deprecated since PHP 7.2.

Autoloading does not work for global constants and functions. Those still require a specific inclusion mechanism.

In modern PHP, not using class autoloading is considered a bad practice.
```php
<?php

    spl_autoload_register(function ($class_name) {
        include $class_name . '.php';
    });
    
    $obj  = new MyClass1();
    $obj2 = new MyClass2(); 

?>
```

## See Also

+ [Use autoloading and namespaces in PHP](https://opensource.com/article/23/4/autoloading-namespaces-php)
+ [Autoloading Performance – Avoid These 5 Mistakes!](https://tideways.com/profiler/blog/autoloading-performance-avoid-these-5-mistakes)
+ [Understanding Autoloading in PHP: How to Implement and Use It Efficiently](https://dev.to/abhay_yt_52a8e72b213be229/understanding-autoloading-in-php-how-to-implement-and-use-it-efficiently-3a44)

Related : [Autowiring](Autowiring), [Definition](Definition), [Call](Call), [__autoload](__autoload), [Class Hoisting](Class Hoisting), [Inclusions](Inclusions), [Standard PHP Library (SPL)](Standard PHP Library (SPL)), [Existence](Existence), [Hoisting](Hoisting), [Library](Library), [Order Of Execution](Order Of Execution), [include](include)
