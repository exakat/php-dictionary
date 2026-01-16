.. _email:
.. meta::
	:description:
		Email: Email, short for electronic mail, is a method of exchanging digital messages between people using electronic devices.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Email
	:twitter:description: Email: Email, short for electronic mail, is a method of exchanging digital messages between people using electronic devices
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Email
	:og:type: article
	:og:description: Email, short for electronic mail, is a method of exchanging digital messages between people using electronic devices
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/email.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Email","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 18:29:07 +0000","dateModified":"Fri, 16 Jan 2026 18:29:07 +0000","description":"Email, short for electronic mail, is a method of exchanging digital messages between people using electronic devices","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Email.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Email
-----

Email, short for electronic mail, is a method of exchanging digital messages between people using electronic devices. These messages can contain text, attachments, images, and other multimedia elements. Email is a widely used communication tool for both personal and professional purposes.

PHP can send emails with the ``mail()`` function. PHP doesn't receive emails, as it requires a server, so it relies on the ``imap`` extension. 

PHP also offers special filter to validate email addresses, with the filter extension.

.. code-block:: php
   
   <?php
   
   $to = destination@example.com;
   $subject = Test Email;
   $message = This is a test email.;
   
   // Send the email
   mail($to, $subject, $message);
   
   ?>


`Documentation <https://www.php.net/manual/fr/function.mail.php>`__

Related : :ref:`filter <filter>`

Related packages : `phpmailer/phpmailer <https://packagist.org/packages/phpmailer/phpmailer>`_, `symfony/mailer <https://packagist.org/packages/symfony/mailer>`_, `swiftmailer/swiftmailer <https://packagist.org/packages/swiftmailer/swiftmailer>`_, `php-imap/php-imap <https://packagist.org/packages/php-imap/php-imap>`_
