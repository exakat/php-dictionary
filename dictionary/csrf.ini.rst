.. _csrf:
.. _xsrf:
.. meta::
	:description:
		Cross Site Request Forgery (CSRF): A ``CSRF``, or ``XSRF`` attack happens when a malicious website tricks a logged-in user's browser into sending an unwanted request to another application.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cross Site Request Forgery (CSRF)
	:twitter:description: Cross Site Request Forgery (CSRF): A ``CSRF``, or ``XSRF`` attack happens when a malicious website tricks a logged-in user's browser into sending an unwanted request to another application
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cross Site Request Forgery (CSRF)
	:og:type: article
	:og:description: A ``CSRF``, or ``XSRF`` attack happens when a malicious website tricks a logged-in user's browser into sending an unwanted request to another application
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/csrf.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/csrf.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/csrf.ini.html","name":"Cross Site Request Forgery (CSRF)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 14:57:20 +0000","dateModified":"Wed, 08 Jul 2026 14:57:20 +0000","description":"A ``CSRF``, or ``XSRF`` attack happens when a malicious website tricks a logged-in user's browser into sending an unwanted request to another application","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Cross Site Request Forgery (CSRF).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Cross Site Request Forgery (CSRF)
---------------------------------

A ``CSRF``, or ``XSRF`` attack happens when a malicious website tricks a logged-in user's browser into sending an unwanted request to another application. CSRF requires both an intermediate website and a victim website.

``CSRF`` is often confused with SSRF, the server-side request forgery, but the two are distinct: ``CSRF`` forges a request from the victim's browser, while ``SSRF`` forges a request from the server itself.

`Documentation <https://en.wikipedia.org/wiki/Cross-site_request_forgery>`__

See also `CSRF vs XSS: What are their similarity and differences <https://brightsec.com/blog/csrf-vs-xss/>`_ and `Cross Site Request Forgery (CSRF) <https://owasp.org/www-community/attacks/csrf>`_.

Related : :ref:`Cross Site Scripting (XSS) <xss>`, :ref:`Server-Side Request Forgery (SSRF) <ssrf>`, :ref:`Nonce <nonce>`, :ref:`hash_equals() <hash_equals>`, :ref:`Static Application Security Testing (SAST) <sast>`, :ref:`Session Hijacking <session-highjacking>`, :ref:`Vulnerability <vulnerability>`
