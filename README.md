# PHP Loose Comparison Bug

This repository demonstrates a common but subtle bug in PHP related to loose comparison (==) of different data types.  The `foo()` function intends to compare two values for strict equality. However, due to PHP's loose comparison, the comparison `0 == '0'` evaluates to `true`, leading to unexpected behavior.  The `testFoo()` function demonstrates this with a failing test case.

The `bugSolution.php` file provides a corrected version using strict comparison (===) to avoid this issue.

This is a common mistake in PHP which can lead to difficult to diagnose errors.