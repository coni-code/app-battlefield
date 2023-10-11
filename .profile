dstart() {
    docker compose up --build "$@"
}

dstop() {
    docker compose down
}

dexec() {
    docker exec -it "$@"
}

dconsole() {
    php bin/console "$@"
}
