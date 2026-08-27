# Code Injection
A code injection is a vulnerability, where external data is used as PHP code.

In the example below, ``$_GET`` is directly used in the ``eval()`` function. By using a clever string, as shown in the illustration below, it is possible to assign the variable, and run the ``phpinfo()`` command.

Among the solutions to mitigate this problem: filter adequately the incoming data; use prepared statements.

Some PHP functions are sensitive to this kind of attack: ``eval()``, ``include()``, ``include_once()``, ``require()``, ``require_once()``. Dynamic calls are also susceptible to code injection.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/code-injection.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/code-injection.html","name":"Code Injection","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:48:35 +0000","dateModified":"Wed, 19 Aug 2026 06:48:35 +0000","description":"A code injection is a vulnerability, where external data is used as PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/code-injection.html"]}],"keywords":["security"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/eval.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inclusion.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-call.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/execution.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/injection.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/owasp.org\/www-community\/attacks\/Code_Injection"},{"@type":"CreativeWork","name":"PHP Security 2: Directory Traversal & Code Injection","url":"https:\/\/www.acunetix.com\/websitesecurity\/php-security-2\/"},{"@type":"CreativeWork","name":"PHP code injection","url":"https:\/\/beaglesecurity.com\/blog\/vulnerability\/php-code-injection.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"code-injection"}]}]}</script>
```php
<?php

// $_GET['x'] = '1; phpinfo()';
eval($myvar = $x);

// $_GET['method'] = 'getSafe';
// Any method may be called on the safe object
$data->$method();

?>
```

**[Documentation](https://owasp.org/www-community/attacks/Code_Injection)**
## See Also

+ [PHP Security 2: Directory Traversal & Code Injection](https://www.acunetix.com/websitesecurity/php-security-2/)
+ [PHP code injection](https://beaglesecurity.com/blog/vulnerability/php-code-injection.html)

## Related

+ [Eval()](eval.html)
+ [Inclusions](inclusion.html)
+ [Dynamic Call](dynamic-call.html)
+ [Execution](execution.html)
+ [Injection](injection.html)
