@echo off
call heroku login
pause
call heroku git:remote -a fiap-pipeline
PAUSE
