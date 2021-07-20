Vagrant.configure("2") do |config|
  config.vm.define "web" do |web|
    web.vm.box = "ubuntu/focal64"
    web.vm.hostname = "web"
    web.vm.network "private_network", ip: "10.1.10.2"
    #web.vm.network "forwarded_port", guest: 80, host: 8080,
      #auto_correct: true
    web.vm.provider "virtualbox" do |vb|
      #vb.gui = true
      vb.memory = "2048"
    end
    web.vm.provision "shell", path: "bootstrap.sh"
  end
  config.vm.define "db" do |db|
    db.vm.box = "ubuntu/focal64"
    db.vm.hostname = "db"
    db.vm.network "private_network", ip: "10.1.10.3"
    #db.vm.network "forwarded_port", guest: 80, host: 8081,
      #auto_correct: true
    db.vm.provider "virtualbox" do |vb|
      #vb.gui = true
      vb.memory = "2048"
    end
    db.vm.provision "shell", path: "bootstrap.sh"
  end
end