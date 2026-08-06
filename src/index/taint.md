# Taint Analysis
Taint analysis is a security technique used to identify and trace potentially unsafe or untrusted data as it flows through a program. In the context of web development, taint analysis is often employed to find security vulnerabilities related to user input and data handling.

The basic idea behind taint analysis is to track and label data that originates from untrusted sources, such as user input, and then trace how this tainted data is used throughout the application. By identifying and monitoring the flow of tainted data, developers can better understand and mitigate potential security risks, such as injection attacks and other vulnerabilities.

There was a taint extension until PHP 8.0. It was not ported further.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/taint.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/taint.html","name":"Taint Analysis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 08:30:45 +0000","dateModified":"Fri, 03 Jul 2026 08:30:45 +0000","description":"Taint analysis is a security technique used to identify and trace potentially unsafe or untrusted data as it flows through a program","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Taint Analysis.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Security](security.ini.html)
+ [Injection](injection.ini.html)
+ [Control Flow Analysis](control-flow-analysis.ini.html)
+ [CRLF Injection](crlf-injection.ini.html)
+ [Data Flow Analysis (DFA)](data-flow-analysis.ini.html)
+ [LDAP Injection](ldap-injection.ini.html)
+ [Symbolic Analysis](symbolic-analysis.ini.html)
