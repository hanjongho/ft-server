FROM	debian:buster

LABEL	maintainer="johan@student.42seoul.kr"

RUN		apt-get update && apt-get install -y \
		nginx \
		mariadb-server \
		php-mysql \
		php-mbstring \
		php7.3-fpm \
		openssl \
		vim \
		wget

COPY	./srcs/run.sh ./
COPY	./srcs/default_on ./tmp
COPY	./srcs/default_off ./tmp
COPY	./srcs/wp-config.php ./tmp
COPY	./srcs/config.inc.php ./tmp

EXPOSE	80 443

CMD		bash run.sh
