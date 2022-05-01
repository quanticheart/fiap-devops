#! /bin/bash

REPO="fiap-pipeline"
BRANCH="master"
DIR=`dirname $0`

function pause(){
   read -p "$*"
}

heroku login

## Pause it ##
pause "Press any key to git:remote in $REPO ..."

cd $DIR/
cd ../../
heroku git:remote -a $REPO

git push heroku $BRANCH
