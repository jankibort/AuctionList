This project is a light version of listing service. All you need to do to explore this app is: 
- ##### download docker (https://hub.docker.com/editions/community/docker-ce-desktop-windows/)
- ##### cp .example.env .env
- ##### edit .env
- ##### cd build
- ##### docker-compose up --build -d 
- ##### edit etc/hosts file > add "127.0.0.1 auctionlist"

###### [WALK AROUND on steps 2,3,4: extract files from "build" straight to "AuctionList" directory and replace ${PROJECT_PATH} var with . in docker-compose.yml]

**Since now there is service auctionlist:8080 aviable**