#### <img src="https://img.shields.io/badge/PWS-blue"> <img alt="Windows Subsystem Linux" src="https://img.shields.io/badge/WSL-blueviolet"> Initial Config ####

[Click Here](https://gist.github.com/lipex360x/7825fe10c297f54c2b32d7ec26b536b1) to configure WSL, Windows Terminal, Docker and Docker Compose

[Download](https://1drv.ms/u/s!AqYs4J3iWwfnpN8qvmtiKG1Iy_2D5w?e=8V12sD) Ubuntu 20.04 WSL Pre Configured

---
<br />

#### <img src="https://img.shields.io/badge/PWS-blue"> Create PHP Path and Move WSL Pre Configured ###

> mkdir c:\wsl\php ; Move-Item -Path $home\Downloads\ubuntu.tar -Destination c:\wsl\php

---
<br />

#### <img src="https://img.shields.io/badge/PWS-blue"> Import WSL Image ####

```sh
wsl --import ubuntu c:\wsl\php c:\wsl\php\ubuntu.tar --version 2
```
* Start WSL from Windows Terminal

* Start Docker Desktop (WSL Integration)
---
<br />


#### <img alt="Windows Subsystem Linux" src="https://img.shields.io/badge/WSL-blueviolet"> PHP Apache Install ####

> apt install apache2 php libapache2-mod-php php-mysql -y

---
<br />


#### <img alt="Windows Subsystem Linux" src="https://img.shields.io/badge/WSL-blueviolet"> Apache Start ####

> service apache2 start

---
<br />



#### <img alt="Windows Subsystem Linux" src="https://img.shields.io/badge/WSL-blueviolet"> Apache Auto Startup ####

> zs

Add `service apache2 start` in .zshrc file

---
<br />


#### <img alt="Windows Subsystem Linux" src="https://img.shields.io/badge/WSL-blueviolet"> Set DEV Path ####

> rm -rf /var/www/html && cd /mnt/c/wsl/php && git clone https://github.com/lipex360x/PHP_WSL.git html && ln -s /mnt/c/wsl/php/html /var/www/html && rm -rf www && ln -s /var/www/html ~/www && cd ~/www

---
<br />


#### <img alt="Windows Subsystem Linux" src="https://img.shields.io/badge/WSL-blueviolet"> Apache Files Configuration ####

> code /etc/apache2
* ports.conf - Port Configuration
* /sites-enabled - Virtual Hosts

---
<br />

#### <img src="https://img.shields.io/badge/PWS-blue"> Show Windows Port 80 ####
> netstat ano | findstr :80
