#!/bin/bash

# Usage: ./remote_git_pull.sh user@remote_host /path/to/repo

REMOTE_USER_HOST="192.185.129.215"
REMOTE_REPO_PATH="/binarydharma.online/ankurah.com/beta/wp-content/themes/NewBud"

if [ -z "$REMOTE_USER_HOST" ] || [ -z "$REMOTE_REPO_PATH" ]; then
    echo "Usage: $0 admin@binarydharma.online /binarydharma.online/ankurah.com/beta/wp-content/themes/NewBud"
    exit 1
fi

ssh "$REMOTE_USER_HOST" "cd '$REMOTE_REPO_PATH' && git pull origin"