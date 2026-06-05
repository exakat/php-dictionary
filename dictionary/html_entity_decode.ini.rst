.. _html_entity_decode:
.. meta::
	:description:
		html_entity_decode: ``html_entity_decode()`` is a built-in PHP function that converts HTML entities back to their corresponding characters.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: html_entity_decode
	:twitter:description: html_entity_decode: ``html_entity_decode()`` is a built-in PHP function that converts HTML entities back to their corresponding characters
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: html_entity_decode
	:og:type: article
	:og:description: ``html_entity_decode()`` is a built-in PHP function that converts HTML entities back to their corresponding characters
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/html_entity_decode.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"html_entity_decode","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"``html_entity_decode()`` is a built-in PHP function that converts HTML entities back to their corresponding characters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/html_entity_decode.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


html_entity_decode
------------------

``html_entity_decode()`` is a built-in PHP function that converts HTML entities back to their corresponding characters. It is the inverse of ``htmlentities()``.

It is used when HTML-encoded content must be processed as plain text, for example before storing in a database, sending in an email, or comparing strings.

A common security mistake is calling ``html_entity_decode()`` on user-supplied input and then outputting the result in HTML, which can reintroduce XSS vulnerabilities that were previously neutralized. The decode step should only happen when the output context is not HTML.

The flags parameter controls which quotes are decoded: ``ENT_QUOTES`` decodes both double and single quotes. The encoding parameter should be set explicitly to avoid unexpected behavior with multi-byte encodings.


.. code-block:: php
   
   <?php
   
       $html = '&lt;b&gt;Hello &amp; welcome&lt;/b&gt;';
   
       // Converts entities back to characters
       echo html_entity_decode($html, ENT_QUOTES, 'UTF-8');
       // Output: <b>Hello & welcome</b>
   
       // Dangerous: decoding then re-outputting in HTML context re-opens XSS
       $userInput = '&lt;script&gt;alert(1)&lt;/script&gt;';
       echo html_entity_decode($userInput); // outputs <script>alert(1)</script>
   
       // Inverse: htmlentities encodes all applicable characters
       $plain = '<b>Café & Co</b>';
       echo htmlentities($plain, ENT_QUOTES, 'UTF-8');
   
   ?>


`Documentation <https://www.php.net/manual/en/function.html-entity-decode.php>`__

See also `OWASP XSS Prevention Cheat Sheet <https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html>`_.

Related : :ref:`htmlentities() <htmlentities>`, :ref:`htmlspecialchars <htmlspecialchars>`, :ref:`Cross Site Scripting (XSS) <xss>`, :ref:`Security <security>`, :ref:`default_charset <default_charset>`
