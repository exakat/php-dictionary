---
type: "PHP Feature"
title: "Cookie"
description: "Cookies serve as a fundamental web technology that enables websites to store small pieces of data directly within a user's web browser."
resource: "https://www.php.net/manual/en/features.cookies.php"
tags: ["web"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Cookie

Cookies serve as a fundamental web technology that enables websites to store small pieces of data directly within a user's web browser. This stored information persists across browsing sessions, allowing websites to remember specific details about visitors when they return. The primary purposes include tracking user behavior, maintaining login states, personalizing content, and identifying returning visitors to provide customized experiences based on their previous interactions with the site.

```php
<?php

setcookie('aCookieName', 'Cookie value', time()+3600);  /* expire in 1 hour */

?>
```

## Documentation
- [https://www.php.net/manual/en/features.cookies.php](https://www.php.net/manual/en/features.cookies.php)

## See Also
- [Cookies in PHP](https://www.simplilearn.com/tutorials/php-tutorial/cookies-in-php)
- [PHP Cookies](https://www.geeksforgeeks.org/php-cookies/)

## Related
- [Hyper Text Transfer Protocol (HTTP)](/features/http.md)
- [Headers](/features/headers.md)
- [Single Sign On (SSO)](/features/sso.md)

## Details
- Packagist: [dflydev/fig-cookies](https://packagist.org/packages/dflydev/fig-cookies)

