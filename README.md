# Padma Lakshmi — Portfolio Website

A premium, single-owner portfolio website for a Senior Graphic Designer & Digital
Marketing Specialist. Built with HTML5, CSS3, vanilla JavaScript, PHP (includes +
contact form), Bootstrap 5, GSAP, AOS scroll animations, Font Awesome and Swiper.

---

## 1. Folder structure

```
/
├── index.php                Home page
├── about.php                About / bio / timeline / certifications
├── portfolio.php            Client work, logo wall, social/marketing/poster galleries
├── services.php             Services grid
├── contact.php               Contact form + info
├── process.php               5-step working process
├── mail.php                  PHP contact form handler (AJAX endpoint)
├── gen_assets.py             Script that generated the placeholder SVG imagery
│
├── includes/
│   ├── header.php            <head>, meta/SEO tags, preloader, cursor
│   ├── navbar.php             Sticky navigation
│   └── footer.php             Footer + all script tags
│
├── assets/
│   ├── css/style.css          Full design system (tokens, components, responsive)
│   ├── js/main.js             Preloader, cursor, GSAP/AOS, filters, form, counters
│   └── images/                 Placeholder SVGs (see section 5)
│
├── mail/                      Contact-form submission log (auto-created)
└── README.md
```

## 2. Technology used

| Layer | Tech |
|---|---|
| Markup | HTML5 (via PHP includes) |
| Styling | CSS3 (custom properties, glassmorphism, neumorphism), Bootstrap 5 (grid/utilities/CDN) |
| Scripting | Vanilla JavaScript (ES6) |
| Animation | GSAP + ScrollTrigger, AOS (Animate On Scroll) |
| Icons | Font Awesome 6 |
| Sliders | Swiper 11 |
| Backend | PHP 8 (contact form handler, `mail()`) |

All third-party libraries are loaded from public CDNs (cdnjs / fontshare / Google
Fonts) — no local `node_modules` or build step is required.

## 3. Requirements

- PHP 7.4+ (PHP 8.x recommended)
- A web server that can execute `.php` files (Apache/Nginx/LiteSpeed)
- Outbound mail capability for the contact form (see section 6)

## 4. Installing locally with XAMPP

1. Install [XAMPP](https://www.apachefriends.org/) and start the **Apache** module
   from the XAMPP Control Panel (MySQL is not required for this project).
2. Copy the entire project folder into `xampp/htdocs/`, e.g.
   `C:\xampp\htdocs\padma-portfolio\` (Windows) or
   `/Applications/XAMPP/htdocs/padma-portfolio/` (macOS).
3. Open a browser and visit `http://localhost/padma-portfolio/index.php`.
4. **Contact form on XAMPP:** PHP's `mail()` function needs a mail transport.
   XAMPP does not configure one out of the box, so either:
   - Install a local SMTP debugging tool such as
     [Mailhog](https://github.com/mailhog/MailHog) or
     [Papercut](https://github.com/ChangemakerStudios/Papercut-SMTP) and point
     `php.ini`'s `sendmail_path` at it, **or**
   - Swap `mail.php`'s `mail()` call for an SMTP library (e.g. PHPMailer with
     Gmail SMTP / SendGrid) if you want to actually receive test emails locally.
   The form will still validate and show a friendly error if mail isn't configured
   — it fails gracefully rather than breaking the page.

## 5. Deploying to Hostinger (or any shared hosting)

1. Log in to **hPanel** → **File Manager** (or use FTP/SFTP with FileZilla).
2. Upload the entire project contents into `public_html/` (or a subfolder if this
   isn't the root domain).
3. Make sure file permissions are the hosting default (usually `644` for files,
   `755` for folders) — no special permissions are required.
4. Hostinger's shared hosting has `mail()` pre-configured, so the contact form
   should work immediately once uploaded. Test it by submitting the form and
   checking the inbox for `padma.appj@gmail.com` (update this address in
   `mail.php` if needed — see section 6).
5. Point your domain / subdomain to the folder you uploaded to in hPanel →
   **Domains**.
6. (Recommended) Install a free SSL certificate via hPanel → **SSL** so the site
   loads over `https://`.

## 6. Configuration you should update before going live

| What | Where |
|---|---|
| Recipient email for contact form | `mail.php` → `$recipient_email` |
| Site URL (used in SEO/canonical tags) | `includes/header.php` → `$site_url` |
| Resume PDF | Add a real file at `assets/padma-lakshmi-resume.pdf` (currently referenced but not included — see section 7) |
| Social links (Instagram/LinkedIn/Dribbble) | `includes/footer.php`, `includes/navbar.php`, `contact.php` — replace `#` placeholders |
| Google Analytics / Search Console | Add your snippet just before `</head>` in `includes/header.php` |
| Map embed | `contact.php` — replace the OpenStreetMap iframe with your exact address, or swap for a Google Maps embed |

## 7. Placeholder imagery

Every image referenced in this build (project screenshots, the 50-logo wall,
social media creatives, marketing mockups, posters, certificates and client
marks) is a generated **SVG placeholder** living under `assets/images/`, created
by `gen_assets.py`. They're on-brand (black/white/orange) and fully responsive,
so the site is genuinely "ready to view" immediately — but before launch you
should replace them with real photography, screenshots and design work:

- `assets/images/projects/*.svg` → real screenshots of the 8 client sites
- `assets/images/logos/logo-01.svg` … `logo-50.svg` → actual logo designs
- `assets/images/social/*.svg` → real social/print creative exports
- `assets/images/marketing/*.svg` → real ad/report mockups
- `assets/images/posters/*.svg` → real poster designs
- `assets/images/certificates/*.svg` → scanned/exported real certificates
- `assets/images/hero-portrait.svg` → an actual photo of Padma Lakshmi
- `assets/padma-lakshmi-resume.pdf` → the real downloadable resume (add this file)

Simply replace each SVG with a same-named `.jpg`/`.png`/`.webp` (or keep the
`.svg` extension if you export vector artwork) and update the `src` in the
relevant `.php` file if the filename changes.

## 8. Performance & SEO notes

- All images use `loading="lazy"` except the above-the-fold hero portrait.
- Semantic HTML, meta description/OG tags and a JSON-LD `Person` schema are
  included in `includes/header.php`.
- `prefers-reduced-motion` is respected across all animations.
- For a 95+ PageSpeed score in production: compress/convert final raster images
  to WebP, enable Gzip/Brotli + browser caching at the server level (Hostinger
  does this via hPanel → **Optimization**), and consider self-hosting the CDN
  fonts/libraries if you want to remove third-party requests entirely.

## 9. Browser support

Modern evergreen browsers (Chrome, Edge, Firefox, Safari — last 2 versions).
Custom cursor and heavy motion effects are automatically disabled on touch
devices and for users with `prefers-reduced-motion` enabled.

---

Built for **Padma Lakshmi** — Creative Graphic Designer & Digital Marketing
Specialist. Questions about this build: padma.appj@gmail.com
