# Attack Surface
The attack surface of an application is the sum of all the different points where an attacker could try to enter data, extract data, or trigger unintended behavior. The larger the attack surface, the more opportunities exist for exploitation.

In applications, the attack surface spans several layers:

+ Application code: input handling, query construction, file operations, serialization and deserialization.
+ Infrastructure endpoints: ``PHP-FPM`` status pages, API diagnostic routes, health-check URLs: operational tooling that is often less hardened than the main application.
+ Dependencies: every third-party package added to a project extends the attack surface with its own code, its own vulnerabilities, and its own transitive dependencies.
+ PHP extensions and shared libraries: native extensions wrap C libraries whose vulnerabilities directly affect the PHP process.

A key principle is that every new feature or integration expands the attack surface. Modernizing a stack can improve security in many dimensions while simultaneously opening new areas that must be understood and managed.

Reducing attack surface is itself a security strategy: disabling unused extensions, hiding diagnostic endpoints behind authentication, limiting the PHP functions available via ``disable_functions``, and keeping dependencies minimal all shrink the area an attacker can target.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attack-surface.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attack-surface.html","name":"Attack Surface","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 28 Jun 2026 10:18:41 +0000","dateModified":"Sun, 28 Jun 2026 10:18:41 +0000","description":"The attack surface of an application is the sum of all the different points where an attacker could try to enter data, extract data, or trigger unintended behavior","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attack-surface.html"]}],"keywords":["security"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vulnerability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fpm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/soap.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dependency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/supply-chain-attack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/disable-functions.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hardening.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-extension.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Attack_surface"},{"@type":"CreativeWork","name":"The Quiet Shift Reshaping PHP Security","url":"https:\/\/www.linkedin.com\/pulse\/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc\/"},{"@type":"CreativeWork","name":"OWASP: Attack Surface Analysis Cheat Sheet","url":"https:\/\/cheatsheetseries.owasp.org\/cheatsheets\/Attack_Surface_Analysis_Cheat_Sheet.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"attack-surface"}]}]}</script>
```php
<?php

// FPM status endpoint operational tooling that increases attack surface
// if exposed without access controls
// nginx config: location /status { fastcgi_pass php-fpm; }

// Restricting attack surface via disable_functions in php.ini:
// disable_functions = exec, shell_exec, system, passthru, popen

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Attack_surface)**
## See Also

+ [The Quiet Shift Reshaping PHP Security](https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/)
+ [OWASP: Attack Surface Analysis Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Attack_Surface_Analysis_Cheat_Sheet.html)

## Related

+ [Attack](attack.html)
+ [Vulnerability](vulnerability.html)
+ [Security](security.html)
+ [FastCGI Process Manager (FPM)](fpm.html)
+ [Simple Object Access Protocol (SOAP)](soap.html)
+ [Dependency](dependency.html)
+ [Supply Chain Attack](supply-chain-attack.html)
+ [Disable Functions](disable-functions.html)
+ [Hardening](hardening.html)
+ [PHP Extensions](php-extension.html)
