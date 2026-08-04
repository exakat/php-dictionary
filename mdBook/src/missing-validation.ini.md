# Missing Validation
Missing Validation is a common security vulnerability that occurs when an application fails to validate user input or data before processing it. This can lead to a wide range of security issues, including injection attacks, data corruption, unauthorized access, or even system compromise.

Missing validation means the application does not check whether the input or data it receives is:

+ Correctly formatted, e.g., an email address, number, or date
+ Within expected boundaries, e.g., length, type, or range
+ Safe to process, e.g., free from malicious code or unexpected characters

It is important to remember that validation applies to incoming variables, such as ``$_GET``, but also with formated data, like ``JSON`` or ``YAML``; formated files like ``PDF`` or ``Zip``; database data, etc. In fact, every external source of data should be considered a potential vector of attack.

```php
<?php

$file = $_GET['fileName'];

// Some validation on the name size.
if (strlen($file) > 150) { die('This file name is too long');}

// Validation is not sufficient, and any file may be reached on the system
fopen($filename);

?>
```

Related : [Vulnerability](Vulnerability), [Static Application Security Testing (SAST)](Static Application Security Testing (SAST))
