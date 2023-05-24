#!/bin/bash

# Build the Docker image
docker build -t my-php-app .

# Run the Docker container
docker run -d -p 8080:80 --name php-hello-world my-php-app

# Prompt the user to continue
# Prompt the user to continue
read -p "Press any key to stop the container..."

echo "[1/2] Stopping Container..."
# Stop the Docker container
docker stop php-hello-world

echo "[2/2] Deleting Container..."
# Remove the Docker container
docker rm php-hello-world

# Prompt the user if they want to remove the Docker image
read -p "Do you want to remove the Docker image (y/n)? " response
if [ "$response" = "y" ]; then
    echo "Deleting Docker image..."
    # Remove the Docker image
    docker rmi my-php-app
else
    echo "Skipping Docker image deletion."
fi
