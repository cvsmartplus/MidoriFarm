# Gunakan image PHP dengan Apache
FROM php:7.4-apache

# Instal ekstensi yang dibutuhkan Laravel
RUN apt-get update && docker-php-ext-install pdo pdo_mysql

# Instal Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set direktori kerja
WORKDIR /var/www/html

# Copy file proyek ke direktori kerja kontainer
COPY . .

# Copy file .env
COPY .env .env

# Install dependensi PHP
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


# Berikan izin untuk direktori penyimpanan Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
