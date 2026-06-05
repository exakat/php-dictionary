.. _privacy:
.. _data-privacy:
.. _gdpr:
.. _personal-data:
.. meta::
	:description:
		Privacy: Privacy in software refers to the protection of personal and sensitive user data.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Privacy
	:twitter:description: Privacy: Privacy in software refers to the protection of personal and sensitive user data
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Privacy
	:og:type: article
	:og:description: Privacy in software refers to the protection of personal and sensitive user data
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/privacy.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Too few arguments.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Too few arguments.html","name":"Privacy","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"Privacy in software refers to the protection of personal and sensitive user data","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Privacy.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Privacy
-------

Privacy in software refers to the protection of personal and sensitive user data. It encompasses both legal obligations, such as GDPR in the EU, CCPA in California, LGPD in Brazil, and technical measures that prevent unauthorised collection, storage, processing, or disclosure of personal information.

In applications, privacy considerations include:

+ Minimising data collection: only collecting data that is strictly necessary
+ Encryption: storing sensitive data, such as passwords, secrets, personal informatin, in encrypted or hashed form
+ Anonymisation and pseudonymisation: replacing identifying information with tokens or hashes
+ Consent management: obtaining and recording user consent before collecting data
+ Data retention policies: deleting data after its retention period expires
+ Access controls: restricting which parts of the application can read personal data
+ Audit trails: logging access to sensitive data
+ Secure transmission: using HTTPS and TLS for all data in transit

PHP's ``SensitiveParameter`` attribute prevents sensitive argument values from appearing in stack traces.

.. code-block:: php
   
   <?php
   
   // PHP 8.2+: SensitiveParameter prevents the value from appearing in stack traces
   function authenticate(
       string $username,
       #[\SensitiveParameter] string $password
   ): bool {
       // ...
       return password_verify($password, getStoredHash($username));
   }
   
   // Anonymising an email address for logging
   function anonymizeEmail(string $email): string
   {
       [$local, $domain] = explode('@', $email);
       return substr($local, 0, 2) . '***@' . $domain;
   }
   
   ?>


`Documentation <https://gdpr-info.eu/>`__

See also `GDPR full text <https://gdpr-info.eu/>`_, `PHP SensitiveParameter attribute <https://www.php.net/manual/en/class.sensitiveparameter.php>`_ and `OWASP Privacy Risks <https://owasp.org/www-project-top-10-privacy-risks/>`_.

Related : :ref:`Security <security>`, :ref:`Compliance <compliance>`, :ref:`Anonymize <anonymize>`, :ref:`Sensitive Parameter <sensitiveparameter>`, :ref:`Cryptography <cryptography>`, :ref:`Audit Trail <audit-trail>`, :ref:`Authentication <authentication>`, :ref:`Data Leak <data-leak>`, :ref:`Password API <password-ext>`, :ref:`Password <password>`, :ref:`Secret <secret>`
