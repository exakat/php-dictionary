.. _delayedtargetvalidation:
.. meta::
	:description:
		delayedtargetvalidation: The DelayedTargetValidation attribute is meant to make other PHP engine attributes optional.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: delayedtargetvalidation
	:twitter:description: delayedtargetvalidation: The DelayedTargetValidation attribute is meant to make other PHP engine attributes optional
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: delayedtargetvalidation
	:og:type: article
	:og:description: The DelayedTargetValidation attribute is meant to make other PHP engine attributes optional
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/delayedtargetvalidation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"delayedtargetvalidation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Sep 2025 19:53:52 +0000","dateModified":"Fri, 19 Sep 2025 19:53:52 +0000","description":"The DelayedTargetValidation attribute is meant to make other PHP engine attributes optional","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/delayedtargetvalidation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


delayedtargetvalidation
-----------------------

The DelayedTargetValidation attribute is meant to make other PHP engine attributes optional. It will shut down complains from the PHP engine for attributes, allowing for future compatibility.

.. code-block:: php
   
   <?php
   class Child extends Base {
       #[\DelayedTargetValidation]
           #[\Override]
           const NAME ='Child';
   }
   ?>


See also https://scherzer.dev/Blog/20250820-delayed-target-validation, https://wiki.php.net/rfc/delayedtargetvalidation_attribute
