# 🚀 Manual de Instalación - Proyecto Laravel + Laragon

Este documento describe cómo instalar y ejecutar este proyecto Vite utilizando **Laragon** como entorno de desarrollo local.

## ✅ Requisitos

Antes de comenzar, asegúrate de tener instalado:

-   [Laragon](https://laragon.org/)
-   [Node.js](https://nodejs.org/) (Verifícalo con `node -v` en la terminal de Laragon)

---

## 📁 Paso 1: Clonar el Repositorio

Abre la terminal de Laragon y ubícate en la carpeta `www`:

```bash
cd C:\laragon\www
git clone https://github.com/jhoanchq/baseslaravel
```

## 📂 Paso 2: Ingresar a la Carpeta del Proyecto

```bash
cd baseslaravel
```

## 📦 Paso 3: Instalar Dependencias

```bash
composer install

npm install
```

## 🚀 Paso 4: Ejecutar el Servidor de Desarrollo

```bash
npm run dev
```

Continuas con todo el proceso a partir del paso 2

# Los controladores-controller

##Es la clase que maneja la logica de
##negocio(Interacion con bases de datos)

## de una aplicacion, recibe las peticiones

##del usuario, interactura con los modelos
##si es necesario y devuelve generalmente una Vista (View)
#Ejemplo:
Para crear un controlador debemos ejecutar el siguiente comando

"php artisan meke:controller nonbreDelControlador"
"php artisan meke:controller UserController"
