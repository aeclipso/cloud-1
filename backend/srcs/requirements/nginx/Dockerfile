FROM ubuntu
ARG SITE_URL=answers42.ru
ENV SITE_URL=answers42.ru
RUN apt-get update -y && \
    apt-get install nginx inetutils-ping \
    openssl -y && \
    apt autoremove -y
COPY ./conf/nginx /etc/nginx
EXPOSE 80
ENTRYPOINT [ "/bin/bash", "-c", "exec nginx -g 'daemon off;'" ]
