#!/bin/bash

# Actualizar e instalar docker
sudo apt-get update
sudo apt-get install -y docker.io docker-compose

# Entrar a la carpeta y levantar todo
cd /vagrant
sudo docker-compose up -d

# Esperar un poco a que cargue el contenedor
sleep 10

# MOVER EL PHP
sudo docker cp index.php servidor_wp:/var/www/html/index.php
echo "Hecho. Mira en localhost:8080/"
