.. _rce:
.. meta::
	:description:
		Remote Code Execution (RCE): It is a type of security vulnerability where an attacker can remotely execute arbitrary code on a target server or system.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Remote Code Execution (RCE)
	:twitter:description: Remote Code Execution (RCE): It is a type of security vulnerability where an attacker can remotely execute arbitrary code on a target server or system
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Remote Code Execution (RCE)
	:og:type: article
	:og:description: It is a type of security vulnerability where an attacker can remotely execute arbitrary code on a target server or system
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/rce.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/rce.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/rce.ini.html","name":"Remote Code Execution (RCE)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 21 Jun 2026 19:57:48 +0000","dateModified":"Sun, 21 Jun 2026 19:57:48 +0000","description":"It is a type of security vulnerability where an attacker can remotely execute arbitrary code on a target server or system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Remote Code Execution (RCE).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Remote Code Execution (RCE)
---------------------------

It is a type of security vulnerability where an attacker can remotely execute arbitrary code on a target server or system. This typically happens due to improper input validation, insecure deserialization, vulnerable eval-like functions, or unsafe file handling.

.. code-block:: php
   
   <?php
   
       // direct execution of the incoming 
       shell_exec($_GET['shell']);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Arbitrary_code_execution>`__

See also `RCE via a malicious SVG in mPDF <https://medium.com/@brun0ne/rce-via-a-malicious-svg-in-mpdf-216e613b250b>`_ and `The Quiet Shift Reshaping PHP Security <https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/>`_.

Related : :ref:`Vulnerability <vulnerability>`, :ref:`Local File Inclusion <local-file-inclusion>`, :ref:`Execution <execution>`, :ref:`php://filter <php-filter>`, :ref:`Static Application Security Testing (SAST) <sast>`, :ref:`Shell Exec <shell-exec>`
