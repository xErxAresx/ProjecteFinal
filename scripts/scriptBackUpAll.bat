
set dbuser=Arnau
set dbpass=dawmola2
set mysqldumpexe="C:\xamp\mysql\bin\mysqldump.exe"


@echo off

%mysqldumpexe% --user=%dbuser% --password=%dbpass% --databases projectefinal > projectfinal.sql
%mysqldumpexe% --user=%dbuser% --password=%dbpass% --xml --databases projectefinal > projectfinal.xml
echo "BackUp Done"
xcopy "C:\xamp\htdocs\ForoJuegos" "E:\CopiasSeguridad\Proyecto\" 
xcopy "C:\xamp\htdocs\ForoJuegos\scripts\projectfinal.sql" "E:\CopiasSeguridad\BaseDatos"
xcopy "C:\xamp\htdocs\ForoJuegos\scripts\projectfinal.xml" "E:\CopiasSeguridad\BaseDatos"
echo "Se han traspasado los ficheros correctamente"

popd