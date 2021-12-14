FROM ubuntu:18.04
MAINTAINER Wolfgang Pöhler <wolfgang.poehler@me.com>

ENV DOCUMENTROOT /var/www/public
ENV DEBIAN_FRONTEND noninteractive

# Standards
RUN apt-get update && apt-get upgrade -y && apt-get install -y build-essential curl git mysql-client pv python-pip \
    software-properties-common wget unzip zip

# Keys
RUN apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys F3B1AA8B
RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add -
RUN echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list

# Supervisor
RUN pip install supervisor supervisor-stdout
RUN mkdir -p /var/log/supervisor
ADD supervisord_apache2.conf /usr/local/etc/supervisord.conf
ADD run_supervisord.sh /usr/local/bin/run_supervisord.sh
RUN chmod 0755 /usr/local/bin/run_supervisord.sh
CMD ["/bin/bash", "/usr/local/bin/run_supervisord.sh"]

# Yarn
RUN apt-get purge --auto-remove nodejs && curl -fsSL https://deb.nodesource.com/setup_14.x | bash -
RUN apt-get update -qq && apt-get upgrade -y && apt-get install -y nodejs yarn

# Apache/PHP
RUN add-apt-repository ppa:ondrej/php -y && apt-get update && apt-get clean
RUN apt-get update -qq && apt-get upgrade -y && apt-get install -y apache2 libapache2-mod-php8.0 \
    php8.0 php8.0-cli php8.0-common php8.0-mysql php8.0-intl php8.0-mbstring php8.0-gd \
    php8.0-sqlite php8.0-curl php8.0-opcache php8.0-readline php8.0-xdebug php8.0-xml php8.0-zip
RUN a2enmod rewrite
RUN a2enmod ssl
RUN rm -fr /var/www/html
RUN mkdir -p /var/www/public
RUN chmod -R 755 /var/www/public
RUN deluser www-data
RUN groupadd -r www-data -g 1000 && useradd -u 1000 -r -g www-data -m -d /var/www -s /usr/sbin/nologin www-data
VOLUME ["/var/www"]
RUN rm /etc/apache2/sites-enabled/*
ADD 000-default.conf /etc/apache2/sites-available/000-default.conf
RUN ln -sn /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-enabled/000-default.conf
ADD default-ssl.conf /etc/apache2/sites-available/default-ssl.conf
RUN ln -sn /etc/apache2/sites-available/default-ssl.conf /etc/apache2/sites-enabled/default-ssl.conf
ADD fqdn.conf /etc/apache2/conf-available/fqdn.conf
RUN a2enconf fqdn
ADD php.ini /etc/php/8.0/apache2/php.ini
ADD xdebug.ini /etc/php/8.0/mods-available/xdebug.ini
EXPOSE 80 443

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Commands
ADD version_check /usr/local/bin/
ADD db_dump /usr/local/bin/
ADD db_restore /usr/local/bin/

# MySQL Dumps
RUN mkdir -p /var/www/var/dumps

# WORKDIR
WORKDIR /var/www
