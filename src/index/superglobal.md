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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/superglobal.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/superglobal.html","name":"Superglobal Variables","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"PHP superglobal variables are predefined variables that are accessible from any scope within a PHP script without the need for any special syntax or function calls","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Superglobal Variables.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"superglobal"}]}]}</script>
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

+ [Variables](variable.html)
+ [Session](session.html)
+ [Static Variables](static-variable.html)
+ [Variable Variables](variable-variable.html)
+ [Global Variables](global-variable.html)
+ [Local Variable](local-variable.html)
