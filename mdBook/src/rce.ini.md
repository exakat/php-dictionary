# Remote Code Execution (RCE)
It is a type of security vulnerability where an attacker can remotely execute arbitrary code on a target server or system. This typically happens due to improper input validation, insecure deserialization, vulnerable eval-like functions, or unsafe file handling.
```php
<?php

    // direct execution of the incoming 
    shell_exec($_GET['shell']);

?>
```

## See Also

+ [RCE via a malicious SVG in mPDF](https://medium.com/@brun0ne/rce-via-a-malicious-svg-in-mpdf-216e613b250b)
+ [The Quiet Shift Reshaping PHP Security](https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/)

Related : [Vulnerability](Vulnerability), [Local File Inclusion](Local File Inclusion), [Execution](Execution), [php://filter](php://filter), [Static Application Security Testing (SAST)](Static Application Security Testing (SAST)), [Shell Exec](Shell Exec)
