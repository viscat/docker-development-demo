Docker demo app
===

# Set up

## Import ansible requirements

```bash
$ ansible-galaxy install -p infrastrcuture/ansible/galaxy -r infrastrcuture/ansible/requirements.yml
```

## Build docker image

```bash
$ packer build infrastrcuture/packer/demo_phpcli_dev.json
```

## Spin up containers

```bash
$ ./develop up -d
```

This is a shorthand for `docker-compose -f infrastrcuture/docker/docker-compose.yml up -d`

## Install dependencies

```bash
$ ./develop exec viscat_phpcli composer install
```

## Visit web app

Edit your `/etc/hosts` and add:
```
0.0.0.0 demo.viscat.local
```

Open your browser at: http://demo.viscat.local and should see "Hi!"


## Configure XDebug

This container comes with configurated XDebug, but may need some tweeks and config before use it:

### Check remote ip address

Open `develop` file and check `XDEBUG_HOST` variable setting. This envvar should contain the ip address of your host. The
command to get it works for my laptop, but I'm not sure it work on every linux. There is also a OSX variant. Depending on 
how your computer is connected to the network (Ethernet or WiFi) it could differ.


### Configure it with PHPStorm

https://drive.google.com/file/d/16Gc5jR3vA9UJKnUnC5MGf_4dWCJRol2O/view?usp=sharing

## Other stuff

You can also enter in a bash console typing:
```bash
docker ./develop exec viscat_phpcli bash
```

