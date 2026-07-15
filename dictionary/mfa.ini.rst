.. _mfa:
.. _two-factor-authentication:
.. _2fa:
.. _multi-factor:
.. meta::
	:description:
		Multi-Factor Authentication (MFA): Multi-Factor Authentication (MFA) is a security mechanism that requires a user to provide two or more independent verification factors before access is granted.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Multi-Factor Authentication (MFA)
	:twitter:description: Multi-Factor Authentication (MFA): Multi-Factor Authentication (MFA) is a security mechanism that requires a user to provide two or more independent verification factors before access is granted
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Multi-Factor Authentication (MFA)
	:og:type: article
	:og:description: Multi-Factor Authentication (MFA) is a security mechanism that requires a user to provide two or more independent verification factors before access is granted
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/mfa.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/mfa.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/mfa.ini.html","name":"Multi-Factor Authentication (MFA)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 07:44:10 +0000","dateModified":"Tue, 07 Jul 2026 07:44:10 +0000","description":"Multi-Factor Authentication (MFA) is a security mechanism that requires a user to provide two or more independent verification factors before access is granted","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Multi-Factor Authentication (MFA).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Multi-Factor Authentication (MFA)
---------------------------------

Multi-Factor Authentication (MFA) is a security mechanism that requires a user to provide two or more independent verification factors before access is granted. The three classical factors are:

+Something you know: a password or PIN.
+Something you have: a hardware token, authenticator app, TOTP/HOTP, or SMS code.
+Something you are: a biometric such as a fingerprint or face recognition.

Requiring at least two factors dramatically reduces the risk of account compromise: stealing a password alone is no longer enough.

In the PHP ecosystem, MFA is relevant both at the application level (protecting user accounts) and at the infrastructure level. Packagist, for example, has introduced mandatory MFA for package publishers to harden the supply chain against account takeover.

PHP itself does not ship MFA libraries, but the ecosystem offers several: ``scheb/2fa-bundle`` (Symfony), ``pragmarx/google2fa`` (Laravel), and generic TOTP/HOTP packages.

.. code-block:: php
   
   <?php
   
   use OTPHP\TOTP;
   
   // Generate a TOTP secret for a user at enrolment time
   $totp   = TOTP::generate();
   $secret = $totp->getSecret(); // store this in the user record
   
   // At login time, verify the code the user typed
   $userCode = $_POST['totp_code'];
   if (!$totp->verify($userCode)) {
       throw new RuntimeException('Invalid MFA code');
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Multi-factor_authentication>`__

See also `The Quiet Shift Reshaping PHP Security <https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/>`_ and `NIST SP 800-63B: MFA guidelines <https://pages.nist.gov/800-63-3/sp800-63b.html>`_.

Related : :ref:`Authentication <authentication>`, :ref:`One-Time Password (OTP) <otp>`, :ref:`Single Sign On (SSO) <sso>`, :ref:`OAuth <oauth>`, :ref:`Password <password>`, :ref:`Security <security>`, :ref:`Supply Chain Attack <supply-chain-attack>`, :ref:`Packagist <packagist>`

Related packages : `scheb/2fa-bundle <https://packagist.org/packages/scheb/2fa-bundle>`_, `pragmarx/google2fa <https://packagist.org/packages/pragmarx/google2fa>`_, `spomky-labs/otphp <https://packagist.org/packages/spomky-labs/otphp>`_
