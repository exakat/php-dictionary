# Passphrase
A passphrase is a longer and more critical password. It may be build by combining several words, hence building a phrase.

Because a passphrase is typically longer than a conventional password, often four or more randomly chosen words following the Diceware method, it carries substantially more entropy while remaining easier for a human to memorize and type than an equivalent-strength string of random characters and symbols.

Passphrases used as passwords are hashed and verified like any other password with ``password_hash()``/``password_verify()``, using the bcrypt or Argon2 algorithms. They are also common as input to key-derivation functions: ``sodium_crypto_pwhash()`` in the ``sodium`` extension derives a fixed-length encryption or signing key from a passphrase and a salt, and OpenSSL private keys are frequently protected with a passphrase supplied to ``openssl_pkey_export()`` or the ``openssl`` command-line tool.
## See Also

+ [Generate Secure, Memorable Passphrases in PHP with PHP Passphrase](https://laravel-news.com/generate-secure-memorable-passphrases-in-php-with-php-passphrase)

Related : [Password API](Password API), [Password](Password), [Secure Sockets Layer (SSL)](Secure Sockets Layer (SSL)), [Word Combination](Word Combination)
