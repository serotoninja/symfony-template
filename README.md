<p align="center"><a href="https://symfony.com" target="_blank">
    <img src="https://symfony.com/logos/symfony_black_03.png" width="128" height="154">
</a></p>

<h1 align="center">Symfony Template</h1>
<h4 align="center">Dockerized web application development stripped to the boots</h4>

[![ubuntu:18](https://img.shields.io/badge/ubuntu-18.04-404040.svg?style=flat-square)](https://www.ubuntu.com/)
[![apache-httpd:2021](https://img.shields.io/badge/apache-2.4-79289b.svg?style=flat-square)](https://httpd.apache.org/)
[![mysql:57](https://img.shields.io/badge/mysql-5.7-aa6617.svg?style=flat-square)](https://www.mysql.com/)
[![php:72](https://img.shields.io/badge/php-7.2-4F5B93.svg?style=flat-square)](https://www.php.net/)
[![composer:21](https://img.shields.io/badge/composer-2.1-a35c11.svg?style=flat-square)](https://getcomposer.org/)
[![nodejs:14](https://img.shields.io/badge/nodejs-14.18-333333.svg?style=flat-square)](https://nodejs.org/en/)
[![yarn:122](https://img.shields.io/badge/yarn-1.22-29799f.svg?style=flat-square)](https://yarnpkg.com/)

[![symfony:54](https://img.shields.io/badge/symfony/*-5.4-374960.svg?style=flat-square)](https://www.symfony.com/)
[![symfony-flex:1](https://img.shields.io/badge/symfony/flex-1.17-374960.svg?style=flat-square)](https://www.symfony.com/)
[![symfony-ux:2](https://img.shields.io/badge/symfony/ux-2.0-374960.svg?style=flat-square)](https://github.com/symfony/ux)
[![symfony-ux-swup:2](https://img.shields.io/badge/symfony/ux--swup-2.0-374960.svg?style=flat-square)](https://github.com/symfony/ux-swup)
[![symfony-ux-turbo:2](https://img.shields.io/badge/symfony/ux--turbo-2.0-374960.svg?style=flat-square)](https://github.com/symfony/ux-turbo)

[![jquery:36](https://img.shields.io/badge/jquery-3.6-21568d.svg?style=flat-square)](https://getbootstrap.com/)
[![bootstrap:51](https://img.shields.io/badge/bootstrap-5.1-7952b3.svg?style=flat-square)](https://getbootstrap.com/)
[![bootstrap-icons:51](https://img.shields.io/badge/bootstrap--icons-1.7-7952b3.svg?style=flat-square)](https://icons.getbootstrap.com/)

### Clone the GitHub repository
```bash
$ git clone git@github.com:serotoninja/symfony-template.git
$ cd symfony-template 
```
Expand the **instructions** below and start out of the box, have fun!

<details>
<summary><b>Instructions</b></summary>

### Build containers
```bash
$ docker-compose build && docker-compose up
```
...and stop with `CTRL-C` if succeeded.

### Start containers detached
```bash
$ docker-compose up -d
```

### Stop containers
```bash
$ docker-compose stop
```

### Rebuilt containers
```bash
$ docker-compose stop && docker-compose rm && docker-compose build && docker-compose up
```


### Observe web container logs
```bash
$ docker-compose exec web tail -f /var/log/supervisor/supervisord.log
```


### Install composer dependencies
```bash
$ docker-compose exec web composer install
```

### Install yarn dependencies
```bash
$ docker-compose exec web yarn install
```

### Build frontend
```bash
$ docker-compose exec web yarn encore dev
$ docker-compose exec web yarn encore dev --watch
$ docker-compose exec web yarn encore production
```

### Symfony console
```bash
$ docker-compose exec web php bin/console
```

## Test
### Open in browser
```
http://localhost/template/ 
```
#### or
```
https://localhost/template/ 
```


</details>


<details>
<summary><b>Credits</b></summary>

### Wolfgang "Wolf" Pöhler
**December, 2021**

</details>

### Endorsed by nobody. Powered by 
[![DE-CIX](https://img.shields.io/badge/Get_interconnected-DE--CIX-10404f.svg?style=flat-square)](https://www.de-cix.net/)
[![github.com/serotoninja](https://img.shields.io/badge/GitHub-serotoninja-092c62.svg?style=flat-square)](https://github.com/serotoninja)
[![SymfonyWorld Online](https://img.shields.io/badge/SymfonyWorld-Online-d50b4e.svg?style=flat-square)](https://live.symfony.com/)
[![Ubuntu](https://img.shields.io/badge/OS-Ubuntu-404040.svg?style=flat-square)](https://www.ubuntu.com/)
[![Docker](https://img.shields.io/badge/Container-Docker-1f3f8c.svg?style=flat-square)](https://www.docker.com/)
[![PHPStorm](https://img.shields.io/badge/IDE-PHPStorm-79289b.svg?style=flat-square)](https://www.docker.com/)

