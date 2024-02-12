FROM php:8.1.20-apache

RUN useradd -m ctf

WORKDIR /var/www/ctf

COPY src/ /var/www/ctf/

#RUN mv /var/www/ctf/flag.txt /home/ctf/

CMD ["php", "-S", "0.0.0.0:8080"]

EXPOSE 8080
