#!/usr/bin/env bash

yellow=`tput setaf 3`
cyan=`tput setaf 6`
reset=`tput sgr0`

domains=('# Simplex' '127.0.0.1 simplex.local')

# $1 - ask, run $2 action or not.
# $2 - callback (action) to run.
function ask {
    read -p "${cyan}$1 (y/n): ${reset}" -n 1 -r
    echo ""
    if [[ $REPLY =~ ^[Yy]$ ]]
    then
        $2
    fi
}

# Write hardcoded domains to /etc/hosts file.
function hosts_writer {
    for name in ${!domains[*]}
    do
        sudo sed -i".bak" "/${domains[$name]}/d" /etc/hosts
        local string="$string\n${domains[$name]}"
    done

    echo -e ${string:2} | sudo tee -a /etc/hosts
}

function hosts_rm {
    for name in ${!domains[*]}
    do
        sudo sed -i".bak" "/${domains[$name]}/d" /etc/hosts
    done
}

function run() {
    docker-compose up -d
}

ask "Write domains to /etc/hosts?" hosts_writer
ask "Remove domains from /etc/hosts?" hosts_rm
ask "Run project (pull Docker images and up daemon)?" run

echo "${yellow}Project available on http://simplex.local:8888/${yellow}"
