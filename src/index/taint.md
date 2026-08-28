# Taint Analysis
Taint analysis is a security technique used to identify and trace potentially unsafe or untrusted data as it flows through a program. In the context of web development, taint analysis is often employed to find security vulnerabilities related to user input and data handling.

The basic idea behind taint analysis is to track and label data that originates from untrusted sources, such as user input, and then trace how this tainted data is used throughout the application. By identifying and monitoring the flow of tainted data, developers can better understand and mitigate potential security risks, such as injection attacks and other vulnerabilities.

There was a taint extension until PHP 8.0. It was not ported further.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/taint.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/taint.html","name":"Taint Analysis","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 06:37:01 +0000","dateModified":"Thu, 13 Aug 2026 06:37:01 +0000","description":"Taint analysis is a security technique used to identify and trace potentially unsafe or untrusted data as it flows through a program","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/taint.html"]}],"keywords":["concept","analysis","security","static analysis"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crlf-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-flow-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ldap-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/symbolic-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/psalm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ssrf.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stored-xss.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Taint_checking"},{"@type":"CreativeWork","name":"Secure Your PHP Code With Taint Analysis by Qodana","url":"https:\/\/blog.jetbrains.com\/qodana\/2023\/03\/taint-analysis-by-qodana\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"taint"}]}]}</script>
```php

<?php

    $a = trim($_GET['a']);

    $output    = "Welcome, {$a} !!!";

    echo $output;
    //Warning: main() [function.echo]: Attempt to echo a string that might be tainted

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Taint_checking)**
## See Also

+ [Secure Your PHP Code With Taint Analysis by Qodana](https://blog.jetbrains.com/qodana/2023/03/taint-analysis-by-qodana/)

## Related

+ [Security](security.html)
+ [Injection](injection.html)
+ [Control Flow Analysis](control-flow-analysis.html)
+ [CRLF Injection](crlf-injection.html)
+ [Data Flow Analysis (DFA)](data-flow-analysis.html)
+ [LDAP Injection](ldap-injection.html)
+ [Symbolic Analysis](symbolic-analysis.html)
+ [Psalm](psalm.html)
+ [Shell Injection](shell-injection.html)
+ [Server-Side Request Forgery (SSRF)](ssrf.html)
+ [Stored XSS](stored-xss.html)
