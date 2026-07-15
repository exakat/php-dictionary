.. _insecure-deserialization:
.. _php-object-injection:
.. meta::
	:description:
		Insecure Deserialization: Insecure deserialization is a vulnerability that occurs when untrusted data is deserialized without sufficient validation, allowing an attacker to manipulate the serialized object to execute arbitrary code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Insecure Deserialization
	:twitter:description: Insecure Deserialization: Insecure deserialization is a vulnerability that occurs when untrusted data is deserialized without sufficient validation, allowing an attacker to manipulate the serialized object to execute arbitrary code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Insecure Deserialization
	:og:type: article
	:og:description: Insecure deserialization is a vulnerability that occurs when untrusted data is deserialized without sufficient validation, allowing an attacker to manipulate the serialized object to execute arbitrary code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/insecure-deserialization.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/insecure-deserialization.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/insecure-deserialization.ini.html","name":"Insecure Deserialization","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:31:41 +0000","dateModified":"Thu, 09 Jul 2026 08:31:41 +0000","description":"Insecure deserialization is a vulnerability that occurs when untrusted data is deserialized without sufficient validation, allowing an attacker to manipulate the serialized object to execute arbitrary code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Insecure Deserialization.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Insecure Deserialization
------------------------

Insecure deserialization is a vulnerability that occurs when untrusted data is deserialized without sufficient validation, allowing an attacker to manipulate the serialized object to execute arbitrary code.

The most common vector is the native ``unserialize()`` function. When user-controlled data is passed to ``unserialize()``, an attacker can craft a malicious serialized payload that instantiates arbitrary classes available in the application's scope. By targeting classes that implement magic methods such as ``__wakeup()``, ``__destruct()``, or ``__toString()``, the attacker can chain method calls, known as a Property Oriented Programming chain, to achieve remote code execution.

OWASP lists insecure deserialization as one of the Top 10 web application security risks.

Mitigations include: never deserializing untrusted data with native ``unserialize()``; using safer formats such as JSON; using the ``allowed_classes`` option to whitelist permitted classes; and using HMAC signatures to authenticate serialized payloads.

.. code-block:: php
   
   <?php
   
       // VULNERABLE: passing user input directly to unserialize()
       $data = $_GET['data'];
       $obj  = unserialize($data); // Dangerous!
       
       // SAFER: use JSON for untrusted data
       $obj = json_decode($_GET['data']);
       
       // SAFER: restrict allowed classes when unserialize is necessary
       $obj = unserialize($data, ['allowed_classes' => [MyValueObject::class]]);
   
   ?>


`Documentation <https://owasp.org/www-community/vulnerabilities/PHP_Object_Injection>`__

See also `OWASP Top 10 A8: Insecure Deserialization <https://owasp.org/www-project-top-ten/2017/A8_2017-Insecure_Deserialization>`_, `Developing a custom gadget chain for PHP deserialization <https://portswigger.net/web-security/deserialization/exploiting/lab-deserialization-developing-a-custom-gadget-chain-for-php-deserialization>`_ and `The Quiet Shift Reshaping PHP Security <https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/>`_.

Related : :ref:`Serialization <serialization>`, :ref:`Unserialization <unserialize>`, :ref:`Object Injection <object-injection>`, :ref:`__wakeup() Method <-__wakeup>`, :ref:`__unserialize() Method <-__unserialize>`, :ref:`Attack <attack>`, :ref:`Vulnerability <vulnerability>`, :ref:`OWASP <owasp>`, :ref:`Security <security>`, :ref:`Pop <pop>`, :ref:`Static Application Security Testing (SAST) <sast>`
