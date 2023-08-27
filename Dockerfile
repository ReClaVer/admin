Dockerfile

# Gunakan gambar PHP dan Apache resmi
FROM php:7.4-apache

# Instal ekstensi PHP yang diperlukan
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Salin kode proyek CodeIgniter ke kontainer
COPY . /var/www/html/

# Aktifkan mod_rewrite
RUN a2enmod rewrite
