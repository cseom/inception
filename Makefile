all: docker-compose -f ./srcs/docker-compose.yml up

clean: docker-compose -f ./srcs/docker-compose.yml down

fclean: clean

re: fclean all

.PHONY: all clean fclean re
