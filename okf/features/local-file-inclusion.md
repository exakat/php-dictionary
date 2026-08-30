---
type: "PHP Feature"
title: "Local File Inclusion"
description: "A local file inclusion is a security vulnerability, where an external attacker can choose which file from the local system is processed by the called script."
resource: "https://owasp.org/www-project-web-security-testing-guide/v42/4-Web_Application_Security_Testing/07-Input_Validation_Testing/11.1-Testing_for_Local_File_Inclusion"
tags: ["security"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Local File Inclusion

A local file inclusion is a security vulnerability, where an external attacker can choose which file from the local system is processed by the called script. 

This vulnerability is often used to access password files, such as ``/etc/passwd``, or other hidden files. They might be read and displayed, or furthermore processed and modified.

```php
<?php

    // Input URL : http://vulnerable_host/preview.php?file=../../../../etc/passwd
    file_get_contents($_GET['file']); 

?>
```

## Documentation
- [https://owasp.org/www-project-web-security-testing-guide/v42/4-Web_Application_Security_Testing/07-Input_Validation_Testing/11.1-Testing_for_Local_File_Inclusion](https://owasp.org/www-project-web-security-testing-guide/v42/4-Web_Application_Security_Testing/07-Input_Validation_Testing/11.1-Testing_for_Local_File_Inclusion)

## See Also
- [Exploiting Local File Inclusion (LFI) Using PHP Wrapper](https://gupta-bless.medium.com/exploiting-local-file-inclusion-lfi-using-php-wrapper-89904478b225)
- [Local File Inclusion (LFI): Understanding and Preventing LFI Attacks](https://brightsec.com/blog/local-file-inclusion-lfi/)
- [From LFI to RCE via expect:// PHP Wrapper — A Deep Dive with Practical Examples](https://medium.com/@zoningxtr/from-lfi-to-rce-via-expect-php-wrapper-a-deep-dive-with-practical-examples-699690073fe8)

## Related
- [Vulnerability](/features/vulnerability.md)
- [Remote Code Execution (RCE)](/features/rce.md)
- [include](/features/include.md)
- [php://filter](/features/php-filter.md)

