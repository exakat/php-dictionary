# Disable
To disable is to prevent a feature from performing. For example, using ``disable_functions=foo`` prevents the function ``foo`` from being available at the start of execution, even if PHP has a definition for it. The function ``foo`` cannot be run anymore, unless defined again.

Another example is ``memory_limit=-1``, which sets the maximum memory used by a PHP application to ``-1``, effectively disabling the control of the maximum amount of used memory.

Putting a piece of code in a comment is a way to disable it: it cannot be run anymore.

To disable implies a permanent state: it is different from a conditional statement.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/disable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/disable.html","name":"Disable","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:06:22 +0000","dateModified":"Mon, 17 Aug 2026 09:06:22 +0000","description":"To disable is to prevent a feature from performing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Disable.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/enable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/disable-functions.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/ini.core.php#ini.disable-functions"},{"@type":"CreativeWork","name":"Disabling functions using the PHP disable_functions directive","url":"https:\/\/kb.hosting.com\/docs\/php-disable_functions-directive"},{"@type":"CreativeWork","name":"PHP.INI settings Disable exec, shell_exec, system, popen and Other Functions To Improve Security","url":"https:\/\/www.cyberciti.biz\/faq\/linux-unix-apache-lighttpd-phpini-disable-functions\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"disable"}]}]}</script>
**[Documentation](https://www.php.net/manual/en/ini.core.php#ini.disable-functions)**
## See Also

+ [Disabling functions using the PHP disable_functions directive](https://kb.hosting.com/docs/php-disable_functions-directive)
+ [PHP.INI settings Disable exec, shell_exec, system, popen and Other Functions To Improve Security](https://www.cyberciti.biz/faq/linux-unix-apache-lighttpd-phpini-disable-functions/)

## Related

+ [Enable](enable.html)
+ [Disable Functions](disable-functions.html)
