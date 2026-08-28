# Testing Drupal

Proyecto Drupal 11 gestionado con Composer y DDEV.

## Requisitos
- [DDEV](https://ddev.readthedocs.io/)
- [Docker](https://www.docker.com/)
- [Composer](https://getcomposer.org/)

## Inicio rápido con DDEV

1. **Iniciar el entorno DDEV:**
   ```bash
   ddev start
   ```

2. **Instalar dependencias:**
   ```bash
   ddev composer install
   ```

3. **Instalar Drupal:**
   ```bash
   ddev drush site:install standard --yes --account-name=admin --account-pass=admin
   ```

4. **Abrir el sitio en el navegador:**
   ```bash
   ddev launch
   ```

## Estructura del Proyecto
- `web/`: Raíz web de Drupal (código fuente público).
- `web/modules/custom/`: Módulos personalizados.
- `web/themes/custom/`: Temas personalizados.
- `.ddev/`: Configuración del entorno local de desarrollo con DDEV.
- `.github/workflows/`: Pipelines de Integración Continua (CI).
