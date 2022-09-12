FROM debian:buster
COPY ./conf /conf
ADD https://wordpress.org/latest.tar.gz /
RUN apt update -y && \
    apt install -y wget \
    lsb-release && \
    wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg && \
    echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list && \
    apt update -y && \
    apt install -y php7.4-fpm \
    php7.4-mysqli php7.4-curl php7.4-gd \
    php7.4-intl php7.4-mbstring php7.4-soap \
    php7.4-xml php7.4-xmlrpc php7.4-zip \
    php7.4-redis && \
    mkdir -p /var/www/html/wordpress/wp-content && \
    mkdir -p /var/run/php && \
    mv latest.tar.gz /var/www/html/ && \
    tar -xzvf /var/www/html/latest.tar.gz && \
    cp /conf/wp-config.php /var/www/html/wordpress && \
    cp /conf/www.conf /etc/php/7.4/fpm/pool.d/www.conf && \
    cp /conf/object-cache.php /var/www/html/wordpress/wp-content && \
    rm -rf /var/www/html/latest.tar.gz && \
    cp -Ru /wordpress/* /var/www/html/wordpress/ && \
    chown -R www-data:www-data /var/www/html/wordpress && \
    apt remove -y lsb-release \
    wget && \
    apt autoremove -y
EXPOSE 9000
ENTRYPOINT [ "php-fpm7.4", "-F", "-R"]
