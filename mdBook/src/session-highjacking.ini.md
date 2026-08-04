# Session Hijacking
Session hijacking, also known as session stealing, is an attack where an unauthorized person takes over a user's session. In the context of web applications, this typically involves gaining control of a user's session in order to impersonate them and perform actions on their behalf.

There are several ways to realize session hijacking: session fixation, man in the middle attack, session ID stealing, CSRF and XSS.

Session hijacking is mitigated by having a way to identify if a user is the actual owner of a session, or it was stolen, and is being used by someone else. For example, a secondary cookie, the IP address or the browser signature are generally stable. Someone providing a session ID, with a new browser signature should trigger a new identity validation.
## See Also

+ [Session And Security in PHP](https://sjinnovation.com/session-and-security-in-php)
+ [PHP Security Vulnerabilities: Session Hijacking, Cross-Site Scripting, SQL Injection, and How to Fix Them](https://www.freecodecamp.org/news/php-security-vulnerabilities/)

Related : [Session Fixation](Session Fixation), [Session](Session), [Cross Site Scripting (XSS)](Cross Site Scripting (XSS)), [Cross Site Request Forgery (CSRF)](Cross Site Request Forgery (CSRF)), [Man In The Middle](Man In The Middle)
