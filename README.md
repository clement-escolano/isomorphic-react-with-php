# Example of an Isomorphic React application in PHP

This is a simple example to create an isomorphic React application in PHP.

## Getting started

To launch the project, you need:
* [NPM](https://www.npmjs.com)
* [composer](https://getcomposer.org/)
* [php](https://secure.php.net/)
* [v8js](http://php.net/v8js)

### Installation

Clone the repository and enter the main directory.

Install node dependencies by running:
```bash
npm install
```

Then install composer dependencies by running:
```bash
composer install
```
Finally, build the React bundle by running:
```bash
npm run make
```

### Launching the server

To launch the server, run:
```bash
php -S localhost:8080
```
Access the main application here: `http://localhost:8080/app/php`
