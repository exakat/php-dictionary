# max\_input\_vars
The ``max_input_vars`` directive caps the number of input variables PHP will accept per request, counting every entry in ``$_GET``, ``$_POST`` and ``$_COOKIE``, including each element of nested arrays.

The default value is 1000. When a request exceeds that limit, PHP silently drops the extra variables instead of raising a catchable error: a warning is only emitted if ``E_WARNING`` is part of ``error_reporting`` and displayed, which makes the failure easy to miss in production.

This directive exists to mitigate a denial-of-service vector related to hash collisions in the internal array implementation: a request with a huge number of keys forces expensive hash-table rebuilding. Large forms, big multi-select inputs, or deeply structured JSON-like arrays submitted as form fields are the usual reasons legitimate applications need to raise this value.

``max_input_vars`` can only be set in ``php.ini``, a virtual host configuration, or ``.htaccess``: unlike ``memory_limit``, it cannot be changed with ``ini_set()`` at runtime, since the limit must be enforced while the request body is still being parsed, before user code ever executes.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/max_input_vars.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/max_input_vars.html","name":"max_input_vars","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 07:37:16 +0000","dateModified":"Sun, 16 Aug 2026 07:37:16 +0000","description":"The max_input_vars directive caps the number of input variables PHP will accept per request, counting every entry in $_GET, $_POST and $_COOKIE, including each element of nested arrays","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/max_input_vars.html"]}],"keywords":["directive","security"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directive.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ini_set.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_get.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_post.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_cookie.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/max_execution_time.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/info.configuration.php#ini.max-input-vars"},{"@type":"CreativeWork","name":"Fixing PHP's max_input_vars limit","url":"https:\/\/www.hostinger.com\/tutorials\/how-to-fix-max-input-vars-warning-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"max_input_vars"}]}]}</script>
**[Documentation](https://www.php.net/manual/en/info.configuration.php#ini.max-input-vars)**
## See Also

+ [Fixing PHP's max_input_vars limit](https://www.hostinger.com/tutorials/how-to-fix-max-input-vars-warning-in-php)

## Related

+ [Directives](directive.html)
+ [PHP, Hypertext Preprocessor (PHP)](php.html)
+ [ini\_set()](ini_set.html)
+ [$\_GET]($_get.html)
+ [$\_POST]($_post.html)
+ [$\_COOKIE]($_cookie.html)
+ [Memory](memory.html)
+ [max\_execution\_time](max_execution_time.html)
