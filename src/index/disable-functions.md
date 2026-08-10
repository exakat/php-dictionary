# Disable Functions
The ``disable_functions`` PHP directive prevents specific native functions from being executed when called from code. It helps mitigate potential security vulnerabilities or enforce practices by forbidding usage of specific functions, even when they are compiled into the engine.

This directive requires a list of PHP functions, separated by a comma, and set in the PHP.ini file: this is read at startup time and cannot be changed later. 

``disable_functions`` only works on native functions, and extension functions. It is not possible to preemptively disable a custom function: this may be achieved by defining the forbidden function, and assigning it a warning, or no operation. 

A disabled function may be recreated as a custom function in the code.

Disabled functions appear as undefined: in fact, they can also be redefined, with a custom code and then used.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/disable-functions.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/disable-functions.html","name":"Disable Functions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The ``disable_functions`` PHP directive prevents specific native functions from being executed when called from code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Disable Functions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Disable Functions"}]}]}</script>
**[Documentation](https://www.php.net/manual/en/ini.core.php#ini.disable-functions)**
## See Also

+ [Disabling functions using the PHP disable_functions directive](https://kb.hosting.com/docs/php-disable_functions-directive)

## Related

+ [Functions](function.html)
+ [Preappend File Directive](auto_prepend_file.html)
+ [Disable](disable.html)
+ [Enable](enable.html)
+ [Disable Classes](disable-classes.html)
