@echo off

echo Update Grunt...
call npm update grunt-cli -g

rem echo Update project packages versions...
rem call npm install -g npm-check-updates
rem call ncu --upgradeAll

echo Install project packages ...
call npm install --save-dev

rem echo Update project packages content...
rem echo Global...
rem call npm update -g
rem echo Local...
rem call npm update --save
rem echo Local Dev...
rem call npm update --save-dev

rem echo Check updates...
rem call npm outdated

pause