<?php
$page_title = "Process";
$page_slug  = "process.php";
$page_desc  = "How Padma Lakshmi takes a project from first brief to final launch — a clear, five-step creative and marketing process.";
include "includes/header.php";
include "includes/navbar.php";
?>

<section class="page-hero">
  <div class="bg-orbs"><div class="orb orb-1"></div><div class="orb orb-2"></div></div>
  <div class="container">
    <div class="eyebrow" data-aos="fade-up">How I Work</div>
    <h1 class="page-title" data-aos="fade-up">From brief to<br><em class="text-accent" style="font-style:normal;">launch, step by step</em></h1>
    <div class="breadcrumb" data-aos="fade-up"><a href="index.php">Home</a><i class="fa-solid fa-chevron-right" style="font-size:.6rem;"></i><span>Process</span></div>
  </div>
</section>

<section style="padding-top:0;">
  <div class="container">
    <div class="process-list">
      <?php
      $steps = [
        ["01","Discover &amp; Brief","We start with a deep-dive call to understand your brand, audience, competitors and goals. I turn that conversation into a written creative brief we both sign off on before any design begins."],
        ["02","Research &amp; Strategy","I audit your current assets, market position and — where relevant — ad performance data, then map out a design and marketing direction with clear objectives and success metrics."],
        ["03","Design &amp; Concept","Initial concepts are presented with rationale, not just visuals. We refine through structured feedback rounds until the direction is locked."],
        ["04","Development &amp; Production","Approved designs move into production — final artwork, campaign assets, or a fully coded, responsive WordPress build with SEO fundamentals in place."],
        ["05","Launch, Track &amp; Optimize","I hand over organized source files and documentation, and for marketing engagements, I keep monitoring performance and iterating post-launch."],
      ];
      foreach ($steps as $i => $s) {
        echo '<div class="process-item" data-aos="fade-up" data-aos-delay="'.($i*60).'">
          <div class="step">'.$s[0].'</div>
          <div><h3>'.$s[1].'</h3><p>'.$s[2].'</p></div>
        </div>';
      }
      ?>
    </div>
  </div>
</section>

<section id="cta">
  <div class="container" data-aos="zoom-in">
    <div class="cta-banner neu">
      <div class="eyebrow" style="justify-content:center;">Start The Process</div>
      <h2>Step one starts with a message.</h2>
      <p>Tell me a bit about your project and I'll reply within one business day.</p>
      <div class="actions">
        <a href="contact.php" class="btn btn-primary" data-cursor="Let's talk">Get In Touch <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<?php include "includes/footer.php"; ?>
