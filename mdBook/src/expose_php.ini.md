# expose_php
The ``expose_php`` directive displays the usage of PHP and its version in the headers of the webserver.

It is considered a security leak to leave this configuration on, as it gives potential attackers information on the available technologies, and potential vulnerabilities. It is recommended to leave it off.

``expose_php`` has no impact on the code itself.
## See Also

+ [Hiding](https://www.php.net/manual/en/security.hiding.php)

Related : [php\.ini](php\.ini), [Data Leak](Data Leak), [Hardening](Hardening)
