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
2. Iniciar el servidor PHP apuntando a la carpeta del proyecto.
3. Abrir `seconds_index/registro.html` desde ese servidor.

> Requiere conexión a internet la primera vez, ya que Bootstrap y las
> tipografías se cargan desde un CDN(Red de Distribución de Contenidos).
