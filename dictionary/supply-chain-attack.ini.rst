.. _supply-chain-attack:

Supply Chain Attack
-------------------

Supply Chain Attack is a security attack that uses dependencies to infect a program.

Modern applications are built on top of components which are fetched from central repositories. In the PHP world, composer is the most popular PHP repository.

When those external repositories are infected with malicious component or code, the dependency manager loads them like the rest of the code. Blind trust in the imported code lead to vulnerabilities.



`Documentation <https://en.wikipedia.org/wiki/Supply_chain_attack>`__

See also `PHP Supply Chain Attack on Composer <https://blog.sonarsource.com/php-supply-chain-attack-on-composer/>`_
