# TPE1 parte 2 - Marco Fumagalli y Gino Longobucco

Este proyecto está diseñado para gestionar la información sobre armas del juego Battlefield 4. La base de datos permite almacenar y organizar datos relacionados con diferentes tipos de armas y las armas específicas dentro de cada tipo.

## Diagrama de la Base de Datos

El diagrama a continuación muestra la estructura y las relaciones entre las tablas de la base de datos.

![Diagrama](https://github.com/user-attachments/assets/c2639ddd-e450-4b0f-8cfc-1a8b2019ab19)

## Estructura de la Base de Datos

La base de datos consta de dos tablas principales:

- **WeaponType**: Almacena los tipos de armas, como Asalto, Francotirador, Subfusil, etc.
- **Weapon**: Almacena detalles sobre cada arma, incluyendo su nombre, daño y rango efectivo.

La tabla `Weapon` está vinculada a `WeaponType` mediante una clave foránea, estableciendo una relación de uno a muchos.

---

## 🚀 Instalación y Uso

### 1. Requisitos del Servidor

Este proyecto necesita un servidor que tenga los siguientes componentes:

• **Apache** (servidor web)  
• **MySQL** (gestión de la base de datos)  
• **PHP 7.0+** (lenguaje de programación)

### 2. Importar la Base de Datos

Para importar la base de datos:

• Accede a **phpMyAdmin** desde tu navegador:  
 `http://localhost/phpmyadmin`  
• Crea una nueva base de datos e importa el archivo SQL ubicado en:  
 `/sql/battlefield_db.sql`

### 3. Acceder al Sitio Web

Para acceder a la página pública y visualizar el listado de armas, navega a la siguiente URL:

`http://localhost/TPE1---Gino-Longobucco-y-Marco-Fumagalli/views/index.php`

### 4. Acceso a la Administración

El acceso a la sección de administración está disponible en la siguiente URL:

`http://localhost/TPE1---Gino-Longobucco-y-Marco-Fumagalli/admin/admin.php`

Utiliza las siguientes credenciales para ingresar:

• **Usuario**: `webadmin`  
• **Contraseña**: `admin`

### 5. Panel de Administración

Una vez logueado, puedes gestionar las armas (agregar, editar, eliminar) desde el panel de administración:

`http://localhost/TPE1---Gino-Longobucco-y-Marco-Fumagalli/admin/dashboard.php`

### 6. Cerrar Sesión

Para cerrar la sesión, utiliza la opción "Cerrar Sesión" disponible en el panel de administración o navega a:

`http://localhost/TPE1---Gino-Longobucco-y-Marco-Fumagalli/admin/logout.php`

---

## 🛠️ Tecnologías Utilizadas

• **PHP** - Lenguaje para la lógica de negocio  
• **MySQL** - Base de datos para almacenamiento de información  
• **Apache** - Servidor web para ejecutar el sitio  
• **HTML/CSS** - Estructura y estilo de las páginas
