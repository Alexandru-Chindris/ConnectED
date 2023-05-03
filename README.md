# ConnectED

## EN 
This container contains a registry project developed with HTML, CSS , Javascript (Front-end)(Back-end), MongoDB, MongoExpress (Database, NoSQL). The project was implemented through the structure of microservices with the help of docker technology (https://www.docker.com/). The web page is available in two languages.

### Disclaimer
**I never intend to infrange on the rights of others. There are third-party images sourced from Pexels (https://www.pexels.com/it-it/license/). If you find something that you believe is a violation of your rights before taking any legal action contact me, I will be happy to accommodate your request and remove the article in question**


## IT
Questo container contiene un progetto di un registro elettronico sviluppato con HTML, CSS , Javascript (Front-end)(Back-end), MongoDB, MongoExpress (Database, NoSQL). Il progetto è stato realizzato mediante la struttura dei microservizi tramite l'ausilio della tecnologia docker (https://www.docker.com/). La pagina web è disponibile in due lingue.

### Disclaimer 

**Non intendo violare i diritti sul copyright di nessuno. Sono presenti immagini di terzi reperite da Pexels (https://www.pexels.com/it-it/license/). Se trovi qualcosa che ritieni una violazione dei tuoi diritti prima di intraprenere qualsiasi azione legale contattami, sarò lieto di accogliere la tua richiesta e rimuovere l'articolo in questione.**

# Documentazione [ITA]

Cos'è ConnectED? 
ConnectED è un idea di un registro elettronico realizzato da me come progetto per mettere in pratica le mie competenze.
Per lo sviluppo di ConnectED ho scelto di non utilizzare framework in quanto sto sviluppando questa applicazione a ridosso dell'esame di stato dove non potrò utilizzare il computer e dovrò scrivere a mano tutto il codice.

## Ambiente di sviluppo con Docker  
Creazione della rete
```shell
docker network create ConnectED-network
```

Creazione del webserver
```shell
mkdir ~/ConnectED-share
docker run --name ConnectED-webServer --network ConnectED-network-d -p 8080:80 -v ~/ConnectED-share/:/usr/share/nginx/html nginx
```

MongoDB
```shell
docker run -d --name ConnectED-mongoDB -p 27017:27017 --network ConnectED-network -e MONGO_INITDB_ROOT_USERNAME=admin -e MONGO_INITDB_ROOT_PASSWORD=admin mongo
```

Cambio nome localhost
```shell
sudo nano /etc/hosts
```

/etc/hosts
```shell
  GNU nano 6.4                                                                                     /etc/hosts                                                                                               

127.0.0.1       localhost    ConnectED-mongoDB
127.0.1.1       linux

```

Mongo-Express
```shell
docker run -d --name ConnectED-mongoExpress --network ConnectED-network -p 8081:8081 -e ME_CONFIG_MONGO_DB_ADMINUSERNAME=admin -e ME_CONFIG_MONGO_DB_ADMINPASSWORD=admin -e ME_CONFIG_MONGO_DB_SERVER=mongodb -e ME_CONFIG_MONGODB_URL="mongodb://admin:admin@ConnectED-mongoDB:27017" mongo-express
```

Riassunto porte
```shell
8081 -> Mongo Express
8080 -> Nginx
```

