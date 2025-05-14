FROM php:8.2-cli

# Install dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    libzip-dev \
    sqlite3 \
    zip \
    && docker-php-ext-install zip pdo pdo_sqlite

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /app

# Copy code
COPY . .

# Install dependencies
RUN composer install

# Set permissions
RUN chmod -R 777 storage bootstrap/cache

# Generate DB
RUN touch /tmp/database.sqlite

# Set entrypoint
CMD php artisan serve --host=0.0.0.0 --port=10000
