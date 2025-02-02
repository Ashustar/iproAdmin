# IPRO ADMIN
![Logo](https://raw.githubusercontent.com/Ashustar/iproAdmin/master/tasmoadmin/resources/img/logo_small.png)

[![GitHub release](https://img.shields.io/github/release/reloxx13/TasmoAdmin.svg)](https://GitHub.com/reloxx13/TasmoAdmin/releases/) 
[![Build Status](https://travis-ci.org/reloxx13/TasmoAdmin.svg?branch=master)](https://travis-ci.org/reloxx13/TasmoAdmin) 
[![GitHub contributors](https://img.shields.io/github/contributors/reloxx13/TasmoAdmin.svg)](https://GitHub.com/reloxx13/TasmoAdmin/graphs/contributors/) 

[![HitCount](http://hits.dwyl.io/reloxx13/TasmoAdmin.svg)](http://hits.dwyl.io/reloxx13/TasmoAdmin)
[![GitHub stars](https://img.shields.io/github/stars/reloxx13/TasmoAdmin.svg)](https://github.com/reloxx13/TasmoAdmin/stargazers)
[![DockerHub Star](https://img.shields.io/docker/stars/raymondmm/tasmoadmin.svg)](https://hub.docker.com/r/raymondmm/tasmoadmin/)
[![GitHub forks](https://img.shields.io/github/forks/reloxx13/TasmoAdmin.svg)](https://github.com/reloxx13/TasmoAdmin/network)
[![DockerHub Pull](https://img.shields.io/docker/pulls/raymondmm/tasmoadmin.svg)](https://hub.docker.com/r/raymondmm/tasmoadmin/)
[![Github all releases](https://img.shields.io/github/downloads/reloxx13/TasmoAdmin/total.svg?label=gh%20downloads)](https://GitHub.com/reloxx13/TasmoAdmin/releases/) 

[![GitHub license](https://img.shields.io/github/license/reloxx13/TasmoAdmin.svg)](https://github.com/reloxx13/TasmoAdmin/blob/master/LICENSE)
[![bootstap](https://img.shields.io/badge/bootstrap-v4.5.x-%23563d7c.svg)](https://getbootstrap.com/)
[![php](https://img.shields.io/badge/php-7.3.x-%238892BF.svg)](https://secure.php.net/)


TasmoAdmin (previously SonWEB) is an administrative Website for Devices flashed with [Tasmota](https://github.com/arendst/Tasmota).   
You can find it here: [TasmoAdmin GitHub](https://github.com/reloxx13/TasmoAdmin).
It supports running on Windows, Linux, Docker container and as Home Assistant addon.

## Features
* Login protected
* Multi Update Process
  * Select devices to update
  * Automatic Modus downloads latest firmware bin from Tasmota GitHub
* Show device information
* Mobile Responsive (Bootstrap4)
  * SCSS & Minified
* Config devices
* SelfUpdate function for TasmoAdmin (disabled for Docker)
* NightMode (Enable/Disable/Auto) in settings
* AutoScan to find Tasmota Devices
* Support for multiple sensors
* Send Command to selected Devices
* Chat (beta)

### Supported Platforms
* Apache2 and nginx
* XAMPP on Windows
* Docker by @RaymondMouthaan
  * unRaid by @digiblur
* IOCage (FreeNAS) by @tprelog



## Installation

### Home Assistant Addon
TasmoAdmin is available as Home Assistant addon, please refer to
[Home Assistant - addon TasmoAdmin](https://github.com/Ashustar/addon-iproadmin) for more information.

### Windows
A ready to use TasmoAdmin-XAMP-Portable-\*.zip is available on the [release page](https://github.com/Ashustar/iproAdmin/releases) and is based on XAMPP.

1. Download the XAMPP Zip package from the releases page
2. Extract the Zip (recommend to put the xamp folder on C:\
3. Run once the xamp\setup_xampp.bat
4. Start xampp-control.exe
5. Start Apache in the opened ControlCenter
6. Get your local IP Address

Now you can type in your browser http://YOURLOCALIP and TasmoAdmin shows up.


## Example Images
#### Login Page
![Login](https://raw.githubusercontent.com/reloxx13/reloxx13.github.io/master/media/tasmoadmin/readme/1.png)
#### Start Page
![Startpage](https://raw.githubusercontent.com/reloxx13/reloxx13.github.io/master/media/tasmoadmin/readme/2.png)
#### Devices Page
![Devices](https://raw.githubusercontent.com/reloxx13/reloxx13.github.io/master/media/tasmoadmin/readme/3.png)
Edit in Table   
![LiveChange](https://raw.githubusercontent.com/reloxx13/reloxx13.github.io/master/media/tasmoadmin/readme/livechange.gif)
#### Devices Add/Edit Page
![Device Add/Edit](https://raw.githubusercontent.com/reloxx13/reloxx13.github.io/master/media/tasmoadmin/readme/3_1.png)
#### Config General Page
![Device Config_GENERAL](https://raw.githubusercontent.com/reloxx13/reloxx13.github.io/master/media/tasmoadmin/readme/4.png)
#### Config Network Page
![Device Config_Network](https://raw.githubusercontent.com/reloxx13/reloxx13.github.io/master/media/tasmoadmin/readme/4_1.png)
#### Update Devices Page
![Device Update 1](https://raw.githubusercontent.com/reloxx13/reloxx13.github.io/master/media/tasmoadmin/readme/5.png)
![Device Update 2](https://raw.githubusercontent.com/reloxx13/reloxx13.github.io/master/media/tasmoadmin/readme/5_1.png)
![Device Update 3](https://raw.githubusercontent.com/reloxx13/reloxx13.github.io/master/media/tasmoadmin/readme/5_2.png)
#### Settings Page
![Settings](https://raw.githubusercontent.com/reloxx13/reloxx13.github.io/master/media/tasmoadmin/readme/6.png)
![Settings](https://raw.githubusercontent.com/reloxx13/reloxx13.github.io/master/media/tasmoadmin/readme/7.png)

#### Mobile
![Navi_M](https://raw.githubusercontent.com/reloxx13/reloxx13.github.io/master/media/tasmoadmin/readme/m1.png)
![Startpage_M](https://raw.githubusercontent.com/reloxx13/reloxx13.github.io/master/media/tasmoadmin/readme/m2.png)
![Devices_M](https://raw.githubusercontent.com/reloxx13/reloxx13.github.io/master/media/tasmoadmin/readme/m3.png)
![Config_General_M](https://raw.githubusercontent.com/reloxx13/reloxx13.github.io/master/media/tasmoadmin/readme/m4.png)
![Config_Network_M](https://raw.githubusercontent.com/reloxx13/reloxx13.github.io/master/media/tasmoadmin/readme/m4_1.png)
