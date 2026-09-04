# Absolute
An ``absolute`` value is independent from the context in which it operates. 

The notion of ``absolute`` has several usages:

+ There are absolute names, also known as fully qualified name: ``\get_class()``, ``new myClass()``
+ There are absolute path, which are path that starts at the root of the file system: ``/tmp/path/to/file.txt``
+ There are absolute values, supported by ``abs()`` math function
+ The ``absolute`` parameter, when processing a ``DateTimeInterface`` difference

The notion of absolute is the opposite of the notion of relative, which depends on a local context.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/absolute.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/absolute.html","name":"Absolute","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 05:04:01 +0000","dateModified":"Mon, 24 Aug 2026 05:04:01 +0000","description":"An absolute value is independent from the context in which it operates","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/absolute.html"]}],"keywords":["disambiguation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fully-qualified-name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/absolute-value.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/path.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abs.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.basics.php"},{"@type":"CreativeWork","name":"PHP: Name resolution rules - Manual","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.rules.php"},{"@type":"CreativeWork","name":"Fully Qualified Name - PHP Dictionary","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/fully-qualified-name.ini.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"absolute"}]}]}</script>
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

**[Documentation](https://www.php.net/manual/en/language.namespaces.basics.php)**
## See Also

+ [PHP: Name resolution rules - Manual](https://www.php.net/manual/en/language.namespaces.rules.php)
+ [Fully Qualified Name - PHP Dictionary](https://php-dictionary.readthedocs.io/en/latest/dictionary/fully-qualified-name.ini.html)

## Related

+ [Fully Qualified Name](fully-qualified-name.html)
+ [Absolute Value](absolute-value.html)
+ [Path](path.html)
+ [Relative](relative.html)
+ [abs()](abs.html)
