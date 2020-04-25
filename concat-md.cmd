@echo off

IF NOT "%1" == "/noclearscreen" (
    cls
)

REM Make sure the script is running from his folder so relative paths are correct
PUSHD %~dp0
powershell.exe -ExecutionPolicy Bypass -File C:\Christophe\Repository\writing-documentation\concat-md\concat-md.ps1 -o README.md
POPD
