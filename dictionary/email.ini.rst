.. _email:
.. meta::
	:description:
		Email: Email, short for electronic mail, is a method of exchanging digital messages between people using electronic devices.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Email
	:twitter:description: Email: Email, short for electronic mail, is a method of exchanging digital messages between people using electronic devices
	:twitter:creator: @exakat
	:og:title: Email
	:og:type: article
	:og:description: Email, short for electronic mail, is a method of exchanging digital messages between people using electronic devices
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/email.ini.html
	:og:locale: en


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

Related : :ref:`Validation <filter>`

Related packages : `phpmailer/phpmailer <https://packagist.org/packages/phpmailer/phpmailer>`_, `symfony/mailer <https://packagist.org/packages/symfony/mailer>`_, `swiftmailer/swiftmailer <https://packagist.org/packages/swiftmailer/swiftmailer>`_, `php-imap/php-imap <https://packagist.org/packages/php-imap/php-imap>`_
