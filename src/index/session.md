# Session
Session support consists of a way to preserve certain data across subsequent accesses to the web server. 

By default, each query to a webserver is independent from the others. With session, it is possible to keep some data on the server, and retrieve them at each access.

It relies on the ``session_*`` functions, and the ``$_SESSION`` superglobal variable.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/session.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/session.html","name":"Session","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Session support consists of a way to preserve certain data across subsequent accesses to the web server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Session.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"session"}]}]}</script>
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

+ [Superglobal Variables](superglobal.html)
+ [Object Persistence](object-persistence.html)
+ [Persistence](persistence.html)
+ [Session Fixation](session-fixation.html)
+ [Session Hijacking](session-highjacking.html)
+ [Horizontal Scaling](horizontal-scaling.html)
+ [Race Condition](race-condition.html)
+ [Single Sign On (SSO)](sso.html)
+ [State](state.html)
+ [JSON Web Token (JWT)](jwt.html)
+ [Load Balancer](load-balancer.html)
+ [SessionHandlerInterface](sessionhandlerinterface.html)
+ [SessionIdInterface](sessionidinterface.html)
+ [SessionUpdateTimestampHandlerInterface](sessionupdatetimestamphandlerinterface.html)
+ [APCu](apcu.html)
+ [Shared Memory](shared-memory.html)
+ [Temporary](temporary.html)
+ [Time To Live (TTL)](ttl.html)
