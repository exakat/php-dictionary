.. _mail:
.. meta::
	:description:
		Mail: ``mail()`` is the PHP native function that sends emails.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Mail
	:twitter:description: Mail: ``mail()`` is the PHP native function that sends emails
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Mail
	:og:type: article
	:og:description: ``mail()`` is the PHP native function that sends emails
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/mail.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Mail","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 30 Mar 2026 19:48:34 +0000","dateModified":"Mon, 30 Mar 2026 19:48:34 +0000","description":"``mail()`` is the PHP native function that sends emails","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Mail.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Mail
----

``mail()`` is the PHP native function that sends emails. It is a realy to system commands that actually send the mail.

``mail()`` does not provide support to structure mail, in particular attachements. This is left to custom components, such as PHPMailer.

.. code-block:: php
   
   <?php
   
       $message = World;
   
       mail('contact@php.net', 'Hello!', $message);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.mail.php>`__

See also https://www.mailersend.com/blog/php-send-email, https://www.mailslurp.com/blog/php-mail-function/

Related : :ref:`Simple Mail Transfer Protocol (SMTP) <smtp>`

Related packages : `phpmailer/phpmailer <https://packagist.org/packages/phpmailer/phpmailer>`_
