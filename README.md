This project is nothing more than configured docker environment. All you need to do to explore is: 
- ##### download docker (https://hub.docker.com/editions/community/docker-ce-desktop-windows/)
- ##### cp .example.env .env
- ##### edit .env
- ##### cd build
- ##### docker-compose up --build -d 
- ##### edit etc/hosts file > add "127.0.0.1 dockerized"
**From now on there is service dockerized:8080 aviable**
###### WALK AROUND:[on steps 2,3,4: extract files from "build" straight to "dockerized" directory and replace ${PROJECT_PATH} var with . in docker-compose.yml] [on last step: edit nginx.conf > "server_name localhost"] - those steps will make service available on localhost:8080

