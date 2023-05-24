# Use the official PHP image as the base image
FROM php:latest

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the PHP files from the project directory to the container
COPY . /var/www/html

# Expose port 80 for web traffic
EXPOSE 80

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Start the PHP development server
CMD ["php", "-S", "0.0.0.0:80"]
