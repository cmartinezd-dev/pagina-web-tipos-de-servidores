# 🖥️ ServidoresWeb - Guía de Servidores

Una aplicación web moderna desarrollada en **Laravel 12** que proporciona información completa sobre los diferentes tipos de servidores web, su administración de memoria y características.

![Laravel](https://img.shields.io/badge/Laravel-12.0-FF2D20?style=flat-square&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat-square&logo=php)
![Tailwind CSS](https://img.shields.io/badge/Tailwind-CSS-38B2AC?style=flat-square&logo=tailwind-css)
![SQLite](https://img.shields.io/badge/SQLite-Database-003B57?style=flat-square&logo=sqlite)

## 📋 Contenido

- [Características](#características)
- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Uso](#uso)
- [Servidores Incluidos](#servidores-incluidos)

## ✨ Características

### 📚 Información Completa
- ✅ 8 servidores investigados en profundidad
- ✅ Administración de memoria detallada
- ✅ Características, ventajas y desventajas
- ✅ Casos de uso y videos embebidos

### 🔐 Autenticación Segura
- ✅ Registro e inicio de sesión
- ✅ Dashboard personalizado
- ✅ Hasheo seguro de contraseñas

### 📱 Diseño Responsivo
- ✅ Funciona en todos los dispositivos
- ✅ Interfaz moderna con Tailwind CSS
- ✅ Modo claro/oscuro

## 🔧 Requisitos Mínimos

- PHP 8.2+
- Composer
- SQLite o MySQL
- Laravel 12

## 🚀 Instalación Rápida

```bash
# 1. Navega al directorio
cd mi_proyecto

# 2. Instala dependencias
composer install

# 3. Genera la clave de la app
php artisan key:generate

# 4. Ejecuta migraciones
php artisan migrate

# 5. Inicia el servidor
php artisan serve
```

Accede a `http://localhost:8000`

## 📌 Funcionalidades Principales

### Página de Inicio
- Grid responsivo de 8 servidores
- Información rápida de cada uno
- Estadísticas del sitio
- Call-to-action para registro

### Páginas Individuales de Servidores
Cada servidor incluye:
- Descripción detallada
- Características principales
- Información de memoria (mínima, típica, producción)
- Ventajas y desventajas
- Casos de uso
- Video tutorial embebido

### Sistema de Autenticación
- **Registro**: Nombre, email, contraseña
- **Login**: Email y contraseña
- **Dashboard**: Panel personalizado del usuario

## 🖥️ Servidores Incluidos

| Servidor | Tipo | Memoria | Mejor Para |
|----------|------|---------|-----------|
| Apache | Web | 256MB-1GB | Hosting compartido |
| Nginx | Web | 5-50MB | Alto tráfico |
| IIS | Web | 256MB-2GB | Entornos .NET |
| LiteSpeed | Web | 3-30MB | Rendimiento extremo |
| Node.js | Aplicación | 50-150MB | APIs modernas |
| Tomcat | Aplicación | 256MB-1GB | Java Enterprise |
| Gunicorn | Aplicación | 10-200MB | Python (Flask/Django) |
| Kestrel | Aplicación | 20-150MB | .NET Core |

## 📂 Estructura Clave

```
mi_proyecto/
├── app/Http/Controllers/
│   ├── ServidorController.php
│   ├── AuthController.php
│   └── DashboardController.php
├── resources/views/
│   ├── servidor/
│   ├── auth/
│   └── dashboard/
└── routes/web.php
```

## 🔐 Seguridad

- ✅ CSRF Protection
- ✅ Hashing bcrypt
- ✅ Validación servidor
- ✅ Sessions seguras

## 🌐 Despliegue

1. Sube archivos al hosting
2. Configura `.env` con datos de BD
3. Ejecuta `php artisan migrate`
4. Establece permisos: `chmod -R 755 storage`

## 📝 Personalización

Edita `resources/views/components/footer.blade.php` para cambiar el nombre del desarrollador.

## 📄 Licencia

Licencia MIT - Libre para usar y modificar

---

**Desarrollado por:** Tu Nombre
**Fecha:** 13 de febrero de 2026

¡Explora y aprende sobre servidores web! 🚀
