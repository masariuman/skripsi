#!/bin/sh
cd path/to/your/project
git add .
set SAVESTAMP=%DATE:/=-%@%TIME::=-%
set SAVESTAMP=%SAVESTAMP: =%
git commit -am "Regular auto-commit $(SAVESTAMP)"