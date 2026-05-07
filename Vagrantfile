Vagrant.configure("2") do |config|

  # Definimos la maquina con el nombre
  config.vm.define "Maquina Roberto" do |r|
    
    # Nombre del Box
    r.vm.box = "ubuntu/focal64"
    r.vm.hostname = "web.local"

    # Configuracon de red
    r.vm.network "forwarded_port", guest: 80, host: 8080

    # Carpeta compartida
    r.vm.synced_folder ".", "/vagrant"

    # Configuracion de los requisitos hardware de la maquina
    r.vm.provider "virtualbox" do |vb|
      vb.name = "MaquinaProyectoAmpliacionRoberto"
      vb.memory = "2048"
      vb.cpus = 2
    end

    # APROVISIONAMIENTO: usamos el script para instalar Docker y el PHP
    r.vm.provision "shell", path: "provision.sh"
    
  end

end
