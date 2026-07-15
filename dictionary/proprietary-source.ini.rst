.. _proprietary-source:
.. _proprietary:
.. meta::
	:description:
		Proprietary Source: Proprietary source code is software whose source code is not publicly available and is protected by copyright and licensing restrictions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Proprietary Source
	:twitter:description: Proprietary Source: Proprietary source code is software whose source code is not publicly available and is protected by copyright and licensing restrictions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Proprietary Source
	:og:type: article
	:og:description: Proprietary source code is software whose source code is not publicly available and is protected by copyright and licensing restrictions
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/proprietary-source.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/proprietary-source.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/proprietary-source.ini.html","name":"Proprietary Source","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 29 Jun 2026 09:38:51 +0000","dateModified":"Mon, 29 Jun 2026 09:38:51 +0000","description":"Proprietary source code is software whose source code is not publicly available and is protected by copyright and licensing restrictions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Proprietary Source.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Proprietary Source
------------------

Proprietary source code is software whose source code is not publicly available and is protected by copyright and licensing restrictions. Unlike open-source software, proprietary software cannot be freely studied, modified, or redistributed.

Proprietary PHP source may be distributed as encoded files, with ionCube, SourceGuardian, or Zend Guard; as compiled extensions, or simply as closed-source packages distributed through private Composer repositories.

Protecting PHP source code is challenging because PHP is an interpreted language. Encoding tools obfuscate the bytecode, but the original logic can sometimes be reverse-engineered. PHP extensions written in C can also ship precompiled as ``.so`` / ``.dll`` files and are harder to analyse.

The distinction between proprietary and open-source matters for security audits, license compliance, and vendor lock-in assessments.

.. code-block:: php
   
   <?php
   
       // Proprietary library loaded as an encoded file (ionCube example)
       // The actual source is not readable; only the encoded .php file is shipped.
       require 'licensed-module.php';
   
       $service = new ProprietaryService();
       $service->run();
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Proprietary_software>`__

See also `ionCube PHP Encoder <https://www.ioncube.com/php_encoder.php>`_, `SourceGuardian <https://www.sourceguardian.com/>`_ and `Zend Guard <https://www.zend.com/products/zend-guard>`_.

Related : :ref:`Open Source <open-source>`, :ref:`Licence <license>`, :ref:`Obfuscation <obfuscation>`, :ref:`Composer <composer>`, :ref:`Free <free>`, :ref:`Licence <licence>`
