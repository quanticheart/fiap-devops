@echo off
set var=
setlocal enabledelayedexpansion
for /f "tokens=*" %%a in (../.env) do set var=!var! %%a
set var=!var:~1!
call heroku config:set !var!
call heroku config:set APP_LOG=errorlog
pause
