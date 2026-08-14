# Disable
To disable is to prevent a feature from performing. For example, using ``disable_functions=foo`` prevents the function ``foo`` from being available at the start of execution, even if PHP has a definition for it. The function ``foo`` cannot be run anymore, unless defined again.

Another example is ``memory_limit=-1``, which sets the maximum memory used by a PHP application to ``-1``, effectively disabling the control of the maximum amount of used memory.

Putting a piece of code in a comment is a way to disable it: it cannot be run anymore.

To disable implies a permanent state: it is different from a conditional statement.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/disable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/disable.html","name":"Disable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:42:53 +0000","dateModified":"Tue, 11 Aug 2026 14:42:53 +0000","description":"To disable is to prevent a feature from performing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Disable.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"disable"}]}]}</script>
**[Documentation](https://www.php.net/manual/en/ini.core.php#ini.disable-functions)**
## Related

+ [Enable](enable.html)
+ [Disable Functions](disable-functions.html)
