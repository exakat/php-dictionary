.. _attack-surface:
.. meta::
	:description:
		Attack Surface: The attack surface of an application is the sum of all the different points where an attacker could try to enter data, extract data, or trigger unintended behavior.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Attack Surface
	:twitter:description: Attack Surface: The attack surface of an application is the sum of all the different points where an attacker could try to enter data, extract data, or trigger unintended behavior
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Attack Surface
	:og:type: article
	:og:description: The attack surface of an application is the sum of all the different points where an attacker could try to enter data, extract data, or trigger unintended behavior
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/attack-surface.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/attack-surface.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/attack-surface.ini.html","name":"Attack Surface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 28 Jun 2026 10:18:41 +0000","dateModified":"Sun, 28 Jun 2026 10:18:41 +0000","description":"The attack surface of an application is the sum of all the different points where an attacker could try to enter data, extract data, or trigger unintended behavior","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Attack Surface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Attack Surface
--------------

The attack surface of an application is the sum of all the different points where an attacker could try to enter data, extract data, or trigger unintended behavior. The larger the attack surface, the more opportunities exist for exploitation.

In applications, the attack surface spans several layers:

+ Application code: input handling, query construction, file operations, serialization and deserialization.
+ Infrastructure endpoints: ``PHP-FPM`` status pages, API diagnostic routes, health-check URLs: operational tooling that is often less hardened than the main application.
+ Dependencies: every third-party package added to a project extends the attack surface with its own code, its own vulnerabilities, and its own transitive dependencies.
+ PHP extensions and shared libraries: native extensions wrap C libraries whose vulnerabilities directly affect the PHP process.

A key principle is that every new feature or integration expands the attack surface. Modernizing a stack can improve security in many dimensions while simultaneously opening new areas that must be understood and managed.

Reducing attack surface is itself a security strategy: disabling unused extensions, hiding diagnostic endpoints behind authentication, limiting the PHP functions available via ``disable_functions``, and keeping dependencies minimal all shrink the area an attacker can target.

.. code-block:: php
   
   <?php
   
   // FPM status endpoint operational tooling that increases attack surface
   // if exposed without access controls
   // nginx config: location /status { fastcgi_pass php-fpm; }
   
   // Restricting attack surface via disable_functions in php.ini:
   // disable_functions = exec, shell_exec, system, passthru, popen
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Attack_surface>`__

See also `The Quiet Shift Reshaping PHP Security <https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/>`_ and `OWASP: Attack Surface Analysis Cheat Sheet <https://cheatsheetseries.owasp.org/cheatsheets/Attack_Surface_Analysis_Cheat_Sheet.html>`_.

Related : :ref:`Attack <attack>`, :ref:`Vulnerability <vulnerability>`, :ref:`Security <security>`, :ref:`FastCGI Process Manager (FPM) <fpm>`, :ref:`Simple Object Access Protocol (SOAP) <soap>`, :ref:`Dependency <dependency>`, :ref:`Supply Chain Attack <supply-chain-attack>`, :ref:`Disable Functions <disable-functions>`, :ref:`Hardening <hardening>`, :ref:`PHP Extensions <php-extension>`
