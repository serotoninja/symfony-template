<div align="center">

<a href="https://symfony.com" target="_blank">
    <img src="https://symfony.com/logos/symfony_black_03.png" width="128" height="154">
</a>

# Symfony Template

#### Dockerized web application development stripped to the boots.
An empty **Symfony 5.4** project hosted on Ubuntu 18.04, Apache 2.4 with PHP 8.0 and MySQL 8.0
#### Ready to use build tools
composer / mysql-client / mysqldump / nodejs / npm / yarn

[![ubuntu:18](https://img.shields.io/badge/ubuntu-18.04-404040.svg?style=flat-square)](https://www.ubuntu.com/)
[![apache:24](https://img.shields.io/badge/apache-2.4-79289b.svg?style=flat-square)](https://httpd.apache.org/)
[![mysql:57](https://img.shields.io/badge/mysql-8.0-aa6617.svg?style=flat-square)](https://www.mysql.com/)
[![php:74](https://img.shields.io/badge/php-7.4-4F5B93.svg?style=flat-square)](https://www.php.net/)
[![composer:21](https://img.shields.io/badge/composer-2-a35c11.svg?style=flat-square)](https://getcomposer.org/)
[![nodejs:14](https://img.shields.io/badge/nodejs-14-333333.svg?style=flat-square)](https://nodejs.org/en/)
[![yarn:122](https://img.shields.io/badge/yarn-1-29799f.svg?style=flat-square)](https://yarnpkg.com/)
[![symfony:54](https://img.shields.io/badge/symfony/*-5.4-374960.svg?style=flat-square)](https://www.symfony.com/)
[![symfony-flex:1](https://img.shields.io/badge/symfony/flex-1.17-374960.svg?style=flat-square)](https://www.symfony.com/)
[![symfony-ux:2](https://img.shields.io/badge/symfony/ux-2.0-374960.svg?style=flat-square)](https://github.com/symfony/ux)
[![jquery:36](https://img.shields.io/badge/jquery-3.6-21568d.svg?style=flat-square)](https://getbootstrap.com/)
[![bootstrap:51](https://img.shields.io/badge/bootstrap-5.1-7952b3.svg?style=flat-square)](https://getbootstrap.com/)
[![bootstrap-icons:51](https://img.shields.io/badge/bootstrap--icons-1.7-7952b3.svg?style=flat-square)](https://icons.getbootstrap.com/)
</div>

---
## Getting started
### 1. Clone the GitHub repository
```bash
$ git clone git@github.com:serotoninja/symfony-template.git
$ cd symfony-template 
```

### 2. Bring the containers up
1. If not already done, install [Docker](https://docs.docker.com/engine/install/) & [Docker Compose](https://docs.docker.com/compose/install/).
2. Run `docker-compose up --build` and stop with `[CTRL]-C` if succeeded.
3. Start containers detached with `docker-compose up -d`. Stop with `docker-compose down` when no longer needed.
4. Use `docker-compose exec web version_check` to see what you're dealing with.
5. Install composer dependencies and retrieve current version of bootstrap-icons:
    ```bash
    $ docker-compose exec web composer install 
    $ docker-compose exec web composer require twbs/bootstrap-icons && \
    cp -R vendor/twbs/bootstrap-icons/font assets/icons/ && \
    cp -R vendor/twbs/bootstrap-icons/icons assets/icons/ && \
    cp vendor/twbs/bootstrap-icons/bootstrap-icons.* assets/icons/ && \
    docker-compose exec web composer remove twbs/bootstrap-icons
    ```
6. Install frontend dependencies and build frontend:
    ```bash
    $ docker-compose exec web yarn install
    $ docker-compose exec web yarn encore dev
    ```
7. Navigate your browser to `http://localhost/template` to test.

### 3. And now go ahead and develop great web applications!
Take care and stay healthy!

###
<details>
<summary><b>Cheatsheet</b></summary>

#### Symfony command line
```bash
$ docker-compose exec web php bin/console
```
#### View web logs
```bash
$ docker-compose exec web tail -f /var/log/supervisor/supervisord.log
```
#### Build frontend in watch mode or for production
```bash
$ docker-compose exec web yarn encore dev --watch
$ docker-compose exec web yarn encore production
```
#### Restore/dump database
```bash
$ docker-compose exec web db_restore [sql_dump_file]
$ docker-compose exec web db_dump [database]
$ ls -al var/dumps
```
#### Factory reset
```bash
$ sudo rm -rf .docker assets/icons/* node_modules var/* vendor
```
</details>

---
## Credits
### Wolfgang "Wolf" Pöhler
Cologne in December, 2021.
<div align="center">

###
#### Endorsed by nobody, powered by
[![DE-CIX](https://img.shields.io/badge/Get_interconnected-DE--CIX-10404f.svg?style=flat-square)](https://www.de-cix.net/)
[![github.com/serotoninja](https://img.shields.io/badge/GitHub-serotoninja-092c62.svg?style=flat-square)](https://github.com/serotoninja)
[![SymfonyWorld Online](https://img.shields.io/badge/SymfonyWorld-Online-d50b4e.svg?style=flat-square)](https://live.symfony.com/)
[![Ubuntu](https://img.shields.io/badge/OS-Ubuntu-404040.svg?style=flat-square)](https://www.ubuntu.com/)
[![Docker](https://img.shields.io/badge/Container-Docker-1f3f8c.svg?style=flat-square)](https://www.docker.com/)
[![PHPStorm](https://img.shields.io/badge/IDE-PHPStorm-79289b.svg?style=flat-square)](https://www.docker.com/)
</div>
