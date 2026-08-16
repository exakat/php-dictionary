# Class Autoloading
Autoloading provides a hook to allow the loading of a class, the first time PHP requires it. This is a more flexible way to handle the class definitions than the traditional inclusions, which requires good planning.

Autoloading requires each class, trait, interface or enumeration to be stored in a distinct file. This is the most popular way, yet autoloading allows any other strategy of storage, as long as the class may be loaded based only on its name.

Autoloading relies on the ``spl_autoload_register()`` function. Prior to PHP 8.0, it was possible to define the  ``__autoload()`` method, and this function has been deprecated since PHP 7.2.

Autoloading does not work for global constants and functions. Those still require a specific inclusion mechanism.

In modern PHP, not using class autoloading is considered a bad practice.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autoload.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autoload.html","name":"Class Autoloading","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Autoloading provides a hook to allow the loading of a class, the first time PHP requires it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Class Autoloading.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"autoload"}]}]}</script>
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

+ [Autowiring](auto-wiring.html)
+ [Definition](definition.html)
+ [Call](call.html)
+ [\_\_autoload](__autoload.html)
+ [Class Hoisting](class-hoisting.html)
+ [Inclusions](inclusion.html)
+ [Standard PHP Library (SPL)](spl.html)
+ [Existence](existence.html)
+ [Hoisting](hoisting.html)
+ [Library](library.html)
+ [Order Of Execution](order-of-execution.html)
+ [include](include.html)
