# Session Fixation
A session fixation attack is a type of security exploit where an attacker sets a victim's session identifier to a known value, allowing the attacker to hijack the session once the victim logs in. This type of attack exploits the way web applications manage session authentication.

To prevent session fixation attacks, web applications should employ secure session management practices, such as generating random session identifiers for each user session and invalidating session identifiers after login or logout. Additionally, using secure HTTPS connections can help protect against session hijacking and interception of session identifiers.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/session-fixation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/session-fixation.html","name":"Session Fixation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A session fixation attack is a type of security exploit where an attacker sets a victim's session identifier to a known value, allowing the attacker to hijack the session once the victim logs in","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Session Fixation.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"session-fixation"}]}]}</script>
**[Documentation](https://owasp.org/www-community/attacks/Session_fixation)**
## See Also

+ [PHP Session Fixation / Hijacking](https://stackoverflow.com/questions/5081025/php-session-fixation-hijacking)

## Related

+ [Session](session.html)
+ [Vulnerability](vulnerability.html)
+ [Session Hijacking](session-highjacking.html)

## Related packages

+ [stefangabos/zebra_session](https://packagist.org/packages/stefangabos/zebra_session)
