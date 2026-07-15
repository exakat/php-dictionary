.. _xss:
.. meta::
	:description:
		Cross Site Scripting (XSS): It's a web security vulnerability where an attacker injects malicious JavaScript into a website, and that script then runs in other users' browsers.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cross Site Scripting (XSS)
	:twitter:description: Cross Site Scripting (XSS): It's a web security vulnerability where an attacker injects malicious JavaScript into a website, and that script then runs in other users' browsers
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cross Site Scripting (XSS)
	:og:type: article
	:og:description: It's a web security vulnerability where an attacker injects malicious JavaScript into a website, and that script then runs in other users' browsers
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/xss.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/xss.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/xss.ini.html","name":"Cross Site Scripting (XSS)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 21 Jun 2026 19:57:33 +0000","dateModified":"Sun, 21 Jun 2026 19:57:33 +0000","description":"It's a web security vulnerability where an attacker injects malicious JavaScript into a website, and that script then runs in other users' browsers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Cross Site Scripting (XSS).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Cross Site Scripting (XSS)
--------------------------

It's a web security vulnerability where an attacker injects malicious JavaScript into a website, and that script then runs in other users' browsers.

XSS happens when a Web application accepts user input, fails to validate it property. That input is used in the resulting web page, and it executes there, either as HTML or javascript or any other available resource.

XSS is dangerous as it allows the attacker to steal important information such as cookies, impersonate the usage, read or modify the page content.

`Documentation <https://owasp.org/www-community/attacks/xss/>`__

See also `PHP Security 3: XSS and Password Storage <https://www.acunetix.com/websitesecurity/php-security-3/>`_, `What is cross-site scripting (XSS) and how to prevent it? <https://portswigger.net/web-security/cross-site-scripting>`_ and `The Quiet Shift Reshaping PHP Security <https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/>`_.

Related : :ref:`Cross Site Request Forgery (CSRF) <csrf>`, :ref:`html_entity_decode <html_entity_decode>`, :ref:`htmlspecialchars <htmlspecialchars>`, :ref:`Static Application Security Testing (SAST) <sast>`, :ref:`Session Hijacking <session-highjacking>`, :ref:`Vulnerability <vulnerability>`, :ref:`Anchor <anchor>`, :ref:`CSS <css>`, :ref:`Escape Character <escape-character>`, :ref:`Link <link>`, :ref:`HTML Entity <html-entity>`
