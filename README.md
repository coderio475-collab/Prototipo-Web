# Prototipo de la pagina web institucional

Prototipo del sitio web institucional de la escuela, enfocado en la página de **Inicio** y el de **Registro** (estudiante / docente).


## 🛠️ Tecnologías

- HTML5 + CSS3 
- [Bootstrap 5.3](https://getbootstrap.com/) (grid y componentes, vía CDN)
- [Bootstrap Icons](https://icons.getbootstrap.com/)(CDN)
- Google Fonts: **Fraunces** (títulos) e **Inter** (texto general)
- JavaScript para eventos visuales del registro (`assets/js/main.js`)
- PHP + MySQL para guardar usuarios (`app/` y `database/`)


## ▶️ Cómo verlo

El registro requiere un servidor PHP con MySQL y la base de datos `riocode` configurada en `database/conexion.php`.

1. Descargar o clonar la carpeta.
2. Iniciar **Apache** y **MySQL** desde el panel de XAMPP.
3. Abrir `http://localhost/phpmyadmin`, crear/importar la base de datos ejecutando el archivo `database/riocode.sql` en la pestaña **SQL**.
4. Abrir `http://localhost/Web%20Proyecto/seconds_index/registro.html` desde el navegador.
5. Luego de enviar un formulario, revisar los registros en phpMyAdmin (`riocode` → `usuarios`) o visitar `http://localhost/Web%20Proyecto/public/index.php` para ver la lista.

La conexión local usa el usuario `root`, contraseña vacía y el puerto MySQL `3306`. Si tu instalación de XAMPP usa otra contraseña o puerto, actualizá esos valores en `database/conexion.php`.

> Requiere conexión a internet la primera vez, ya que Bootstrap y las
> tipografías se cargan desde un CDN(Red de Distribución de Contenidos).
