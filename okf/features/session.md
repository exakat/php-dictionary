---
type: "PHP Feature"
title: "Session"
description: "Session support consists of a way to preserve certain data across subsequent accesses to the web server."
resource: "https://www.php.net/manual/en/book.session.php"
tags: ["feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Session

Session support consists of a way to preserve certain data across subsequent accesses to the web server. 

By default, each query to a webserver is independent from the others. With session, it is possible to keep some data on the server, and retrieve them at each access.

It relies on the ``session_*`` functions, and the ``$_SESSION`` superglobal variable.

```php
<?php

    if (isset($_SESSION['x'])) {
        print 'x was already set with the value ' . $_SESSION['x'];
    }
    
    $_SESSION['x'] = rand(0, 10);
    print 'Giving the value ' . $_SESSION['x'] . 'to x, in the session';

?>
```

## Documentation
- [https://www.php.net/manual/en/book.session.php](https://www.php.net/manual/en/book.session.php)

## See Also
- [Session in PHP: Creating, Destroying, and Working With Session in PHP](https://www.simplilearn.com/tutorials/php-tutorial/session-in-php)
- [Sessions security](https://dev.to/ahmedraza_fyntune/php-session-security-4c60)
- [Fixing PHP Session Issues: Troubleshooting and Solutions](https://phpforever.com/php/fixing-php-session-issues-troubleshooting-and-solutions/)

## Related
- [Superglobal Variables](/features/superglobal.md)
- [Object Persistence](/features/object-persistence.md)
- [Persistence](/features/persistence.md)
- [Session Fixation](/features/session-fixation.md)
- [Session Hijacking](/features/session-highjacking.md)
- [Horizontal Scaling](/features/horizontal-scaling.md)
- [Race Condition](/features/race-condition.md)
- [Single Sign On (SSO)](/features/sso.md)
- [State](/features/state.md)
- [JSON Web Token (JWT)](/features/jwt.md)
- [Load Balancer](/features/load-balancer.md)
- [SessionHandlerInterface](/features/sessionhandlerinterface.md)
- [SessionIdInterface](/features/sessionidinterface.md)
- [SessionUpdateTimestampHandlerInterface](/features/sessionupdatetimestamphandlerinterface.md)
- [APCu](/features/apcu.md)
- [Shared Memory](/features/shared-memory.md)
- [Temporary](/features/temporary.md)
- [Time To Live (TTL)](/features/ttl.md)

## Details
- Extension: ext-session

