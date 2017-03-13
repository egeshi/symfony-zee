#!/bin/bash

CACHE_DIR=/srv/zeesofts/storage/logs

echo -e "Changing ownership of ${CACHE_DIR}"
sudo chown -R user3:user3 ${CACHE_DIR}

echo -e "Chmoding directories under ${CACHE_DIR}"
sudo find ${CACHE_DIR} -type d -exec sudo chmod 777 {} \;

echo -e "Chmoding files under ${CACHE_DIR}"
sudo find ${CACHE_DIR} -type f -exec sudo chmod 666 {} \;
