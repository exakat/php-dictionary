# Static Code Analysis (SCA)
Static code analysis, or SCA, analyze the source code: it reports possible bugs, conventions violations, incorrect structures, vulnerabilities, versions or OS portability incompatibilities, etc. 

PHP includes static code analysis, by reporting a wide range of errors before executing the code, at linting time. Then, the other errors are reported at execution time. SCA works in-between these two phases: after the code compiles, but before it is executed. 

SCA is usually invoked manually, during development time, at commit time, to avoid pushing incorrect code, and in CI/CD pipelines, to ensure it was correctly run.
Related : [Analysis](Analysis), [Audit](Audit), [Autocompletion](Autocompletion), [Static Application Security Testing (SAST)](Static Application Security Testing (SAST)), [Static Single Assignment Form (SSA)](Static Single Assignment Form (SSA)), [Tool](Tool), [Type Checking](Type Checking)
