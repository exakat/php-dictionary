# Existence
Existence is the general concept of checking whether something is available before using it. PHP provides several dedicated functions and constructs for this, each targeting a different kind of entity.

``isset()`` checks whether a variable exists and is not ``null``. It is a language construct, not a function, so it does not trigger an error on undefined variables. It is commonly used to guard access to array keys or object properties before reading them.

``defined()`` checks whether a constant has been defined, either with ``define()`` or ``const``. It is the counterpart of ``isset()`` for constants, since constants are not variables and ``isset()`` cannot be used on them.

``file_exists()`` checks whether a file or directory exists on the filesystem at a given path. It is used before reading, including, or operating on a file, to avoid errors on missing paths.

``class_exists()``, ``interface_exists()``, and ``trait_exists()`` check whether a class, interface, or trait has been loaded or can be autoloaded. They are useful in conditional compatibility code, plugin systems, or when working with optional dependencies.

The underlying concept is the same across all these cases: verify that an entity is available in its respective scope before attempting to use it. Failing to check existence is a common source of warnings, errors, and undefined-behavior bugs.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/existence.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/existence.html","name":"Existence","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 04 Jul 2026 08:21:02 +0000","dateModified":"Sat, 04 Jul 2026 08:21:02 +0000","description":"Existence is the general concept of checking whether something is available before using it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Existence.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Existence"}]}]}</script>
```php
<?php

    // Variable existence
    if (isset($config['timeout'])) {
        $timeout = $config['timeout'];
    }

    // Constant existence
    if (defined('APP_ENV')) {
        echo APP_ENV;
    }

    // File existence
    if (file_exists('/path/to/config.php')) {
        include '/path/to/config.php';
    }

    // Class existence
    if (class_exists(SomeOptionalLibrary::class)) {
        $obj = new SomeOptionalLibrary();
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.isset.php)**
## See Also

+ [defined](https://www.php.net/manual/en/function.defined.php)
+ [file_exists](https://www.php.net/manual/en/function.file-exists.php)
+ [class_exists](https://www.php.net/manual/en/function.class-exists.php)

## Related

+ [Isset](isset.html)
+ [defined()](defined.html)
+ [Undefined](undefined.html)
+ [Null](null.html)
+ [File](file.html)
+ [Class Autoloading](autoload.html)
+ [Class](class.html)
+ [Uninitialized](uninitialized.html)
