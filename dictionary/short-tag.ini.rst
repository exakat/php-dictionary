.. _short-tag:
.. _short-open-tag:
.. meta::
	:description:
		Short Tags: PHP uses special tags to identify code that has to be executed.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Short Tags
	:twitter:description: Short Tags: PHP uses special tags to identify code that has to be executed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Short Tags
	:og:type: article
	:og:description: PHP uses special tags to identify code that has to be executed
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/short-tag.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Short Tags","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:52:45 +0000","dateModified":"Wed, 21 Jan 2026 08:52:45 +0000","description":"PHP uses special tags to identify code that has to be executed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Short Tags.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Short Tags
----------

PHP uses special tags to identify code that has to be executed. The short tags are a special set of PHP tag, shorter than the usual ``<?php``. It was simply ``<?``.

Short tags may be disabled in PHP configuration, with the ``short_open_tag`` directive. 

Short tags are different from echo tags : those tags immediately display data.

From the manual : As short tags can be disabled it is recommended to only use the normal tags (<?php ?> and <?= ?>) to maximise compatibility.

.. code-block:: php
   
   <?php
   
   echo 1;
   ?>
   
   <? 
   // this is a short tag
   echo 2;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.basic-syntax.phptags.php>`__

See also https://wiki.php.net/rfc/deprecate_php_short_tags_v2

Related : :ref:`PHP Tags <php-tag>`, :ref:`Echo Tag <echo-tag>`, :ref:`Open Tag <open-tag>`
