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
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-constant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-constant.html","name":"Magic Constants","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 09:52:33 +0000","dateModified":"Sat, 15 Aug 2026 09:52:33 +0000","description":"Constants which hold information about the current location of the code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-constant.html"]}],"keywords":["magic-constant"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__class__.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__function__.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__method__.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property-hook.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__get.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__set.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/special-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__file__.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__line__.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__unset.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-case.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/automagic.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.constants.magic.php"},{"@type":"CreativeWork","name":"get_class()","url":"https:\/\/www.php.net\/manual\/en\/function.get-class.php"},{"@type":"CreativeWork","name":"Namespaces","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"magic-constant"}]}]}</script>
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
## See Also

+ [get_class()](https://www.php.net/manual/en/function.get-class.php)
+ [Namespaces](https://www.php.net/manual/en/language.namespaces.php)

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
