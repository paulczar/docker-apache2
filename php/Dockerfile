# Creates apache install 
#
# Author: Paul Czarkowski
# Date: 08/11/2013


FROM paulczar/apache2
MAINTAINER Paul Czarkowski "paul@paulcz.net"

RUN apt-get -y install php5 libapache2-mod-php5

env APACHE_RUN_USER    www-data
env APACHE_RUN_GROUP   www-data
env APACHE_PID_FILE    /var/run/apache2.pid
env APACHE_RUN_DIR     /var/run/apache2
env APACHE_LOCK_DIR    /var/lock/apache2
env APACHE_LOG_DIR     /var/log/apache2
env LANG               C

ADD phpinfo.php /var/www/phpinfo.php
ADD 000-default /etc/apache2/sites-enabled/000-default

CMD ["apache2", "-D", "FOREGROUND"]