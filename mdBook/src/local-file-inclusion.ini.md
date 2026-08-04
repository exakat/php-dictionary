# Local File Inclusion
A local file inclusion is a security vulnerability, where an external attacker can choose which file from the local system is processed by the called script. 

This vulnerability is often used to access password files, such as ``/etc/passwd``, or other hidden files. They might be read and display, or furthermore processed and modified.
```php
<?php

    // Input URL : http://vulnerable_host/preview.php?file=../../../../etc/passwd
    file_get_contents($_GET['file']); 

?>
```

## See Also

+ [Exploiting Local File Inclusion (LFI) Using PHP Wrapper](https://gupta-bless.medium.com/exploiting-local-file-inclusion-lfi-using-php-wrapper-89904478b225)
+ [Local File Inclusion (LFI): Understanding and Preventing LFI Attacks](https://brightsec.com/blog/local-file-inclusion-lfi/)
+ [From LFI to RCE via expect:// PHP Wrapper — A Deep Dive with Practical Examples](https://medium.com/@zoningxtr/from-lfi-to-rce-via-expect-php-wrapper-a-deep-dive-with-practical-examples-699690073fe8)

Related : [Vulnerability](Vulnerability), [Remote Code Execution (RCE)](Remote Code Execution (RCE)), [include](include), [php://filter](php://filter)
