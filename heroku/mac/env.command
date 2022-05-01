#! /bin/bash

REPO="fiap-pipeline"
BRANCH="master"
DIR=`dirname $0`

cd $DIR/
cd ../../

input=".env"
while IFS= read -r line
do
  echo "$line"
  arrIN=(${line//=/ })
  key=${arrIN[0]}
  value=${arrIN[1]}

  echo $key
  echo $value

heroku config:set $line
done < "$input"

heroku config:set APP_LOG=errorlog
