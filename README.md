# 🍰 D'Julia — Sistema Web para Pastelería  
Proyecto académico — Universidad Tecnológica del Perú  
**Curso:** Taller de Programación Web  
**Docente:** Enrique Lee Huamani Uriarte  

---

## 📝 Descripción del Proyecto
D'Julia es una plataforma web moderna desarrollada para digitalizar la experiencia del cliente y la gestión interna de una pastelería.  
Incluye una **vista pública para clientes** y un **módulo administrativo**, permitiendo presentar productos, gestionar contenido, administrar pedidos y más.

---

## 👥 Integrantes del Proyecto
- Coveñas Quispe Tamara Alison  
- Alvarez Samaniego Luis Carlos  
- Baylón Vila Omara Yamileth  
- Becerra Tello Angel Emilio  
- Vidal Alamo Frank Edu  

---

## 🏗️ Arquitectura General
El sistema está dividido en dos entornos principales:

### 1️⃣ Usuario Final (Frontend)
Desarrollado con **HTML, CSS y JavaScript**, orientado a navegabilidad intuitiva:

- Inicio con slider principal  
- Sección “Sobre Nosotros”  
- Carta de productos por categorías  
- Detalle de producto  
- Carrito de compras dinámico  
- Proceso de pedido en 3 pasos  
- Formulario de contacto  
- Mapa de locales  
- Galería e imágenes slider  
- Testimonios de clientes  

### 2️⃣ Administrador (Backend + Panel)
Desarrollado con **PHP y MySQL**, incluyendo:

- Login seguro con sesiones  
- Gestión de productos (crear, editar, eliminar)  
- Gestión de categorías  
- Edición del banner principal  
- Modificación de contenido institucional  
- Cambio de contraseña con cifrado (`password_hash()`)  
- Administración de imágenes  

---

## 🖥️ Frontend — HTML / CSS / JavaScript
Organizado en páginas y componentes:

### 📄 Páginas
- Inicio  
- Nosotros  
- Productos / Carta  
- Detalle de producto  
- Carrito  
- Proceso de compra  
- Contacto  
- Ubicación  
- Cuenta (Login / Registro)  

### 🔧 Funcionalidades JS
- Validaciones de datos  
- Carrito dinámico  
- Filtros por categoría  
- Slider automático  
- AJAX con `fetch()`  
- Actualización visual de imágenes  
- Navegación dinámica  

---

## 🛠️ Backend — PHP
Incluye:

- Manejo de sesiones  
- Seguridad con cifrado de contraseñas  
- Validaciones en servidor  
- CRUD de productos  
- CRUD de categorías  
- Edición de banner  
- Gestión de contenido  
- Manejo de imágenes (estructura lista para conexión)  

---

## 🗄️ Base de Datos — MySQL

### 📌 Tablas principales
- usuarios  
- productos  
- categorias  
- pedidos  
- detalle_pedidos  
- metodos_pago  
- carrito_temporal  
- logs_acceso  

### ⚙️ Características
- Triggers para actualizar stock  
- Vistas para reportes  
- Relaciones normalizadas  
- Codificación UTF8MB4  

---

## 🧪 Pruebas Realizadas
- Validación de formularios (required, email)  
- Navegación entre secciones  
- Slider funcional  
- Carga correcta de imágenes  
- Carrito mostrando totales  
- Interfaz funcional para usuario y administrador  
- Sesiones en login de administrador  
- Vista parcialmente responsive  

---

## 🛠️ Tareas Pendientes
- Conexión completa del panel admin con la BD  
- Subida de imágenes desde el panel admin  
- Mejoras en responsive design  
- Implementación de logs para errores  
- Optimización y limpieza de código  

---

## 🧱 Tecnologías Utilizadas

### 🌐 Frontend
- HTML5  
- CSS3  
- JavaScript  
- AJAX  

### 🔙 Backend
- PHP  
- MySQL  

### 📦 Otros
- Git / GitHub  
- Recursos gráficos  
- Validaciones JS  
- Manejo de sesiones  

---

## 🏁 Conclusión
El sistema web de D’Julia presenta una arquitectura organizada, un panel administrativo funcional y una experiencia de usuario moderna.  
Permite gestionar productos, actualizar contenido y ofrecer un catálogo digital completo para una pastelería profesional.

---
