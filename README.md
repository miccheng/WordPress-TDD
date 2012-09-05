WordPress-TDD
=============

Introduction
------------
Test Driven Development with WordPress. Sample codes derived from notes in this [StackOverflow question](http://stackoverflow.com/questions/9138215/unit-testing-wordpress-plugins).

[WordPress Testing framework](https://github.com/nb/wordpress-tests) developed by [Nikolay Bachiyski](http://nikolay.bg/). His framework is a wrapper around [PHPUnit](http://phpunit.de) and is now being integrated as the defacto test runner in [WordPress Unit Tests](http://unit-tests.trac.wordpress.org) for the WordPress Core.

Setup
------------
1. Clone this Git Repository

	$ git clone git://github.com/miccheng/WordPress-TDD.git

2. Initialize Git submodule for [WordPress-Tests](https://github.com/nb/wordpress-tests).

    $ git submodule init
	$ git submodule update

3. Copy `my-plugin` folder into your current WordPress installation.
4. Enable the MyPlugin module.
5. Copy `WordPress-Tests` folder to the same folder level as your WordPress installation.
6. Copy `unittests-config-sample.php` to `unittests-config.php`. Edit the new file and update the database, path setting.
7. In console/terminal, `cd` to the `my-plugin` folder.
8. Type: `phpunit`.

Next Steps
----------
* Refer to my slides on SpeakerDeck ([TDD for PHP  -https://speakerdeck.com/u/miccheng/p/test-drive-development-with-php](https://speakerdeck.com/u/miccheng/p/test-drive-development-with-php)) for basics of TDD with [PHPUnit](http://phpunit.de).
* Look inside `my-plugin/tests/` folder for sample of how to write tests for WordPress.