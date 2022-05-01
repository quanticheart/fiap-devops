#! /bin/bash
DIR=`dirname $0`

chmod u+x $DIR/login.command
chmod u+x $DIR/repo.command
chmod u+x $DIR/deploy.command

echo "Script Finish"
sleep 3
osascript -e 'tell application "Terminal" to close (every window whose name contains "permission")'
