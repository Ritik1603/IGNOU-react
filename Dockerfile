FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    nodejs \
    npm \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        gd \
        zip \
        pdo \
        pdo_mysql \
        mbstring \
        exif \
        pcntl \
        bcmath

# Set working directory
WORKDIR /app

# Copy project files
COPY . .

RUN mkdir -p database \
 && touch database/database.sqlite \
 && chmod -R 775 database storage bootstrap/cache


# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node dependencies and build assets
RUN npm install && npm run build

# Expose port
EXPOSE 8080

# Start Laravel
CMD ["sh", "-c", "mkdir -p /app/database \
 && touch /app/database/database.sqlite \
 && chmod -R 775 /app/database /app/storage /app/bootstrap/cache \
 && php artisan config:clear \
 && php artisan cache:clear \
 && php artisan migrate --force || true \
 && php -S 0.0.0.0:${PORT:-8080} -t public"]



