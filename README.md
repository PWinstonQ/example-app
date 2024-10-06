<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<h1 align="center">Sistema de Correos en Laravel</h1>

<p align="center">
  <a href="https://laravel.com/docs/10.x/mail"><img src="https://img.shields.io/badge/Laravel-Mail-ff2d20.svg" alt="Mail in Laravel"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Acerca de este Branch

**sistema de correos** en Laravel. Aquí aprenderás cómo configurar, enviar y gestionar correos electrónicos utilizando el **sistema Mail** de Laravel. También cubriremos cómo trabajar con diferentes servicios de correo como **SMTP**, **Mailgun**, **Amazon SES** y más.

### Funcionalidades Principales

- **Envío de correos electrónicos**: Envío de correos en texto plano o en HTML.
- **Plantillas personalizadas**: Uso de **Blade** para diseñar correos con estilos y contenido dinámico.
- **Servicios de terceros**: Integración con Mailgun, Postmark, Amazon SES, entre otros.
- **Envío de archivos adjuntos**: Incluye archivos en tus correos.
- **Envío de correos en segundo plano**: Mejora el rendimiento usando colas para el envío asíncrono de correos.

## Configuración

Para empezar, asegúrate de configurar correctamente el sistema de correos en el archivo `.env` de tu proyecto. Un ejemplo de configuración con SMTP sería:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="correo@ejemplo.com"
MAIL_FROM_NAME="${APP_NAME}"
