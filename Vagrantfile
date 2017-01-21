# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  config.vm.box = "precise64"
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"

  config.vm.network :forwarded_port, guest: 80, host: 8080
  config.vm.network "public_network", ip: "192.168.0.17"

  config.vm.provider :virtualbox do |vb|
    vb.gui = false
  end

  config.vm.provision :shell, :path => "bootstrap.sh"
end
