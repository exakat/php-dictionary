# Superglobal Variables
PHP superglobal variables are predefined variables that are accessible from any scope within a PHP script without the need for any special syntax or function calls. These variables are called 'superglobals' because they are automatically available in all scopes, including functions, methods, and the global scope.

PHP provides several superglobal variables, each serving a specific purpose. Here are the most commonly used ones:

+ ``$_SERVER``: contains information about the server and execution environment, such as headers, paths, and script locations
+ ``$_GET``: holds the values of variables passed to the current script via the URL parameters, HTTP GET method
+ ``$_POST``: stores the values of variables sent to the current script via HTTP POST method, usually from an HTML form
+ ``$_REQUEST``: contains the values of both $_GET, $_POST, and $_COOKIE variables, providing a convenient way to access user input data
+ ``$_COOKIE``: holds the values of cookies sent by the client browser to the server
+ ``$_SESSION``: stores and retrieves session variables, which are used to persist data across multiple requests from the same user
+ ``$_FILES``: contains information about uploaded files through an HTML form with ``enctype=\multipart/form-data``
+ ``$_ENV``: holds variables passed to the PHP script from the server's environment.

PHP superglobal variables are also called auto-global, as they are implicitly global, without using the ``global`` keyword.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/superglobal.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/superglobal.html","name":"Superglobal Variables","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:20:53 +0000","dateModified":"Mon, 06 Jul 2026 10:20:53 +0000","description":"PHP superglobal variables are predefined variables that are accessible from any scope within a PHP script without the need for any special syntax or function calls","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Superglobal Variables.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    global $x;
    $x = "A";
    
    function counter() {
        echo $GLOBALS['A'];
    }
    
    foo();

?>
```

**[Documentation](https://www.php.net/manual/en/language.variables.superglobals.php)**
## See Also

+ [What are superglobals in PHP?](https://www.educative.io/answers/what-are-superglobals-in-php)

## Related

+ [Variables](variable.ini.html)
+ [Session](session.ini.html)
+ [Static Variables](static-variable.ini.html)
+ [Variable Variables](variable-variable.ini.html)
+ [Global Variables](global-variable.ini.html)
+ [Local Variable](local-variable.ini.html)
