# Password
A password is a secret or confidential string of characters that is used for authentication and access control to verify the identity of a user. Passwords are commonly employed in computer systems, online accounts, and various digital devices to protect sensitive information and restrict unauthorized access.

The primary purpose of a password is to ensure that only authorized users can access a particular system, network, application, or account. When a user attempts to log in, they are typically required to enter a username or user ID along with their corresponding password. If the entered password matches the stored or expected password for that user, access is granted.

Passwords are a fundamental component of security measures, and it's important for users to choose strong and unique passwords to enhance the security of their accounts. Strong passwords often include a combination of uppercase and lowercase letters, numbers, and special characters, making them more resistant to unauthorized access through brute-force attacks or other security breaches. Additionally, it's recommended to use different passwords for different accounts to minimize the impact of a potential security compromise.

Password is also an extension for hashing.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/password.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/password.html","name":"Password","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:08:30 +0000","dateModified":"Sat, 11 Jul 2026 09:08:30 +0000","description":"A password is a secret or confidential string of characters that is used for authentication and access control to verify the identity of a user","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/password.html"]}],"keywords":["security"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/password-ext.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/passphrase.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/secret.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/privacy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/otp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hard-coded.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sso.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.password.php"},{"@type":"CreativeWork","name":"Generate a Secure Password in PHP (2025 Version)","url":"https:\/\/oxomichael.github.io\/en\/posts\/2025-07-08-generate-secure-password-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"password"}]}]}</script>
```php
<?php

    $ftp_server = 'ftp.example.com';
    $ftp_user = 'foo';
    $ftp_pass = 'bar';
    
    // Set up a simple connexion
    $ftp = ftp_connect($ftp_server);

?>
```

**[Documentation](https://www.php.net/manual/en/book.password.php)**
## See Also

+ [Generate a Secure Password in PHP (2025 Version)](https://oxomichael.github.io/en/posts/2025-07-08-generate-secure-password-php/)

## Related

+ [Password API](password-ext.html)
+ [Passphrase](passphrase.html)
+ [Secret](secret.html)
+ [Privacy](privacy.html)
+ [One-Time Password (OTP)](otp.html)
+ [Crack](crack.html)
+ [Hard Coded](hard-coded.html)
+ [Single Sign On (SSO)](sso.html)
