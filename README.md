

## Create a .env based in env_template
```
cp env_template .env

```

## Build and Run Containers 

Create link to docker-compose.yml
```
ln -s docker-compose-development.yml docker-compose.yml
```

```
docker-compose build
```

## Prepare Database

```
docker-compose up mysql
```
Acessa o console do mysql 

```
docker exec -it $(docker ps -q -f name=mysql) /bin/bash
```

No console faz o load dos dados iniciais
```
mysql -u wordpress -padminadmin dri < /data/initial_data.sql
```

## Acessar e testar
```
http://localhost:8080
```




## Comandos uteis
### Acessar o mysql 
```
 docker exec -it $(docker ps -q -f name=mysql) mysql -u <USER> -p<PASS> <DATABASE>
```
### Acessar o bash no mysql 
```
docker exec -it $(docker ps -q -f name=mysql) /bin/bash
```

### Saber o IP de um container
```
docker inspect -f '{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' <container_name>
```