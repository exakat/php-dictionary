# Session Hijacking
Session hijacking, also known as session stealing, is an attack where an unauthorized person takes over a user's session. In the context of web applications, this typically involves gaining control of a user's session in order to impersonate them and perform actions on their behalf.

There are several ways to realize session hijacking: session fixation, man in the middle attack, session ID stealing, CSRF and XSS.

Session hijacking is mitigated by having a way to identify if a user is the actual owner of a session, or it was stolen, and is being used by someone else. For example, a secondary cookie, the IP address or the browser signature are generally stable. Someone providing a session ID, with a new browser signature should trigger a new identity validation.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/session-highjacking.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/session-highjacking.html","name":"Session Hijacking","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Session hijacking, also known as session stealing, is an attack where an unauthorized person takes over a user's session","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Session Hijacking.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"session-highjacking"}]}]}</script>
**[Documentation](https://owasp.org/www-community/attacks/Session_hijacking_attack)**
## See Also

+ [Session And Security in PHP](https://sjinnovation.com/session-and-security-in-php)
+ [PHP Security Vulnerabilities: Session Hijacking, Cross-Site Scripting, SQL Injection, and How to Fix Them](https://www.freecodecamp.org/news/php-security-vulnerabilities/)

## Related

+ [Session Fixation](session-fixation.html)
+ [Session](session.html)
+ [Cross Site Scripting (XSS)](xss.html)
+ [Cross Site Request Forgery (CSRF)](csrf.html)
+ [Man In The Middle](man-in-the-middle.html)
