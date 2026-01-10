# WARP.md

This file provides guidance to WARP (warp.dev) when working with code in this repository.

## Commands

### Setup & dependencies
- `npm install` – Install Node development dependencies (Tailwind CSS, PostCSS, Autoprefixer).

### Asset pipeline
- `npm run dev` – Build Tailwind CSS in watch mode. Input: `assets/css/tailwind.css`. Output: `dist/css/style.min.css`.
- `npm run build` – Production Tailwind build with minification. Same input/output as `dev`.
- `npm run build:js` – Concatenate all JavaScript files in `assets/js/*.js` into `dist/js/main.min.js`.

Notes:
- The theme enqueues `dist/css/style.min.css` and two JS bundles: `dist/js/main.min.js` and `dist/js/animations.min.js`. Ensure these files exist and are updated when modifying assets.
- There are no automated test or lint commands defined in `package.json` as of January 2026.

### WordPress theme usage
- Theme directory is intended to live at `/wp-content/themes/treehouse-therapy-2024/`.
- Activate the "Treehouse Therapy Center 2024" theme from the WordPress admin.
- During development, run `npm run dev` while editing PHP/JS/Tailwind files and use your standard local WordPress environment for previewing changes.

## Architecture

### Overview
This repository is a custom WordPress marketing theme for Treehouse Therapy Center. It combines:
- A classic PHP WordPress theme structure (templates + `functions.php`).
- Tailwind CSS for the primary styling pipeline.
- Vanilla JavaScript for UI behavior and an AJAX-powered contact form.
- Centralized configuration for branding (colors, typography) and contact information.

### Theme bootstrap & configuration (`style.css`, `functions.php`)
- `style.css` contains:
  - The theme header (name, description, version, WordPress/PHP requirements, tags, text domain).
  - Minimal base styles for typography and background colors.
  - A note that main styles are compiled Tailwind CSS located at `dist/css/style.min.css`.
- `functions.php` provides the main theme setup and wiring:
  - `treehouse_theme_setup()` (hooked into `after_setup_theme`) adds theme support for `title-tag`, `post-thumbnails`, `custom-logo`, HTML5 features, responsive embeds, and wide alignment, and registers `primary` and `footer` navigation menus. It also sets the global `$content_width` (1200px).
  - `treehouse_enqueue_assets()` (hooked into `wp_enqueue_scripts`) enqueues:
    - Google Fonts (Nunito and Open Sans).
    - The compiled stylesheet `dist/css/style.min.css`.
    - JavaScript bundles `dist/js/main.min.js` and `dist/js/animations.min.js`.
    - A localized JS object `treehouseData` attached to the `treehouse-main` script, exposing `ajaxUrl` and a `treehouse-nonce` for AJAX requests.
  - Contact and business constants:
    - `TREEHOUSE_PHONE`, `TREEHOUSE_PHONE_ALT`, `TREEHOUSE_EMAIL`, `TREEHOUSE_LOCATION` provide a single source of truth for contact information used across templates.

### PHP helpers & components (`functions.php`)
- Contact helpers:
  - `treehouse_phone($alt = false)` returns either the primary or alternate phone number.
  - `treehouse_email()` returns the primary contact email.
- Content helpers:
  - `treehouse_service_areas()` and `treehouse_insurance_providers()` return arrays of service locations and accepted insurers, used to render repeated list content. Update these arrays when service coverage or insurance partnerships change.
- UI component helpers:
  - `treehouse_button($args = array())` renders a consistently styled CTA button as an `<a>` element. It accepts options like `text`, `url`, `style` (`primary`, `secondary`, `outline`), `size` (`sm`, `md`, `lg`), and `icon` (boolean). It composes classes such as `btn btn-{style} btn-{size}` and optionally appends an inline arrow SVG icon.
  - `treehouse_section_header($title, $subtitle = '', $alignment = 'center')` renders a section heading block with Tailwind-style classes (e.g., responsive text sizes, color palette) and optional subtitle, with either centered or left-aligned layout.

These helpers should be preferred over duplicating markup in templates to keep branding and layout consistent.

### Contact form flow (PHP ↔ JS)
- Frontend behavior (in `assets/js/main.js`):
  - `initContactForm()` targets a form with ID `contact-form` and intercepts `submit` events.
  - It builds a `FormData` payload from the form fields and appends `action=treehouse_contact` and `nonce=treehouseData.nonce`.
  - The form is POSTed via `fetch` to `treehouseData.ajaxUrl` (WordPress `admin-ajax.php`).
  - The submit button text changes to `Sending...` and is disabled during the request. On success, the form markup is replaced with a styled success message; on error, an alert is shown and the button is restored.
