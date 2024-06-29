FROM php:8.0-apache

WORKDIR /var/www/html
COPY . .

# Install any necessary PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libzip-dev \
    && docker-php-ext-install \
    gd \
    zip

# Enable Apache modules
RUN a2enmod rewrite

# Expose the default Apache port
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]