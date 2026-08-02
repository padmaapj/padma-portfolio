<?php
$page_title = "Contact";
$page_slug  = "contact.php";
$page_desc  = "Get in touch with Padma Lakshmi for graphic design, branding, digital marketing or WordPress development projects.";
include "includes/header.php";
include "includes/navbar.php";
?>

<section class="page-hero">
  <div class="bg-orbs"><div class="orb orb-1"></div><div class="orb orb-2"></div></div>
  <div class="container">
    <div class="eyebrow" data-aos="fade-up">Get In Touch</div>
    <h1 class="page-title" data-aos="fade-up">Let's build something<br><em class="text-accent" style="font-style:normal;">worth talking about</em></h1>
    <div class="breadcrumb" data-aos="fade-up"><a href="index.php">Home</a><i class="fa-solid fa-chevron-right" style="font-size:.6rem;"></i><span>Contact</span></div>
  </div>
</section>

<section style="padding-top:0;">
  <div class="container">
    <div class="contact-grid">
      <div data-aos="fade-right">
        <div class="contact-info-card glass card">
          <div class="eyebrow">Contact Info</div>
          <h2 style="font-family:var(--font-display);font-size:1.6rem;margin-top:8px;">Reach me directly</h2>

          <div style="margin-top:26px;">
            <div class="contact-info-item">
              <span class="ico"><i class="fa-solid fa-phone"></i></span>
              <div><strong>Phone</strong><a href="tel:+919578689323">+91 95786 89323</a></div>
            </div>
            <div class="contact-info-item">
              <span class="ico"><i class="fa-solid fa-envelope"></i></span>
              <div><strong>Email</strong><a href="mailto:padma.appj@gmail.com">padma.appj@gmail.com</a></div>
            </div>
            <div class="contact-info-item">
              <span class="ico"><i class="fa-brands fa-behance"></i></span>
              <div><strong>Behance</strong><a href="https://behance.net/padma20" target="_blank" rel="noopener">behance.net/padma20</a></div>
            </div>
            <div class="contact-info-item">
              <span class="ico"><i class="fa-solid fa-clock"></i></span>
              <div><strong>Response Time</strong><span>Within 24 hours, Mon – Sat</span></div>
            </div>
          </div>

          <div class="contact-socials">
            <a href="https://behance.net/padma20" target="_blank" rel="noopener" aria-label="Behance"><i class="fa-brands fa-behance"></i></a>
            <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#" aria-label="Dribbble"><i class="fa-brands fa-dribbble"></i></a>
          </div>
        </div>
      </div>

      <div data-aos="fade-left">
        <div class="form-card glass card">
          <div class="eyebrow">Start a Project</div>
          <h2 style="font-family:var(--font-display);font-size:1.6rem;margin-top:8px;margin-bottom:26px;">Tell me about your project</h2>

          <form id="contact-form" novalidate>
            <div class="form-row">
              <div class="field">
                <label for="name">Full Name *</label>
                <input type="text" id="name" name="name" placeholder="Your name" required>
              </div>
              <div class="field">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" placeholder="you@company.com" required>
              </div>
            </div>
            <div class="form-row">
              <div class="field">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="+91 00000 00000">
              </div>
              <div class="field">
                <label for="service">Service Needed</label>
                <select id="service" name="service">
                  <option value="">Select a service</option>
                  <option>Graphic Design / Branding</option>
                  <option>Logo Design</option>
                  <option>Social Media Design</option>
                  <option>Digital Marketing (SEO / Ads)</option>
                  <option>WordPress Development</option>
                  <option>Video Editing</option>
                  <option>Something else</option>
                </select>
              </div>
            </div>
            <div class="field">
              <label for="subject">Subject *</label>
              <input type="text" id="subject" name="subject" placeholder="What's this about?" required>
            </div>
            <div class="field">
              <label for="message">Project Details *</label>
              <textarea id="message" name="message" placeholder="Tell me a bit about your brand, timeline and budget..." required></textarea>
            </div>
            <!-- honeypot -->
            <input type="text" name="website" style="position:absolute;left:-9999px;" tabindex="-1" autocomplete="off">

            <button type="submit" class="btn btn-primary" style="width:100%;">
              <i class="fa-solid fa-paper-plane"></i> Send Message
            </button>
            <div id="form-status" class="form-status" role="status"></div>
          </form>
        </div>
      </div>
    </div>

    <div class="map-embed" data-aos="fade-up">
      <iframe
        src="https://www.openstreetmap.org/export/embed.html?bbox=79.5%2C12.7%2C80.5%2C13.4&layer=mapnik"
        loading="lazy" title="Chennai, Tamil Nadu location map"></iframe>
    </div>
  </div>
</section>

<?php include "includes/footer.php"; ?>
