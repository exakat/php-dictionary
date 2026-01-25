.. _session-highjacking:
.. _session-hijacking:
.. meta::
	:description:
		Session Hijacking: Session hijacking, also known as session stealing, is an attack where an unauthorized person takes over a user's session.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Session Hijacking
	:twitter:description: Session Hijacking: Session hijacking, also known as session stealing, is an attack where an unauthorized person takes over a user's session
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Session Hijacking
	:og:type: article
	:og:description: Session hijacking, also known as session stealing, is an attack where an unauthorized person takes over a user's session
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/session-highjacking.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Session Hijacking","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 12:47:20 +0000","dateModified":"Thu, 22 Jan 2026 12:47:20 +0000","description":"Session hijacking, also known as session stealing, is an attack where an unauthorized person takes over a user's session","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Session Hijacking.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Session Hijacking
-----------------

Session hijacking, also known as session stealing, is an attack where an unauthorized person takes over a user's session. In the context of web applications, this typically involves gaining control of a user's session in order to impersonate them and perform actions on their behalf.

There are several ways to realize session hijacking : session fixation, man in the middle attack, session ID stealing and XSS.

Session hijacking is mitigated by having a way to identify if a user is the actual owner of a session, or it was stolen, and is being used by someone else. For example, a secondary cookie, the IP address or the browser signature are generally stable. Someone providing a session ID, with a new browser signature should trigger a new identity validation.

`Documentation <https://owasp.org/www-community/attacks/Session_hijacking_attack>`__

See also https://sjinnovation.com/session-and-security-in-php, https://www.freecodecamp.org/news/php-security-vulnerabilities/

Related : :ref:`Session Fixation <session-fixation>`, :ref:`Session <session>`, :ref:`Man In The Middle <man-in-the-middle>`
