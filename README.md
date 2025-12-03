D'Julia — Sistema Web para Pastelería

Proyecto académico — Universidad Tecnológica del Perú
Curso: Taller de Programación Web
Docente: Enrique Lee Huamani Uriarte

Una plataforma web moderna diseñada para digitalizar la experiencia del cliente y la gestión interna de la pastelería D’Julia.
Incluye interfaz de usuario, carrito de compras, proceso de pedidos y un módulo administrativo para gestionar productos, categorías, banners y contenidos.

Integrantes del Proyecto

Coveñas Quispe Tamara Alison

Alvarez Samaniego Luis Carlos

Baylón Vila Omara Yamileth

Becerra Tello Angel Emilio

Vidal Alamo Frank Edu

Arquitectura General

El sistema está construido bajo una arquitectura web clásica con separación entre:

Frontend (HTML, CSS, JavaScript)

Backend (PHP)

Base de Datos (MySQL)

Módulo Administrativo

Vista de Usuario Final

El flujo está dividido en dos entornos:

Usuario Final — navegación, productos, carrito y proceso de compra.

Administrador — panel para gestión de todo el contenido del sitio.

🖥️ Frontend — HTML, CSS y JavaScript

Organizado en páginas visibles para el cliente y componentes reutilizables.

Páginas del usuario

Inicio (slider, servicios, galería, testimonios)

Nosotros

Productos / Carta

Detalle de producto

Carrito de compras

Proceso de pedido (3 pasos)

Ubicación

Contacto

Cuenta del usuario (login y registro)

Componentes destacados

Tarjetas de productos

Carrito lateral dinámico

Slider de imágenes

Testimonios

Mapa de locales

Formularios con validaciones

JavaScript

Validaciones de formularios

Filtros de productos

Gestión del carrito

Navegación dinámica

Envío de datos con AJAX mediante fetch()

Actualización visual de imágenes y sliders

🛠️ Backend — PHP

Estructurado por funcionalidades:

1. Autenticación y seguridad

Cambio de contraseña con contraseña cifrada (password_hash())

Manejo de sesiones para administrador

Validaciones de acceso al panel admin

2. Módulo de Administración

Agregar productos

Editar productos (imagen, descripción, precio)

Eliminar productos

Gestionar categorías

Actualizar banner principal

Gestionar información institucional de la pastelería

3. Comunicaciones AJAX

Envío de datos sin recargar página

Gestión de respuestas JSON

Validación de contraseñas y configuración

🗄️ Base de Datos — MySQL

Base de datos: pasteleria_db
Codificación: UTF8MB4

Tablas principales

usuarios

productos

categorias

pedidos

detalle_pedidos

metodos_pago

carrito_temporal

logs_acceso

Incluye:

Triggers para actualización automática de stock

Vistas para reportes

Relaciones normalizadas para una gestión ordenada

🧩 Estructura del Módulo Administrador

Login

Dashboard general

Gestión de productos (CRUD)

Gestión de categorías

Gestión de banner principal

Edición de contenido institucional

Cambio de contraseña

Administración de imágenes

🛒 Funcionalidades del Usuario Final

Catálogo completo de productos

Filtros por categorías

Carrito de compras interactivo

Proceso de pedido paso a paso:

Datos personales

Delivery

Método de pago (Yape / Tarjeta)

Visualización de locales

Testimonios

Galería de imágenes

Formulario de contacto

Página parcialmente responsive

🧪 Pruebas Realizadas

Validación de campos required

Validación de email con type="email"

Rutas verificadas en menú principal

Carga de imágenes

Slider funcional

Carrito y totales calculados correctamente

Login funcionando con sesiones

Validación de contraseñas en backend

Secciones responsive verificadas

📌 Correcciones Pendientes

Conexión completa del módulo admin con la BD

Lógica final para subir y actualizar imágenes desde admin

Optimización mobile para pantallas pequeñas

Implementación de logs para errores

Limpieza de redundancias en el código

🧱 Tecnologías Utilizadas
Frontend

HTML5

CSS3

JavaScript

AJAX (fetch API)

Backend

PHP

MySQL

Sesiones y validaciones

Otros

Git / GitHub

Recursos gráficos y sliders

🏁 Conclusión

El sistema web de D’Julia integra una arquitectura funcional, módulos escalables y una interfaz amigable tanto para usuarios como administradores.
Permite gestionar productos, realizar pedidos, actualizar contenido y presentar una experiencia profesional alineada con las necesidades del negocio.
