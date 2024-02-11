#!/bin/bash

declare IMAGE_AND_CONTAINER_NAME="exxecutor"
#  Port from docker
declare -i EXPOSED_PORT=8080
# Port for connect
declare -i PUBLIC_PORT=7151

docker stop $IMAGE_AND_CONTAINER_NAME
docker rm $IMAGE_AND_CONTAINER_NAME
docker image rm $IMAGE_AND_CONTAINER_NAME
docker build -t $IMAGE_AND_CONTAINER_NAME .
docker run -d -p $PUBLIC_PORT:$EXPOSED_PORT --rm --name $IMAGE_AND_CONTAINER_NAME $IMAGE_AND_CONTAINER_NAME
