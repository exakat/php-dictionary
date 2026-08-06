# Passphrase
A passphrase is a longer and more critical password. It may be build by combining several words, hence building a phrase.

Because a passphrase is typically longer than a conventional password, often four or more randomly chosen words following the Diceware method, it carries substantially more entropy while remaining easier for a human to memorize and type than an equivalent-strength string of random characters and symbols.

Passphrases used as passwords are hashed and verified like any other password with ``password_hash()``/``password_verify()``, using the bcrypt or Argon2 algorithms. They are also common as input to key-derivation functions: ``sodium_crypto_pwhash()`` in the ``sodium`` extension derives a fixed-length encryption or signing key from a passphrase and a salt, and OpenSSL private keys are frequently protected with a passphrase supplied to ``openssl_pkey_export()`` or the ``openssl`` command-line tool.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/passphrase.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/passphrase.html","name":"Passphrase","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:06:12 +0000","dateModified":"Thu, 16 Jul 2026 08:06:12 +0000","description":"A passphrase is a longer and more critical password","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Passphrase.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Passphrase)**
## See Also

+ [Generate Secure, Memorable Passphrases in PHP with PHP Passphrase](https://laravel-news.com/generate-secure-memorable-passphrases-in-php-with-php-passphrase)

## Related

+ [Password API](password-ext.ini.html)
+ [Password](password.ini.html)
+ [Secure Sockets Layer (SSL)](ssl.ini.html)
+ [Word Combination](word-combinaison.ini.html)
