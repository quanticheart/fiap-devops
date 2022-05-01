#! /bin/bash

DIR=`dirname $0`
function pause(){
 read -s -n 1 -p "Press any key to continue ..."
 echo ""
}

heroku login

## Pause it ##
pause

DIR=`dirname $0`

cd $DIR/
cd ../../
heroku git:remote -a fiap-pipeline
