# Class Autoloading
Autoloading provides a hook to allow the loading of a class, the first time PHP requires it. This is a more flexible way to handle the class definitions than the traditional inclusions, which requires good planning.

Autoloading requires each class, trait, interface or enumeration to be stored in a distinct file. This is the most popular way, yet autoloading allows any other strategy of storage, as long as the class may be loaded based only on its name.

Autoloading relies on the ``spl_autoload_register()`` function. Prior to PHP 8.0, it was possible to define the  ``__autoload()`` method, and this function has been deprecated since PHP 7.2.

Autoloading does not work for global constants and functions. Those still require a specific inclusion mechanism.

In modern PHP, not using class autoloading is considered a bad practice.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/autoload.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/autoload.html","name":"Class Autoloading","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Autoloading provides a hook to allow the loading of a class, the first time PHP requires it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Class Autoloading.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    spl_autoload_register(function ($class_name) {
        include $class_name . '.php';
    });
    
    $obj  = new MyClass1();
    $obj2 = new MyClass2(); 

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.autoload.php)**
## See Also

+ [Use autoloading and namespaces in PHP](https://opensource.com/article/23/4/autoloading-namespaces-php)
+ [Autoloading Performance – Avoid These 5 Mistakes!](https://tideways.com/profiler/blog/autoloading-performance-avoid-these-5-mistakes)
+ [Understanding Autoloading in PHP: How to Implement and Use It Efficiently](https://dev.to/abhay_yt_52a8e72b213be229/understanding-autoloading-in-php-how-to-implement-and-use-it-efficiently-3a44)

## Related

+ [Autowiring](auto-wiring.ini.html)
+ [Definition](definition.ini.html)
+ [Call](call.ini.html)
+ [\_\_autoload](__autoload.ini.html)
+ [Class Hoisting](class-hoisting.ini.html)
+ [Inclusions](inclusion.ini.html)
+ [Standard PHP Library (SPL)](spl.ini.html)
+ [Existence](existence.ini.html)
+ [Hoisting](hoisting.ini.html)
+ [Library](library.ini.html)
+ [Order Of Execution](order-of-execution.ini.html)
+ [include](include.ini.html)
