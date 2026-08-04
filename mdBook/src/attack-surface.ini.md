# Attack Surface
The attack surface of an application is the sum of all the different points where an attacker could try to enter data, extract data, or trigger unintended behavior. The larger the attack surface, the more opportunities exist for exploitation.

In applications, the attack surface spans several layers:

+ Application code: input handling, query construction, file operations, serialization and deserialization.
+ Infrastructure endpoints: ``PHP-FPM`` status pages, API diagnostic routes, health-check URLs: operational tooling that is often less hardened than the main application.
+ Dependencies: every third-party package added to a project extends the attack surface with its own code, its own vulnerabilities, and its own transitive dependencies.
+ PHP extensions and shared libraries: native extensions wrap C libraries whose vulnerabilities directly affect the PHP process.

A key principle is that every new feature or integration expands the attack surface. Modernizing a stack can improve security in many dimensions while simultaneously opening new areas that must be understood and managed.

Reducing attack surface is itself a security strategy: disabling unused extensions, hiding diagnostic endpoints behind authentication, limiting the PHP functions available via ``disable_functions``, and keeping dependencies minimal all shrink the area an attacker can target.
```php
<?php

// FPM status endpoint operational tooling that increases attack surface
// if exposed without access controls
// nginx config: location /status { fastcgi_pass php-fpm; }

// Restricting attack surface via disable_functions in php.ini:
// disable_functions = exec, shell_exec, system, passthru, popen

?>
```

## See Also

+ [The Quiet Shift Reshaping PHP Security](https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/)
+ [OWASP: Attack Surface Analysis Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Attack_Surface_Analysis_Cheat_Sheet.html)

Related : [Attack](Attack), [Vulnerability](Vulnerability), [Security](Security), [FastCGI Process Manager (FPM)](FastCGI Process Manager (FPM)), [Simple Object Access Protocol (SOAP)](Simple Object Access Protocol (SOAP)), [Dependency](Dependency), [Supply Chain Attack](Supply Chain Attack), [Disable Functions](Disable Functions), [Hardening](Hardening), [PHP Extensions](PHP Extensions)
