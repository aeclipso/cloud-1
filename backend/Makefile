DC=docker-compose
D=docker
N=network
I=image
IS=images
P=prune
V=volume
C=container
FILE=current_state.txt
LI=$(docker images -qa)
SC=$(docker images -aq)
SB=$(docker ps -q)
SA=$(docker ps -aq)
SV=$(docker volume ls -q)
SN=$(docker network ls -q)
PWD=/home/ophuong/inseption
run:
	$(DC) -f $(PWD)/srcs/$(DC).yml up
rund:
	$(DC) -f $(PWD)/srcs/$(DC).yml up -d
stop:
	$(DC) -f $(PWD)/srcs/$(DC).yml down
build:
	$(DC) -f $(PWD)/srcs/$(DC).yml build
rephp:
	$(DC) -f $(PWD)/srcs/$(DC).yml build wordpress
renginx:
	$(DC) -f $(PWD)/srcs/$(DC).yml build nginx
remdb:
	$(DC) -f $(PWD)/srcs/$(DC).yml build mariadb
cleanimg:
# ifdef $(LI)
	$(D) rmi -f $$(docker images -q) 2>/dev/null
	# $(D) image rm $$(docker image ls -q) 2>/dev/null
# endif
cleancnt:
ifdef $(SA)
	$(D) rm $$(docker ps -aq) 2>/dev/null
endif
cleanntw:
ifdef $(SA)
	$(D) $(N) rm $$(docker network ls -q)
endif
cleanvlm:
ifdef $(SV)
	$(D) $(V) rm $$(docker volume ls -q)
endif
cleanfiles:
	docker volume rm db
	docker volume rm wp
	docker volume rm adm
	rm -rf /home/ophuong/data/wp
	rm -rf /home/ophuong/data/db
	rm -rf /home/ophuong/data/adm
	mkdir -p /home/ophuong/data/wp
	mkdir -p /home/ophuong/data/db
	mkdir -p /home/ophuong/data/adm
clean: cleancnt cleanntw cleanimg cleanvlm cleanfiles
	@yes | docker kill $(docker ps -a)
	@yes | docker system prune
	@yes | docker rm $(SA)
	@yes | $(D) $(N) $(P)
	@yes | $(D) $(V) $(P)
	@yes | $(D) $(I) $(P)
	@yes | $(D) $(C) $(P)
	@printf '\x1b[7;31mALL WAS CLEAN\x1b[0m\n'
info:
	@$(D) $(C) ls > $(FILE)
	@$(D) $(V) ls >> $(FILE)
	@$(D) $(N) ls >> $(FILE)
	@$(D) info >> $(FILE)
	@printf '\x1b[1;32mInfo printed into $(FILE)\n\x1b[0m'

re: clean run
	@printf '\x1b[7;31mHAVE BEEN REBUILD\x1b[0m\n'
