#!/bin/bash

export PACKAGE="${1}"
MESSAGE="${2}"

PACKAGE_NAME=$(php -r 'echo ucfirst(getenv("PACKAGE"));')

if [[ ! -z "$1" && ! -z "$2" ]]; then
    DIR="/mnt/safe/laradic/workspace/Laradic/${PACKAGE_NAME}"
    if [ -d "${DIR}" ]; then
        cd "${DIR}"
        commit ${MESSAGE}
    fi
fi
