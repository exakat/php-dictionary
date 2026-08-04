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

## See Also

+ [Session in PHP: Creating, Destroying, and Working With Session in PHP](https://www.simplilearn.com/tutorials/php-tutorial/session-in-php)
+ [Sessions security](https://dev.to/ahmedraza_fyntune/php-session-security-4c60)
+ [Fixing PHP Session Issues: Troubleshooting and Solutions](https://phpforever.com/php/fixing-php-session-issues-troubleshooting-and-solutions/)

Related : [Superglobal Variables](Superglobal Variables), [Object Persistence](Object Persistence), [Persistence](Persistence), [Session Fixation](Session Fixation), [Session Hijacking](Session Hijacking), [Horizontal Scaling](Horizontal Scaling), [Race Condition](Race Condition), [Single Sign On (SSO)](Single Sign On (SSO)), [State](State), [JSON Web Token (JWT)](JSON Web Token (JWT)), [Load Balancer](Load Balancer), [SessionHandlerInterface](SessionHandlerInterface), [SessionIdInterface](SessionIdInterface), [SessionUpdateTimestampHandlerInterface](SessionUpdateTimestampHandlerInterface), [APCu](APCu), [Shared Memory](Shared Memory), [Temporary](Temporary), [Time To Live (TTL)](Time To Live (TTL))
