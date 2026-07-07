.. _short_open_tag:
.. _short-open-tag-directive:
.. meta::
	:description:
		short_open_tag: ``short_open_tag`` is a php.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: short_open_tag
	:twitter:description: short_open_tag: ``short_open_tag`` is a php
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: short_open_tag
	:og:type: article
	:og:description: ``short_open_tag`` is a php
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/short_open_tag.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/The backtick (`) operator is deprecated, use shell_exec() instead.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/The backtick (`) operator is deprecated, use shell_exec() instead.html","name":"short_open_tag","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 19:32:10 +0000","dateModified":"Mon, 06 Jul 2026 19:32:10 +0000","description":"``short_open_tag`` is a php","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/short_open_tag.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


short_open_tag
--------------

``short_open_tag`` is a php.ini directive that controls whether the short PHP opening tag ``<?`` is recognised by the parser.

When ``short_open_tag = Off``, only ``<?php`` and ``<?=`` are valid opening tags. This is the recommended setting and the default since version 7.0.

The directive also affects ASP-style tags ``<% %>``, which were removed entirely in version 7.0.

Using short tags in production code is discouraged because the code breaks silently when ``short_open_tag`` is disabled, which frequently happens on shared hosting or when moving between environments.

.. code-block:: php
   
   <?php
       // php.ini
       // short_open_tag = Off   (recommended)
       // short_open_tag = On    (legacy / risky)
       
       // With short_open_tag = On, these are equivalent:
       //   <?php echo $x; ?>
       //   <? echo $x; ?>
       
       // <?= is always available since PHP 5.4, regardless of the directive.
       echo $x;
   ?>


`Documentation <https://www.php.net/manual/en/ini.core.php#ini.short-open-tag>`__

See also `PHP RFC: Deprecate short open tags, again <https://wiki.php.net/rfc/deprecate_php_short_tags_v2>`_.

Related : :ref:`Short Tags <short-tag>`, :ref:`Open Tag <open-tag>`, :ref:`Echo Tag <echo-tag>`, :ref:`Close Tag <close-tag>`, :ref:`PHP Tags <php-tag>`, :ref:`php\.ini <php.ini>`
