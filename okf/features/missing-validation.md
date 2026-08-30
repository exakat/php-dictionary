---
type: "PHP Feature"
title: "Missing Validation"
description: "Missing Validation is a common security vulnerability that occurs when an application fails to validate user input or data before processing it."
resource: "https://owasp.org/www-project-top-10-for-business-logic-abuse/docs/the-top-10/missing-transition-validation"
tags: ["security"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Missing Validation

Missing Validation is a common security vulnerability that occurs when an application fails to validate user input or data before processing it. This can lead to a wide range of security issues, including injection attacks, data corruption, unauthorized access, or even system compromise.

Missing validation means the application does not check whether the input or data it receives is:

+ Correctly formatted, e.g., an email address, number, or date
+ Within expected boundaries, e.g., length, type, or range
+ Safe to process, e.g., free from malicious code or unexpected characters

It is important to remember that validation applies to incoming variables, such as ``$_GET``, but also with formatted data, like ``JSON`` or ``YAML``; formatted files like ``PDF`` or ``Zip``; database data, etc. In fact, every external source of data should be considered a potential vector of attack.

```php
<?php

$file = $_GET['fileName'];

// Some validation on the name size.
if (strlen($file) > 150) { die('This file name is too long');}

// Validation is not sufficient, and any file may be reached on the system
fopen($filename);

?>
```

## Documentation
- [https://owasp.org/www-project-top-10-for-business-logic-abuse/docs/the-top-10/missing-transition-validation](https://owasp.org/www-project-top-10-for-business-logic-abuse/docs/the-top-10/missing-transition-validation)

## See Also
- [Improper Data Validation](https://owasp.org/www-community/vulnerabilities/Improper_Data_Validation)
- [Input Validation Errors: The Root of All Evil in Web Application Security](https://www.invicti.com/blog/web-security/input-validation-errors-root-of-all-evil)

## Related
- [Vulnerability](/features/vulnerability.md)
- [Static Application Security Testing (SAST)](/features/sast.md)

