#!/bin/bash
openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
-keyout /etc/ssl/private/aeclipso.key \
-out /etc/ssl/certs/aeclipso.crt \
-subj "/C=RU/ST=Moscow/L=Moscow/O=msk_scl_21/OU=msk_scl_21/CN=$1"
