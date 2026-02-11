@echo off

echo Docker login...
docker login

echo Building Docker image for PHP Lab...
docker build -t php-lab-app . 

echo Tagging Docker image...
docker tag php-lab-app:latest pedro007salo/php-lab-app:latest

echo Pushing Docker image to Docker Hub...
docker push pedro007salo/php-lab-app:latest

echo Done! Контейнер відправлено.
pause