# Integración con GIT

Si para este punto no crearon un Repositorio, este es un buen momento para hacerlo.

El primer paso es ir a algún proveedor de repositorios (Gitlab, Github) y crear un repositorio especifico para este tutorial. Crearlo y copiar la URL.

A continuación, en la carpeta raíz del proyecto.

```bash
git init
git remote add origin <url-repo-github-o-gitlab>
git add .
git commit -m "Initial commit"
git push -u origin master
```

Siempre es una buena idea tener un archivo `README.md` adaptado al proyecto. Slim crea uno pero con información genérica. Cosas que puede contener este archivo:

* Nombre y objetivos del repositorio
* Forma de ejecución
* Contacto
* Versión

También puede usar clientes gráficos para GIT, existen muchísimos y para todas las plataformas, en este caso te recomendamos que revises si hay algo que se integre al entorno que uses para desarrollar o en la web por clientes exclusivos, como por ejemplo sourcetree, gitkraken, entre otros.

Una vez finalizado este paso, podes compartir este repositorios con tus compañeros, docentes o colegas para comparar soluciones, mejorar el proyecto, o incluso continuarlo una vez terminado.



[< Anterior](03-db.md) | [Siguiente >](05-first-endpoint.md)