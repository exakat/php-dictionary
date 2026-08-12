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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-constant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-constant.html","name":"Magic Constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Constants which hold information about the current location of the code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Magic Constants.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"magic-constant"}]}]}</script>
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

+ [Magic](magic.html)
+ [Magic Property](magic-property.html)
+ [Magic Methods](magic-method.html)
+ [\_\_CLASS\_\_](__class__.html)
+ [\_\_FUNCTION\_\_](__function__.html)
+ [\_\_METHOD\_\_](__method__.html)
+ [Property Hook](property-hook.html)
+ [\_\_get() Method](__get.html)
+ [\_\_set() Method](__set.html)
+ [Special Constant](special-constant.html)
+ [\_\_FILE\_\_](__file__.html)
+ [\_\_LINE\_\_](__line__.html)
+ [\_\_unset() Method](__unset.html)
+ [Constant Case](constant-case.html)
+ [Automagic](automagic.html)
