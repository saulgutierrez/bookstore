# 📚 Proyecto Ecommerce – Venta de Libros Digitales

Este proyecto es una aplicación web tipo **ecommerce**, desarrollada con **PHP**, **MySQL** y **jQuery**, cuyo objetivo es la venta de libros en formato electrónico.  
La interfaz visual está basada en una plantilla de **MDBootstrap**, la cual ha sido adaptada para consumir datos dinámicos desde una base de datos y conectarse con una pasarela de pagos externa.

---

## 🧩 Tecnologías utilizadas

### Frontend
- HTML5, CSS3
- JavaScript, jQuery
- **Bootstrap** y **Popper.js** (incluidos en la plantilla MDBootstrap)
- **Alertify.js** – notificaciones y diálogos de confirmación

### Backend
- PHP (programación estructurada)
- MySQL (base de datos relacional)

### Servicios externos
- **Stripe API** – pasarela de pagos (modo prueba / sandbox)

---

## 🧠 Descripción general del sistema

El sistema está dividido en dos grandes módulos:

- **Frontend (tienda virtual)**
- **Backend / Panel Administrador (`admin-panel/`)**

---

## 🛍️ Frontend – Tienda virtual

La sección pública del sistema permite a cualquier visitante navegar por el catálogo de productos sin necesidad de autenticación.

### Funcionalidades principales:

- Visualización del catálogo de libros digitales.
- Acceso al detalle de cada producto:
  - Nombre del libro
  - Descripción
  - Precio
  - Imagen representativa
- Clasificación de productos por **categorías**.
- Registro de usuarios mediante correo electrónico y contraseña.
- Inicio y cierre de sesión.

### Funcionalidades exclusivas para usuarios autenticados:

- Añadir productos al **carrito de compras**.
- Añadir productos a una **lista de deseos**.
- Visualizar la lista de deseos.
- Consultar el historial de productos comprados.
- Realizar compras mediante pasarela de pago.

---

## 🛒 Carrito de compras

El carrito de compras muestra:

- Imagen del producto
- Nombre
- Precio unitario
- Selector de cantidad

El **precio total se actualiza dinámicamente** conforme se modifican las cantidades, utilizando jQuery y AJAX.

---

## 💳 Proceso de compra y pagos

- Al confirmar la compra, el usuario es redirigido a una pantalla de confirmación.
- Se solicitan los datos personales y los datos de la tarjeta de crédito.
- El pago se procesa mediante la **API de Stripe en modo prueba**, por lo que:
  - No se utiliza dinero real.
  - Las transacciones se reflejan correctamente en el panel de Stripe.
- Una vez validada la transacción:
  - Se habilita automáticamente la **descarga de un archivo comprimido** que contiene los libros adquiridos.

---

## 🔐 Restricciones de acceso

- Los productos pueden visualizarse sin iniciar sesión.
- Funciones como:
  - Añadir al carrito
  - Añadir a lista de deseos
  - Comprar productos  
  requieren **autenticación previa**, siguiendo el comportamiento estándar de plataformas ecommerce.

---

## 🧑‍💼 Backend – Panel Administrador (`admin-panel/`)

El panel administrativo permite gestionar completamente el sistema mediante autenticación previa.

### Funcionalidades del panel:

- **Dashboard principal** con estadísticas:
  - Número de administradores
  - Número de productos
  - Número de categorías

### Gestión de categorías (CRUD):
- Nombre
- Descripción
- Imagen representativa
- Estado (activo / oculto)

### Gestión de productos (CRUD):
- Nombre del libro
- Precio por unidad
- Descripción
- Categoría asociada
- Imagen representativa
- Archivo del libro
- Estado (visible / oculto)

### Gestión de administradores:
- Creación de nuevos administradores
- Datos requeridos:
  - Nombre de usuario
  - Correo electrónico
  - Contraseña

### Control de estado:
- Tanto productos como categorías pueden:
  - Activarse o desactivarse
  - Ocultarse temporalmente sin eliminarlos de la base de datos

---

## 🗄️ Base de datos

La base de datos contiene tablas para:

- Usuarios
- Administradores
- Productos
- Categorías
- Carrito de compras
- Lista de deseos
- Historial de compras

Las relaciones permiten mantener coherencia entre usuarios, productos comprados y descargas disponibles.

---

## 🧩 Observaciones sobre la arquitectura

Este proyecto fue desarrollado como parte de una etapa temprana de formación, por lo que:

- No sigue estrictamente un patrón de diseño como MVC.
- La lógica de negocio y presentación se encuentran parcialmente acopladas.
- Aun así, el sistema es **funcional**, **escalable** y adecuado como base para:
  - Migrar a un framework moderno (Laravel, CodeIgniter).
  - Implementar mejoras de seguridad y arquitectura.

---

## 🧾 Créditos

- **Plantilla base:** MDBootstrap  
- **Pasarela de pagos:** Stripe (modo prueba)
- **Librerías adicionales:** Alertify.js
- **Desarrollo e integración backend:** Saúl Gutiérrez

---

## 📌 Notas finales

Este proyecto simula un flujo completo de ecommerce moderno, incluyendo:
- Autenticación de usuarios
- Gestión de productos
- Pagos en línea
- Descarga de contenido digital

Es ideal como proyecto académico, portafolio o base para una implementación más robusta.

