#!/bin/bash

declare IMAGE_AND_CONTAINER_NAME="exxecutor"

docker stop $IMAGE_AND_CONTAINER_NAME
#docker rm $IMAGE_AND_CONTAINER_NAME
docker image rm $IMAGE_AND_CONTAINER_NAME
