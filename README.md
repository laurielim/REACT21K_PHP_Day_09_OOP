# Object Oriented Programming with Symfony

This repo contains the class exercise we did on day 9 of the [Programming in PHP](https://github.com/laurielim/REACT21K_PHP) course which is part of the Full Stack Web Development Program at [Business College Helsinki](https://en.bc.fi/qualifications/full-stack-web-developer-program/). It's a continuation of the previous lessons we had. It is also [hosted on Heroku](//obscure-journey-43772.herokuapp.com).

An SQL database was also enabled with CRUD commands implemented. The local db is running on SQLite and the hosted version uses Heroku Postrgres.

## Technologies used

Built with:

- PHP
- Symfony
- SQLite/PostgreSQL

Hosted on:

- Heroku

## Setup and Usage

```bash
composer require maker
composer require orm
```

## Sources

[Initial Project](https://github.com/phamt6/symfony_learning)

## Acknowledgment

Mentor: Hoang Pham

- [GitHub](https://github.com/phamt6) @phamt6
- [LinkedIn](https://www.linkedin.com/in/tienhoangpham/)

## Class Exercise

### Key Interface - Specs explained

- Database (class Bank in my case) saves an array of BankAccounts, can insert, find and delete BankAccount from its saved list of BankAccounts.
- Database shouldn’t allow insertion of a new account that shares the same key with an existing account
- Each BankAccount keeps a key: Key, balance: number, and has a deposit method that allows top up, a getBalance method that returns balance, and a getKey methods that returns the Key when asked
- Key has equals method to compare two Keys and return either true or false, and getNumber that returns the actual numerical key when asked
