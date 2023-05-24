# Build the Docker image
docker build -t my-php-app .

# Run the Docker container
docker run -d -p 8080:80 --name php-hello-world my-php-app

# Prompt the user to continue
Write-Host "Press any key to stop the container..."
$null = $Host.UI.RawUI.ReadKey("NoEcho,IncludeKeyDown")

Write-Host "[1/2] Stopping Container..."
# Stop the Docker container
docker stop php-hello-world

Write-Host "[2/2] Deleting Container..."
# Remove the Docker container
docker rm php-hello-world

# Prompt the user if they want to remove the Docker image
Write-Host "Do you want to remove the Docker image (y/n)?"
$response = Read-Host
if ($response -eq "y") {
    Write-Host "Deleting Docker image..."
    # Remove the Docker image
    docker rmi my-php-app
} else {
    Write-Host "Skipping Docker image deletion."
}
