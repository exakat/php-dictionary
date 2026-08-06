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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/magic-constant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/magic-constant.html","name":"Magic Constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Constants which hold information about the current location of the code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Magic Constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/language.constants.magic.php)**
## Related

+ [Magic](magic.ini.html)
+ [Magic Property](magic-property.ini.html)
+ [Magic Methods](magic-method.ini.html)
+ [\_\_CLASS\_\_](__class__.ini.html)
+ [\_\_FUNCTION\_\_](__function__.ini.html)
+ [\_\_METHOD\_\_](__method__.ini.html)
+ [Property Hook](property-hook.ini.html)
+ [\_\_get() Method](__get.ini.html)
+ [\_\_set() Method](__set.ini.html)
+ [Special Constant](special-constant.ini.html)
+ [\_\_FILE\_\_](__file__.ini.html)
+ [\_\_LINE\_\_](__line__.ini.html)
+ [\_\_unset() Method](__unset.ini.html)
+ [Constant Case](constant-case.ini.html)
+ [Automagic](automagic.ini.html)
