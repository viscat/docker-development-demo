Docker Symfony 4 Demo App
===

# Set up

## Import ansible requirements

```bash
$ ansible-galaxy install -p infrastructure/ansible/galaxy -r infrastructure/ansible/requirements.yml
```

## Build docker image

```bash
$ packer build infrastructure/packer/demo_phpcli_dev.json
```

## Spin up containers

```bash
$ ./develop up -d
```

This is a shorthand for `docker-compose -f infrastructure/docker/docker-compose.yml up -d`

## Install dependencies

```bash
$ ./develop exec viscat_phpcli composer install
```

## Visit web app

Edit your `/etc/hosts` and add:
```
0.0.0.0:8080 demo.viscat.local
```

Open your browser at: http://demo.viscat.local and should see "Hi!"


## Configure XDebug

This container comes with configurated XDebug, but may need some tweeks and config before use it:

### Check remote ip address

If you are using Docker for Mac, it should be all ok, but if you use Linux or Windows, open `develop` file and 
check `XDEBUG_HOST` variable setting. This environment variable should contain the ip address of your host. There's a
command to get it automatically for Linux that works for my laptop.


### Configure it with PHPStorm

https://drive.google.com/file/d/16Gc5jR3vA9UJKnUnC5MGf_4dWCJRol2O/view?usp=sharing

## Other stuff

You can also enter in a bash console typing:
```bash
docker ./develop exec viscat_phpcli bash
```

