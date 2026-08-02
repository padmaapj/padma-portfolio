<?php
$page_title = "Portfolio";
$page_slug  = "portfolio.php";
$page_desc  = "Browse Padma Lakshmi's portfolio — client websites, logo design, branding, social media creatives, digital marketing mockups and poster design.";
include "includes/header.php";
include "includes/navbar.php";
?>

<section class="page-hero">
  <div class="bg-orbs"><div class="orb orb-1"></div><div class="orb orb-2"></div></div>
  <div class="container">
    <div class="eyebrow" data-aos="fade-up">Selected Work</div>
    <h1 class="page-title" data-aos="fade-up">A decade of pixels,<br><em class="text-accent" style="font-style:normal;">campaigns &amp; code</em></h1>
    <div class="breadcrumb" data-aos="fade-up"><a href="index.php">Home</a><i class="fa-solid fa-chevron-right" style="font-size:.6rem;"></i><span>Portfolio</span></div>
  </div>
</section>

<!-- ===================== CLIENT WEBSITES ===================== -->
<section id="client-work" style="padding-top:0;">
  <div class="container">
    <div class="section-head" data-aos="fade-up">
      <div class="eyebrow">Case Studies</div>
      <h2 class="section-title">Client <em>Websites</em></h2>
      <p class="section-sub">Real businesses, live today — each built for speed, SEO and conversion.</p>
    </div>

    <div class="filter-bar" data-filter-group="#client-grid" data-aos="fade-up">
      <button class="filter-btn active" data-filter="all">All</button>
      <button class="filter-btn" data-filter="graphic-design">Graphic Design</button>
      <button class="filter-btn" data-filter="logo-design">Logo Design</button>
      <button class="filter-btn" data-filter="social-media">Social Media</button>
      <button class="filter-btn" data-filter="website-design">Website Design</button>
      <button class="filter-btn" data-filter="digital-marketing">Digital Marketing</button>
      <button class="filter-btn" data-filter="video-editing">Video Editing</button>
      <button class="filter-btn" data-filter="branding">Branding</button>
    </div>

    <div class="portfolio-grid" id="client-grid" data-aos="fade-up">
      <?php
      $projects = [
        ["impression-solutions","Impression Solutions","https://impressionsolutions.net/","Corporate Website","website-design,branding",["WordPress","SEO","Responsive"],"A full corporate rebuild for a business consultancy — new information architecture, on-brand visual system and technical SEO groundwork that improved organic visibility within weeks of launch."],
        ["jothi-foods","Jothi Foods","https://jothifoods.com/","Food Brand &amp; Packaging","branding,graphic-design,website-design",["Packaging","Branding","Website"],"End-to-end brand identity and packaging system for a regional food brand, paired with a product-focused ecommerce-ready website."],
        ["talunus-hr","Talunus HR Solutions","https://talunushrsolutions.com/","Corporate Website","website-design",["WordPress","UI/UX"],"A clean, credibility-first corporate site for an HR consultancy, designed around lead generation and service clarity."],
        ["nitha-exotic-pets","Nitha Exotic Pets","https://nithaexoticpets.com/","Pet Store Website","website-design,branding",["WordPress"],"A playful, catalog-driven website for a specialty pet store, with an intuitive browsing experience across species and categories."],
        ["ana-fashions","Ana Fashions","https://anafashions.com/","Fashion Ecommerce","website-design,branding,graphic-design",["Brand Identity","Ecommerce"],"Brand identity and ecommerce storefront for a fashion label, with a visual language built around movement and texture."],
        ["flavers","Flavers","https://flavers.in/","Restaurant Branding","branding,website-design,digital-marketing",["Branding","Website","Marketing"],"Full restaurant brand refresh — signage-ready logo system, website, and a launch social campaign that drove opening-week footfall."],
        ["aag-supermarket","AAG Supermarket","https://aagsupermarket.com/","Retail Website","website-design,social-media",["Retail","Social Media"],"Retail website plus an always-on social content system for weekly offer promotion."],
        ["infinite-laptop","Infinite Laptop","https://infinitelaptop.com/","Technology Ecommerce","website-design",["WooCommerce"],"A performance-tuned WooCommerce build for a laptop and electronics retailer, optimized for fast product discovery."],
      ];
      foreach ($projects as $i => $p) {
        echo '<div class="p-card glass card" data-category="'.$p[4].'" data-aos="fade-up" data-aos-delay="'.($i%3*80).'">
          <div class="thumb">
            <img src="assets/images/projects/'.$p[0].'.svg" alt="'.$p[1].' website screenshot" loading="lazy">
            <div class="overlay">
              <div class="tags">';
        foreach ($p[5] as $tag) echo '<span>'.$tag.'</span>';
        echo '</div>
              <p style="font-size:.8rem;color:#ccc;margin-bottom:12px;">'.$p[6].'</p>
            </div>
          </div>
          <div class="body">
            <h3>'.$p[1].'</h3>
            <div class="cat">'.$p[3].'</div>
            <div class="links">
              <a href="'.$p[2].'" target="_blank" rel="noopener" data-cursor="Visit"><i class="fa-solid fa-arrow-up-right-from-square"></i> Visit Website</a>
              <a href="'.$p[2].'" target="_blank" rel="noopener" data-cursor="Read">Case Study</a>
            </div>
          </div>
        </div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- ===================== DESIGN PORTFOLIO ===================== -->
<section id="design-portfolio">
  <div class="container">
    <div class="section-head" data-aos="fade-up">
      <div class="eyebrow">Design Portfolio</div>
      <h2 class="section-title">Social, print &amp; <em>packaging</em></h2>
      <p class="section-sub">Instagram &amp; Facebook creatives, festival posters, brochures, business cards, flyers, rollups, packaging, labels, Amazon A+ content and web banners.</p>
    </div>
    <div class="mini-grid" data-aos="fade-up">
      <?php
      $social_labels = [
        "insta-post-01"=>"Instagram Post","insta-post-02"=>"Instagram Post","insta-post-03"=>"Instagram Post",
        "fb-post-01"=>"Facebook Post","fb-post-02"=>"Facebook Post","festival-01"=>"Festival Poster",
        "festival-02"=>"Festival Poster","brochure-01"=>"Brochure","business-card-01"=>"Business Card",
        "flyer-01"=>"Flyer","rollup-01"=>"Rollup Banner","packaging-01"=>"Packaging Design",
        "label-01"=>"Product Label","amazon-a-01"=>"Amazon A+ Content","web-banner-01"=>"Web Banner","mockup-01"=>"Device Mockup",
      ];
      foreach ($social_labels as $slug => $label) {
        echo '<div class="mini-item card" data-cursor="'.$label.'"><img src="assets/images/social/'.$slug.'.svg" alt="'.$label.'" loading="lazy"></div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- ===================== DIGITAL MARKETING PORTFOLIO ===================== -->
<section id="marketing-portfolio">
  <div class="container">
    <div class="section-head" data-aos="fade-up">
      <div class="eyebrow">Digital Marketing Portfolio</div>
      <h2 class="section-title">Campaigns, <em>reports</em> &amp; strategy</h2>
      <p class="section-sub">Meta &amp; Google Ads creative, SEO reporting, analytics dashboards, email campaigns and content strategy.</p>
    </div>
    <div class="mini-grid" style="grid-template-columns:repeat(3,1fr);" data-aos="fade-up">
      <?php
      $marketing_labels = [
        "meta-ads"=>"Meta Ads Campaign","instagram-ads"=>"Instagram Ads","facebook-campaign"=>"Facebook Campaign",
        "google-ads"=>"Google Ads","seo-report"=>"SEO Report","analytics-dashboard"=>"Analytics Dashboard",
        "email-campaign"=>"Email Campaign","content-calendar"=>"Content Calendar","brand-strategy"=>"Brand Strategy Deck",
      ];
      foreach ($marketing_labels as $slug => $label) {
        echo '<div class="mini-item card" data-cursor="View" style="aspect-ratio:8/5;"><img src="assets/images/marketing/'.$slug.'.svg" alt="'.$label.'" loading="lazy"></div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- ===================== POSTER PORTFOLIO ===================== -->
<section id="poster-portfolio">
  <div class="container">
    <div class="section-head" data-aos="fade-up">
      <div class="eyebrow">Poster Portfolio</div>
      <h2 class="section-title">Large format <em>masonry</em></h2>
      <p class="section-sub">Corporate, festival, product, offer, political, educational and restaurant posters.</p>
    </div>
    <div class="masonry" data-aos="fade-up">
      <?php
      $posters = [
        "corporate-01"=>"Corporate Poster","festival-01"=>"Festival Poster","product-01"=>"Product Poster",
        "offer-01"=>"Offer Poster","political-01"=>"Political Poster","educational-01"=>"Educational Poster",
        "restaurant-01"=>"Restaurant Poster","corporate-02"=>"Corporate Poster",
      ];
      foreach ($posters as $slug => $label) {
        echo '<div class="m-item" data-cursor="View"><img src="assets/images/posters/'.$slug.'.svg" alt="'.$label.'" loading="lazy"></div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- ===================== LOGO PORTFOLIO ===================== -->
<section id="logo-portfolio">
  <div class="container">
    <div class="section-head" data-aos="fade-up">
      <div class="eyebrow">Logo Portfolio</div>
      <h2 class="section-title">The <em>luxury logo wall</em></h2>
      <p class="section-sub">50 marks across seven industries — hover to bring each one forward.</p>
    </div>

    <div class="tab-strip" data-filter-group="#logo-grid" data-aos="fade-up">
      <button class="filter-btn active" data-filter="all">All</button>
      <button class="filter-btn" data-filter="corporate">Corporate</button>
      <button class="filter-btn" data-filter="fashion">Fashion</button>
      <button class="filter-btn" data-filter="restaurant">Restaurant</button>
      <button class="filter-btn" data-filter="retail">Retail</button>
      <button class="filter-btn" data-filter="technology">Technology</button>
      <button class="filter-btn" data-filter="healthcare">Healthcare</button>
      <button class="filter-btn" data-filter="construction">Construction</button>
    </div>

    <div class="mini-grid" id="logo-grid" data-aos="fade-up">
      <?php
      $logo_cats = ["corporate","fashion","restaurant","retail","technology","healthcare","construction"];
      for ($i = 1; $i <= 50; $i++) {
        $cat = $logo_cats[($i - 1) % count($logo_cats)];
        $num = str_pad($i, 2, "0", STR_PAD_LEFT);
        echo '<div class="mini-item card" data-category="'.$cat.'" data-cursor="'.ucfirst($cat).'"><img src="assets/images/logos/logo-'.$num.'.svg" alt="'.ucfirst($cat).' logo design '.$i.'" loading="lazy"></div>';
      }
      ?>
    </div>
  </div>
</section>

<section id="cta">
  <div class="container" data-aos="zoom-in">
    <div class="cta-banner neu">
      <div class="eyebrow" style="justify-content:center;">Like What You See?</div>
      <h2>Your project could be next.</h2>
      <p>Let's talk about what you're building and how I can help bring it to life.</p>
      <div class="actions">
        <a href="contact.php" class="btn btn-primary" data-cursor="Let's talk">Start a Project <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<?php include "includes/footer.php"; ?>
