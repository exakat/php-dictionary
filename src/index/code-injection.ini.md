# Code Injection
A CODE injection is a vulnerability, where external data is used as PHP code.  

In the example below, ``$_GET`` is directly used in the ``eval()`` function. By using a clever string, as shown in illustration below, it is possible to assign the variable, and run the ``phpinfo()`` command. 

Among the solutions to mitigate this problem: filter adequately the incoming data; use prepared statements. 

Some PHP functions are sensitive to this kind of attack: ``eval()``, ``include()``, ``include_once()``, ``require()``, ``require_once()``. Dynamic calls are also susceptible of code injection.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/code-injection.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/code-injection.ini.html","name":"Code Injection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:13:26 +0000","dateModified":"Sun, 02 Aug 2026 06:13:26 +0000","description":"A CODE injection is a vulnerability, where external data is used as PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Code Injection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Eval()](eval.ini.html)
+ [Inclusions](inclusion.ini.html)
+ [Dynamic Call](dynamic-call.ini.html)
+ [Execution](execution.ini.html)
+ [Injection](injection.ini.html)
