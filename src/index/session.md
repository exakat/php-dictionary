# Session
Session support consists of a way to preserve certain data across subsequent accesses to the web server. 

By default, each query to a webserver is independent from the others. With session, it is possible to keep some data on the server, and retrieve them at each access.

It relies on the ``session_*`` functions, and the ``$_SESSION`` superglobal variable.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/session.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/session.html","name":"Session","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:18:07 +0000","dateModified":"Thu, 16 Jul 2026 08:18:07 +0000","description":"Session support consists of a way to preserve certain data across subsequent accesses to the web server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Session.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    if (isset($_SESSION['x'])) {
        print 'x was already set with the value ' . $_SESSION['x'];
    }
    
    $_SESSION['x'] = rand(0, 10);
    print 'Giving the value ' . $_SESSION['x'] . 'to x, in the session';

?>
```

**[Documentation](https://www.php.net/manual/en/book.session.php)**
## See Also

+ [Session in PHP: Creating, Destroying, and Working With Session in PHP](https://www.simplilearn.com/tutorials/php-tutorial/session-in-php)
+ [Sessions security](https://dev.to/ahmedraza_fyntune/php-session-security-4c60)
+ [Fixing PHP Session Issues: Troubleshooting and Solutions](https://phpforever.com/php/fixing-php-session-issues-troubleshooting-and-solutions/)

## Related

+ [Superglobal Variables](superglobal.ini.html)
+ [Object Persistence](object-persistence.ini.html)
+ [Persistence](persistence.ini.html)
+ [Session Fixation](session-fixation.ini.html)
+ [Session Hijacking](session-highjacking.ini.html)
+ [Horizontal Scaling](horizontal-scaling.ini.html)
+ [Race Condition](race-condition.ini.html)
+ [Single Sign On (SSO)](sso.ini.html)
+ [State](state.ini.html)
+ [JSON Web Token (JWT)](jwt.ini.html)
+ [Load Balancer](load-balancer.ini.html)
+ [SessionHandlerInterface](sessionhandlerinterface.ini.html)
+ [SessionIdInterface](sessionidinterface.ini.html)
+ [SessionUpdateTimestampHandlerInterface](sessionupdatetimestamphandlerinterface.ini.html)
+ [APCu](apcu.ini.html)
+ [Shared Memory](shared-memory.ini.html)
+ [Temporary](temporary.ini.html)
+ [Time To Live (TTL)](ttl.ini.html)
