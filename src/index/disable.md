# Disable
To disable is to prevent a feature to perform. For example, using ``disable_functions=foo`` prevents the function ``foo`` to be available at the start of execution, even if PHP has a definition for it. The function ``foo`` is cannot be run anymore, unless defined again.

Another example is ``memory_limit=-1``, which sets the maximum memory used by a PHP application to ``-1``, effectively disabling the control of the maximum amount of used memory.

Putting a piece of code in a comment is a way to disable it: it cannot be run anymore.

To disable implies a permanant state: it is different from a conditional statement. 
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/disable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/disable.html","name":"Disable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:21 +0000","dateModified":"Fri, 19 Jun 2026 21:24:21 +0000","description":"To disable is to prevent a feature to perform","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Disable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://www.php.net/manual/en/ini.core.php#ini.disable-functions)**
## Related

+ [Enable](enable.ini.html)
+ [Disable Functions](disable-functions.ini.html)