- Backend handler (in `functions.php`):
  - `treehouse_handle_contact_form()` is registered on both `wp_ajax_treehouse_contact` and `wp_ajax_nopriv_treehouse_contact`.
  - It verifies the AJAX nonce (`check_ajax_referer('treehouse-nonce', 'nonce')`).
  - It sanitizes `name`, `email`, `phone`, and `message` from `$_POST`.
  - It composes and sends an email to `TREEHOUSE_EMAIL` via `wp_mail`, then responds with JSON success or error using `wp_send_json_success()` / `wp_send_json_error()`.

If you change the contact form fields or markup (IDs, `name` attributes), keep `assets/js/main.js` and `treehouse_handle_contact_form()` in sync (field names, form ID, and the AJAX `action` value).

### Front-end behavior (`assets/js/main.js`)
- The main JS bundle is written in vanilla JavaScript, wrapped in an IIFE using strict mode and initialized on `DOMContentLoaded`.
- Key behaviors:
  - **Mobile menu toggle** – `initMobileMenu()` wires up a toggle button (`#mobile-menu-toggle`) and the menu container (`#mobile-menu`) to show/hide the mobile nav, update `aria-expanded`, and close on outside clicks.
  - **Smooth in-page scrolling** – `initSmoothScroll()` applies smooth scrolling to non-`#` internal anchor links using `Element.scrollIntoView()`.
  - **Header scroll effect** – `initHeaderScroll()` monitors `window.pageYOffset` and toggles a `scrolled` class on the site header (`#masthead`) when the user scrolls beyond a threshold, enabling alternate header styling via CSS.
  - **Contact form AJAX** – `initContactForm()` implements the contact flow described above.

All of these are tied together by a single `DOMContentLoaded` listener that calls each initializer.

### Styling & Tailwind (`tailwind.config.js`, CSS assets)
- Tailwind configuration:
  - `content` is set to scan:
    - Top-level `*.php` templates.
    - `template-parts/**/*.php` (if present).
    - `assets/js/**/*.js` so that class names built in JS (e.g., dynamic states) are preserved.
  - `theme.extend` defines the design system:
    - Brand color palette for primary/secondary colors, background, text, and status colors.
    - Font families `nunito` and `open-sans` to match the selected Google Fonts.
    - Additional border radii, box shadows (`premium`, `premium-lg`), and animation utilities (`float`, `fade-in`, `slide-up`) with custom keyframes.
- CSS pipeline:
  - Source Tailwind styles live in `assets/css/tailwind.css`.
  - Both `npm run dev` and `npm run build` compile this into `dist/css/style.min.css`, which is the stylesheet enqueued by WordPress.
  - `style.css` is intentionally kept minimal and should not be used for large new style blocks; prefer the Tailwind pipeline instead.

When adding new templates or moving files, ensure their paths are covered by the `content` globs in `tailwind.config.js` so Tailwind does not purge their classes.

### Template structure (PHP templates)
- Core template files:
  - `header.php` / `footer.php` – Shared site header and footer markup.
  - `index.php` – Fallback template per WordPress hierarchy.
  - `front-page.php` – Custom homepage implementing the primary marketing layout (hero, services, testimonials, contact CTAs, etc.).
  - `page.php` – Generic page template used for standard content pages (About, Services, Contact, Careers, etc.).
- Templates are expected to:
  - Use Tailwind utility classes and the extended theme from `tailwind.config.js`.
  - Reuse helper/component functions from `functions.php` (`treehouse_button`, `treehouse_section_header`, contact constants) to keep design consistent.

### Body classes & excerpts
- `treehouse_excerpt_length()` sets the WordPress excerpt length to 30 words via the `excerpt_length` filter.
- `treehouse_body_classes()` augments the default body class list:
  - Adds `hfeed` on non-singular views.
  - Adds `homepage` when rendering the front page.

These classes can be used in CSS/Tailwind to target specific layouts or behaviors.

### Brand & README highlights
- `README.md` documents the theme's purpose (conversion-focused ABA therapy marketing site), key features (Tailwind styling, scroll animations, mobile-first, accessibility, performance), and brand colors.
- When changing visual design or building new components, align with the brand palette and design language defined in `README.md` and `tailwind.config.js` to maintain consistency with the existing marketing site.
