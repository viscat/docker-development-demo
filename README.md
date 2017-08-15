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
$ docker-compose -f infrastrcuture/docker/docker-compose.yml up -d
```

## Visit web app

Edit your `/etc/hosts` and add:
```
0.0.0.0 demo.viscat.app
```

Open your browser at: http://demo.viscat.app
