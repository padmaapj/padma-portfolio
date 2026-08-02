<?php
$page_title = "About";
$page_slug  = "about.php";
$page_desc  = "Learn about Padma Lakshmi — 7+ years as a Creative Graphic Designer, Digital Marketing Specialist and WordPress Developer.";
include "includes/header.php";
include "includes/navbar.php";
?>

<section class="page-hero">
  <div class="bg-orbs"><div class="orb orb-1"></div><div class="orb orb-2"></div></div>
  <div class="container">
    <div class="eyebrow" data-aos="fade-up">About Me</div>
    <h1 class="page-title" data-aos="fade-up">The person behind<br>the <em class="text-accent" style="font-style:normal;">pixels &amp; campaigns</em></h1>
    <div class="breadcrumb" data-aos="fade-up"><a href="index.php">Home</a><i class="fa-solid fa-chevron-right" style="font-size:.6rem;"></i><span>About</span></div>
  </div>
</section>

<section style="padding-top:0;">
  <div class="container">
    <div class="about-grid">
      <div data-aos="fade-right">
        <div class="about-photo">
          <img src="assets/images/hero-portrait.svg" alt="Padma Lakshmi portrait" loading="lazy">
        </div>
        <div class="about-info-list">
          <div class="row"><span>Name</span><span>Padma Lakshmi</span></div>
          <div class="row"><span>Experience</span><span>7+ Years</span></div>
          <div class="row"><span>Profession</span><span>Graphic Designer, Video Editor, Digital Marketer, WordPress Developer</span></div>
          <div class="row"><span>Email</span><span>padma.appj@gmail.com</span></div>
          <div class="row"><span>Phone</span><span>+91 95786 89323</span></div>
        </div>
        <a href="assets/padma-lakshmi-resume.pdf" class="btn btn-primary" style="margin-top:28px;width:100%;" data-cursor="Get PDF" download>
          <i class="fa-solid fa-download"></i> Download Full Resume
        </a>
      </div>

      <div data-aos="fade-left">
        <div class="eyebrow">Profile</div>
        <h2 class="section-title">Creative direction meets<br><em>performance marketing</em></h2>
        <div class="about-text" style="margin-top:24px;">
          <p>I'm a Creative Graphic Designer with 7+ years of experience in visual design, branding, video editing, Meta Certified Digital Marketing and WordPress website development.</p>
          <p>My work spans logo &amp; brand identity systems, packaging, social media creative, festival and product posters, paid campaigns across Meta and Google, and fully custom WordPress websites — all built to convert, not just to look good.</p>
          <p>I've partnered with agencies like Ad2Pro and Deloitte Digital as well as independent brands across food, fashion, retail and technology — helping each one find a visual voice that's unmistakably theirs.</p>
        </div>

        <div class="eyebrow" style="margin-top:44px;">Education</div>
        <div class="about-edu">
          <div class="edu-item glass card">
            <span class="ico"><i class="fa-solid fa-graduation-cap"></i></span>
            <div><strong>B.Sc Visual Communication</strong><span>Foundations in design theory, typography &amp; visual storytelling</span></div>
          </div>
          <div class="edu-item glass card">
            <span class="ico"><i class="fa-solid fa-graduation-cap"></i></span>
            <div><strong>M.A Mass Communication</strong><span>Media strategy, brand communication &amp; audience psychology</span></div>
          </div>
          <div class="edu-item glass card">
            <span class="ico"><i class="fa-solid fa-certificate"></i></span>
            <div><strong>Advanced Digital Marketing</strong><span>Performance marketing, analytics &amp; campaign strategy</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== EXPERIENCE TIMELINE ===================== -->
<section id="experience">
  <div class="container">
    <div class="section-head" style="margin-inline:auto;text-align:center;" data-aos="fade-up">
      <div class="eyebrow" style="justify-content:center;">Career Path</div>
      <h2 class="section-title">Professional <em>Timeline</em></h2>
      <p class="section-sub" style="margin-inline:auto;">Seven years, five roles, one consistent thread: design that performs.</p>
    </div>

    <div class="timeline" data-aos="fade-up">
      <div class="timeline-item">
        <div class="period">2015 — 2019</div>
        <h3>Executive Graphic Designer, Ad2Pro</h3>
        <p>Produced high-volume retouching, catalog and campaign design for global ecommerce &amp; agency clients, sharpening speed and precision under deadline-driven production pipelines.</p>
      </div>
      <div class="timeline-item">
        <div class="period">2019 — 2021</div>
        <h3>Freelance Graphic &amp; Brand Designer</h3>
        <p>Built a direct client roster across food, fashion and retail — owning brand identity, packaging and social media design end-to-end.</p>
      </div>
      <div class="timeline-item">
        <div class="period">2021 — 2022</div>
        <h3>Deloitte Digital</h3>
        <p>Contributed to enterprise brand and campaign assets, collaborating with cross-functional strategy and marketing teams on large-scale rollouts.</p>
      </div>
      <div class="timeline-item">
        <div class="period">2022 — 2023</div>
        <h3>Mylestone</h3>
        <p>Led design and content for digital campaigns, expanding into paid social and search advertising alongside creative production.</p>
      </div>
      <div class="timeline-item">
        <div class="period">2023 — Present</div>
        <h3>Mustang Enterprises</h3>
        <p>Heading design and digital marketing — running Meta &amp; Google Ads, WordPress development, and brand strategy for multiple business units.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CERTIFICATIONS ===================== -->
<section id="certifications">
  <div class="container">
    <div class="section-head" data-aos="fade-up">
      <div class="eyebrow">Credentials</div>
      <h2 class="section-title">Certified &amp; <em>continuously learning</em></h2>
    </div>
    <div class="mini-grid" data-aos="fade-up" style="grid-template-columns:repeat(3,1fr);">
      <?php
      $certs = [
        ["assets/images/certificates/meta-certified.svg","Meta Certified Digital Marketing Associate"],
        ["assets/images/certificates/google-ads-cert.svg","Google Ads Certification"],
        ["assets/images/certificates/advanced-digital-marketing.svg","Advanced Digital Marketing Certificate"],
      ];
      foreach ($certs as $c) {
        echo '<a href="'.$c[0].'" target="_blank" class="mini-item card" data-cursor="View" style="aspect-ratio:10/7;">
          <img src="'.$c[0].'" alt="'.$c[1].'" loading="lazy">
        </a>';
      }
      ?>
    </div>
  </div>
</section>

<section id="cta">
  <div class="container" data-aos="zoom-in">
    <div class="cta-banner neu">
      <div class="eyebrow" style="justify-content:center;">Let's Work Together</div>
      <h2>Like what you've read?</h2>
      <p>Let's turn your brand's next chapter into something worth scrolling for.</p>
      <div class="actions">
        <a href="contact.php" class="btn btn-primary" data-cursor="Let's talk">Hire Me <i class="fa-solid fa-arrow-right"></i></a>
        <a href="portfolio.php" class="btn btn-outline" data-cursor="See work">View Portfolio</a>
      </div>
    </div>
  </div>
</section>

<?php include "includes/footer.php"; ?>
