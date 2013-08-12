# Creates wordpress install 
#
# Author: Paul Czarkowski
# Date: 08/11/2013


FROM paulczar/apache2-php
MAINTAINER Paul Czarkowski "paul@paulcz.net"

RUN apt-get -y install php5-mysql

ADD . /var/www
RUN chmod 700 /var/www/start

CMD ["/var/www/start"]