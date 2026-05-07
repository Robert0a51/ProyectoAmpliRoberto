# 💻Proyecto Ampliacion de Sistemas

Este proyecto ha sido desarrollado para **WebFusion Digital S.L.** con el objetivo de estandarizar su entorno de trabajo y eliminar los errores en el despliegue manual de sitios WordPress.

## 🏗️ Arquitectura del Sistema
El sistema utiliza una arquitectura en capas para asegurar que el entorno sea reproducible en cualquier equipo:

1.  **Virtualización (Vagrant):** Crea una máquina virtual aislada con Ubuntu para evitar conflictos con el sistema operativo local.
2.  **Orquestación (Docker Compose):** Gestiona los servicios de WordPress y la base de datos MySQL dentro de la máquina virtual.
3.  **Control de Versiones (GitHub):** Actúa como la fuente de verdad donde reside el código PHP y las configuraciones del entorno.
4.  **Automatización de Sincronización:** Mediante un script de aprovisionamiento, el sistema detecta el contenido del repositorio y lo mueve al directorio correspondiente de WordPress.

## 🛠️ Requisitos Previos
*   Tener instalado [Vagrant](https://www.vagrantup.com/downloads).
*   Tener instalado un hipervisor (ej. VirtualBox).
*   Conexión a internet para la descarga de la "box" de Ubuntu y las imágenes de Docker.

## 🚀 Instrucciones de Despliegue (Paso a Paso)
Sigue estos pasos para levantar el entorno completo desde cero:

1.  **Clonar el repositorio:**
   
    ```bash
    git clone https://github.com/Robert0a51/ProyectoAmpliRoberto.git
    cd ProyectoAmpliRoberto
    ```
3.  **Iniciar la automatización:**
    Ejecuta el siguiente comando en la carpeta donde esté el `Vagrantfile`:
    
    ```bash
    vagrant up
    ```
    **Este comando creará la máquina virtual, instalará Docker y Docker Compose, y desplegará WordPress de forma automatizada.**

4.  **Acceder a la web:**
    Una vez termine el proceso, abre tu navegador y entra en: `http://localhost:8080`

## 🔄 Ejemplo de Actualización de Contenido
Si necesitas realizar cambios en la página principal, el proceso es totalmente automático gracias al sistema de aprovisionamiento:

1.  Modifica el archivo `index.php` en tu ordenador local.
2.  Sube los cambios a tu repositorio de GitHub (`git add`, `commit` y `push`).
3.  En tu terminal local, ejecuta el comando de actualización:
   
    ```bash
    vagrant provision
    ```
5.  Los cambios se reflejarán automáticamente en el entorno de WordPress sin intervención manual adicional.

---

### 📂 Estructura del Repositorio
*   **Vagrantfile**: Configuración de la máquina virtual Ubuntu.
*   **docker-compose.yml**: Definición de los servicios de contenedor (WordPress y DB).
*   **index.php**: Código fuente de la página principal personalizada.
*   **provision.sh**: Script para la instalación de herramientas y movimiento de archivos.
*   **README.md**: Documentación técnica del proyecto.

