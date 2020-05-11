[![CI Workflow](https://github.com/ariannasg/MumblingKata/workflows/CI%20Workflow/badge.svg)](https://github.com/ariannasg/MumblingKata/actions?query=workflow%3A%22CI+Workflow%22)
[![Contributor Covenant](https://img.shields.io/badge/Contributor%20Covenant-v2.0%20adopted-ff69b4.svg)](.github/CONTRIBUTING.md)
[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE.md)

# Mumbling Kata

* [Description](#description)
* [Objectives](#objectives)
* [Local setup](#local-setup)
* [Testing](#testing)
* [Contributing](#contributing)
* [License](#license)

## Description
The goal of this kata is to implement the mumble_letters() method which takes a string as input and returns a formatted output string. The output string contains sequences of repeating letters with each letter repeated a number of times based on its position in the input string i.e. the 3rd letter in the string is repeated 3 times. Each sequence of repeated letters is separated with a hyphen(-) and the first letter of each sequence is capitalised.

The following examples illustrate the mumble_letters() method:
```
mumble_letters("a")
=> "A"

mumble_letters("abC")
=> "A-Bb-Ccc"

mumble_letters("aBCd")
=> "A-Bb-Ccc-Dddd"

mumble_letters("QWERTY")
=> "Q-Ww-Eee-Rrrr-Ttttt-Yyyyyy"
```

## Objectives
Solve this kata for practicing TDD.

## Local setup
Follow these instructions to get the project up and running for local development and testing purposes:
- Install php 7.3 (7.1 EOL soon): https://php-osx.liip.ch/.
- Configure the IDE CLI Interpreter to use php 7.3.
- Install composer (https://getcomposer.org/) and confirm the installation was successful by running:
    ```
    composer --version
    ```
- Install project dependencies (min dependencies are phpunit, phpstan and roave security):
    ```
    make install
    ```
- Configure the IDE Test Framework: https://www.jetbrains.com/help/phpstorm/using-phpunit-framework.html.
- The project already provides a phpunit configuration template that will be used when running tests via the Makefile.
Add a replica of the tests run configuration in the IDE for easier development.

## Testing
Command for running all tests:
```
make test
```

## Contributing
Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for understanding the code of conduct.

### License
This project is licensed under the terms of the MIT License.
Please see [LICENSE](LICENSE.md) for details.