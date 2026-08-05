# Disable Functions
The ``disable_functions`` PHP directive prevents specific native functions from being executed when called from code. It helps mitigate potential security vulnerabilities or enforce practices by forbidding usage of specific functions, even when they are compiled into the engine.

This directive requires a list of PHP functions, separated by a comma, and set in the PHP.ini file: this is read at startup time and cannot be changed later. 

``disable_functions`` only works on native functions, and extension functions. It is not possible to preemptively disable a custom function: this may be achieved by defining the forbidden function, and assigning it a warning, or no operation. 

A disabled function may be recreated as a custom function in the code.

Disabled functions appear as undefined: in fact, they can also be redefined, with a custom code and then used.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/disable-functions.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/disable-functions.ini.html","name":"Disable Functions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 18 Jun 2026 13:41:48 +0000","dateModified":"Thu, 18 Jun 2026 13:41:48 +0000","description":"The ``disable_functions`` PHP directive prevents specific native functions from being executed when called from code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Disable Functions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://www.php.net/manual/en/ini.core.php#ini.disable-functions)**
## See Also

+ [Disabling functions using the PHP disable_functions directive](https://kb.hosting.com/docs/php-disable_functions-directive)

## Related

+ [Functions](function.ini.html)
+ [Preappend File Directive](auto_prepend_file.ini.html)
+ [Disable](disable.ini.html)
+ [Enable](enable.ini.html)
+ [Disable Classes](disable-classes.ini.html)
