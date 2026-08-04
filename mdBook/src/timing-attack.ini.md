# Timing Attack
A timing attack is a type of side-channel attack where an attacker exploits variations in the time it takes for a system to perform operations to infer secret information. Instead of directly breaking cryptographic algorithms, the attacker analyzes how long a system takes to respond to different inputs, revealing clues about the internal state or data.

Timing attacks may be mitigated by using the ``hash_equals()`` function, instead of comparing values with ``===`` or ``==``. 

The attack relies on trying various strings, and detecting when the comparison fails early or late to infer which part of the string is valid or not. 

## See Also

+ [PHP Vulnerabilities: Assessment, Prevention, and Mitigation](https://www.zend.com/blog/php-vulnerabilities)
+ [Timing Attack in Laravel (2022)](https://ephort.dk/blog/laravel-timing-attack-vulnerability)

Related : [Vulnerability](Vulnerability), [Attack](Attack), [hash_equals()](hash_equals()), [DevOps](DevOps), [Rollback](Rollback), [VCS Commit](VCS Commit), [Worktree](Worktree), [Crack](Crack)
