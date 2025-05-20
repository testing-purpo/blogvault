FROM php:8.2-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli
RUN useradd -m -s /bin/bash blogvault

# Copy source code into Apache web root
COPY src/ /var/www/html/
COPY flag.txt /home/blogvault/flag.txt

# Set working directory
WORKDIR /var/www/html

# Adjust permissions
RUN chown -R www-data:www-data /var/www/html

# Expose default Apache port
EXPOSE 80
