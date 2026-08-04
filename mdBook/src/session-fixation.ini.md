# Session Fixation
A session fixation attack is a type of security exploit where an attacker sets a victim's session identifier to a known value, allowing the attacker to hijack the session once the victim logs in. This type of attack exploits the way web applications manage session authentication.

To prevent session fixation attacks, web applications should employ secure session management practices, such as generating random session identifiers for each user session and invalidating session identifiers after login or logout. Additionally, using secure HTTPS connections can help protect against session hijacking and interception of session identifiers.
## See Also

+ [PHP Session Fixation / Hijacking](https://stackoverflow.com/questions/5081025/php-session-fixation-hijacking)

Related : [Session](Session), [Vulnerability](Vulnerability), [Session Hijacking](Session Hijacking)
