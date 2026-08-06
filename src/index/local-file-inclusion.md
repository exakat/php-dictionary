# Local File Inclusion
A local file inclusion is a security vulnerability, where an external attacker can choose which file from the local system is processed by the called script. 

This vulnerability is often used to access password files, such as ``/etc/passwd``, or other hidden files. They might be read and display, or furthermore processed and modified.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/local-file-inclusion.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/local-file-inclusion.html","name":"Local File Inclusion","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A local file inclusion is a security vulnerability, where an external attacker can choose which file from the local system is processed by the called script","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Local File Inclusion.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Input URL : http://vulnerable_host/preview.php?file=../../../../etc/passwd
    file_get_contents($_GET['file']); 

?>
```

**[Documentation](https://owasp.org/www-project-web-security-testing-guide/v42/4-Web_Application_Security_Testing/07-Input_Validation_Testing/11.1-Testing_for_Local_File_Inclusion)**
## See Also

+ [Exploiting Local File Inclusion (LFI) Using PHP Wrapper](https://gupta-bless.medium.com/exploiting-local-file-inclusion-lfi-using-php-wrapper-89904478b225)
+ [Local File Inclusion (LFI): Understanding and Preventing LFI Attacks](https://brightsec.com/blog/local-file-inclusion-lfi/)
+ [From LFI to RCE via expect:// PHP Wrapper — A Deep Dive with Practical Examples](https://medium.com/@zoningxtr/from-lfi-to-rce-via-expect-php-wrapper-a-deep-dive-with-practical-examples-699690073fe8)

## Related

+ [Vulnerability](vulnerability.ini.html)
+ [Remote Code Execution (RCE)](rce.ini.html)
+ [include](include.ini.html)
+ [php://filter](php-filter.ini.html)
