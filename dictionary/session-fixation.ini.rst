.. _session-fixation:
.. meta::
	:description:
		Session Fixation: A session fixation attack is a type of security exploit where an attacker sets a victim's session identifier to a known value, allowing the attacker to hijack the session once the victim logs in.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Session Fixation
	:twitter:description: Session Fixation: A session fixation attack is a type of security exploit where an attacker sets a victim's session identifier to a known value, allowing the attacker to hijack the session once the victim logs in
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Session Fixation
	:og:type: article
	:og:description: A session fixation attack is a type of security exploit where an attacker sets a victim's session identifier to a known value, allowing the attacker to hijack the session once the victim logs in
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/session-fixation.ini.html
	:og:locale: en


Session Fixation
----------------

A session fixation attack is a type of security exploit where an attacker sets a victim's session identifier to a known value, allowing the attacker to hijack the session once the victim logs in. This type of attack exploits the way web applications manage session authentication.

To prevent session fixation attacks, web applications should employ secure session management practices, such as generating random session identifiers for each user session and invalidating session identifiers after login or logout. Additionally, using secure HTTPS connections can help protect against session hijacking and interception of session identifiers.

`Documentation <https://owasp.org/www-community/attacks/Session_fixation>`__

See also `PHP Session Fixation / Hijacking <https://stackoverflow.com/questions/5081025/php-session-fixation-hijacking>`_

Related packages : `stefangabos/zebra_session <https://packagist.org/packages/stefangabos/zebra_session>`_
