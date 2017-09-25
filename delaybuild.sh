#!/bin/bash

docker-compose -f prod.docker-compose.yml up \
	jigsaw_build_assets && \
docker-compose -f prod.docker-compose.yml up \
	jigsaw_build_site