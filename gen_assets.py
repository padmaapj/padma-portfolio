#!/usr/bin/env python3
"""Generates on-brand SVG placeholder assets for the portfolio."""
import os, random, math

random.seed(42)
BASE = os.path.dirname(os.path.abspath(__file__))
OUT = os.path.join(BASE, "assets", "images")

BG_DARK = "#0a0a0a"
BG_ALT  = "#141414"
ORANGE  = "#ff6b3d"
ORANGE2 = "#ff9166"
WHITE   = "#f5f5f5"
GREY    = "#3a3a3a"

def grad_defs(id_, c1, c2, angle=135):
    return f'''<linearGradient id="{id_}" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" stop-color="{c1}"/>
      <stop offset="100%" stop-color="{c2}"/>
    </linearGradient>'''

def noise_shapes(w, h, n, seed_offset=0):
    shapes = []
    r = random.Random(seed_offset)
    for i in range(n):
        cx, cy = r.randint(0, w), r.randint(0, h)
        rad = r.randint(20, min(w, h)//3)
        op = round(r.uniform(0.04, 0.12), 2)
        shapes.append(f'<circle cx="{cx}" cy="{cy}" r="{rad}" fill="{ORANGE}" opacity="{op}"/>')
    return "\n".join(shapes)

def save(path, svg):
    with open(path, "w") as f:
        f.write(svg)

# ---------- 1. Project screenshots (8 client sites) ----------
projects = [
    ("impression-solutions", "Impression Solutions", "Corporate Website"),
    ("jothi-foods", "Jothi Foods", "Food Brand & Packaging"),
    ("talunus-hr", "Talunus HR Solutions", "Corporate Website"),
    ("nitha-exotic-pets", "Nitha Exotic Pets", "Pet Store Website"),
    ("ana-fashions", "Ana Fashions", "Fashion Ecommerce"),
    ("flavers", "Flavers", "Restaurant Branding"),
    ("aag-supermarket", "AAG Supermarket", "Retail Website"),
    ("infinite-laptop", "Infinite Laptop", "Technology Ecommerce"),
]
for i, (slug, name, tag) in enumerate(projects):
    w, h = 1200, 800
    svg = f'''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 {w} {h}">
  <defs>{grad_defs(f"g{i}", BG_DARK, BG_ALT)}</defs>
  <rect width="{w}" height="{h}" fill="url(#g{i})"/>
  {noise_shapes(w,h,5,i)}
  <rect x="0" y="0" width="{w}" height="64" fill="#0d0d0d"/>
  <circle cx="32" cy="32" r="6" fill="#ff5f57"/>
  <circle cx="54" cy="32" r="6" fill="#febc2e"/>
  <circle cx="76" cy="32" r="6" fill="#28c840"/>
  <rect x="120" y="20" width="{w-240}" height="24" rx="12" fill="#1c1c1c"/>
  <text x="{w/2}" y="{h/2-20}" font-family="Arial, sans-serif" font-size="56" font-weight="700" fill="{WHITE}" text-anchor="middle">{name}</text>
  <text x="{w/2}" y="{h/2+30}" font-family="Arial, sans-serif" font-size="24" fill="{ORANGE}" text-anchor="middle" letter-spacing="2">{tag.upper()}</text>
  <rect x="{w/2-70}" y="{h/2+60}" width="140" height="2" fill="{ORANGE}"/>
</svg>'''
    save(f"{OUT}/projects/{slug}.svg", svg)

# ---------- 2. Logo wall (50 logos across categories) ----------
logo_cats = ["Corporate","Fashion","Restaurant","Retail","Technology","Healthcare","Construction"]
initials_pool = ["AV","BX","CR","DN","EL","FG","HK","IM","JP","KL","MN","OP","QR","ST","UV","WX","YZ","AB","CD","EF"]
for i in range(50):
    cat = logo_cats[i % len(logo_cats)]
    ini = initials_pool[i % len(initials_pool)] + str(i)
    ini_display = initials_pool[i % len(initials_pool)]
    w, h = 400, 400
    hue_shift = (i * 7) % 40
    svg = f'''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 {w} {h}">
  <defs>{grad_defs(f"lg{i}", BG_ALT, BG_DARK)}</defs>
  <rect width="{w}" height="{h}" rx="28" fill="url(#lg{i})" stroke="#232323" stroke-width="2"/>
  <circle cx="{w/2}" cy="{h/2}" r="90" fill="none" stroke="{ORANGE}" stroke-width="3" opacity="0.5"/>
  <text x="{w/2}" y="{h/2+28}" font-family="Arial, sans-serif" font-size="72" font-weight="800" fill="{WHITE}" text-anchor="middle">{ini_display}</text>
  <text x="{w/2}" y="{h-36}" font-family="Arial, sans-serif" font-size="18" fill="{ORANGE}" text-anchor="middle" letter-spacing="2">{cat.upper()}</text>
</svg>'''
    save(f"{OUT}/logos/logo-{i+1:02d}.svg", svg)

# ---------- 3. Social media creatives ----------
social_items = [
    ("insta-post-01","Instagram Post","1:1"),("insta-post-02","Instagram Post","1:1"),
    ("insta-post-03","Instagram Post","1:1"),("fb-post-01","Facebook Post","4:5"),
    ("fb-post-02","Facebook Post","4:5"),("festival-01","Festival Poster","4:5"),
    ("festival-02","Festival Poster","4:5"),("brochure-01","Brochure","A4"),
    ("business-card-01","Business Card","3.5x2"),("flyer-01","Flyer","A5"),
    ("rollup-01","Rollup Banner","2x6ft"),("packaging-01","Packaging Design","3D"),
    ("label-01","Product Label","Sq"),("amazon-a-01","Amazon A+ Content","1464x600"),
    ("web-banner-01","Web Banner","1920x600"),("mockup-01","Device Mockup","Mixed"),
]
for i,(slug,label,ratio) in enumerate(social_items):
    w,h = 600,600
    svg = f'''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 {w} {h}">
  <defs>{grad_defs(f"sc{i}", BG_DARK, "#1a1a1a")}</defs>
  <rect width="{w}" height="{h}" fill="url(#sc{i})"/>
  {noise_shapes(w,h,4,i+100)}
  <rect x="40" y="40" width="{w-80}" height="{h-80}" fill="none" stroke="{ORANGE}" stroke-width="2" opacity="0.6" stroke-dasharray="6 8"/>
  <text x="{w/2}" y="{h/2-10}" font-family="Arial, sans-serif" font-size="34" font-weight="700" fill="{WHITE}" text-anchor="middle">{label}</text>
  <text x="{w/2}" y="{h/2+26}" font-family="Arial, sans-serif" font-size="16" fill="{ORANGE}" text-anchor="middle" letter-spacing="2">{ratio}</text>
</svg>'''
    save(f"{OUT}/social/{slug}.svg", svg)

# ---------- 4. Digital marketing mockups ----------
marketing_items = [
    ("meta-ads","Meta Ads Campaign"),("instagram-ads","Instagram Ads"),
    ("facebook-campaign","Facebook Campaign"),("google-ads","Google Ads"),
    ("seo-report","SEO Report"),("analytics-dashboard","Analytics Dashboard"),
    ("email-campaign","Email Campaign"),("content-calendar","Content Calendar"),
    ("brand-strategy","Brand Strategy Deck"),
]
for i,(slug,label) in enumerate(marketing_items):
    w,h = 800,500
    bars = "".join(
        f'<rect x="{60+j*90}" y="{380-r}" width="50" height="{r}" rx="6" fill="{ORANGE if j%3==0 else "#3a3a3a"}"/>'
        for j,r in enumerate([120,200,150,260,90,180,220])
    )
    svg = f'''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 {w} {h}">
  <defs>{grad_defs(f"mk{i}", BG_ALT, BG_DARK)}</defs>
  <rect width="{w}" height="{h}" rx="18" fill="url(#mk{i})" stroke="#232323" stroke-width="2"/>
  <rect x="0" y="0" width="{w}" height="60" rx="18" fill="#111"/>
  <text x="30" y="38" font-family="Arial, sans-serif" font-size="20" font-weight="700" fill="{WHITE}">{label}</text>
  <circle cx="{w-40}" cy="30" r="10" fill="{ORANGE}"/>
  {bars}
  <line x1="40" y1="390" x2="{w-40}" y2="390" stroke="#333" stroke-width="1"/>
</svg>'''
    save(f"{OUT}/marketing/{slug}.svg", svg)

# ---------- 5. Poster masonry ----------
poster_items = [
    ("corporate-01","Corporate Poster",900,1200),("festival-01","Festival Poster",900,1350),
    ("product-01","Product Poster",900,1100),("offer-01","Offer Poster",900,1300),
    ("political-01","Political Poster",900,1200),("educational-01","Educational Poster",900,1250),
    ("restaurant-01","Restaurant Poster",900,1150),("corporate-02","Corporate Poster",900,1400),
]
for i,(slug,label,w,h) in enumerate(poster_items):
    svg = f'''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 {w} {h}">
  <defs>{grad_defs(f"ps{i}", BG_DARK, "#1c1c1c")}</defs>
  <rect width="{w}" height="{h}" fill="url(#ps{i})"/>
  {noise_shapes(w,h,6,i+200)}
  <rect x="0" y="{h-160}" width="{w}" height="160" fill="{ORANGE}" opacity="0.9"/>
  <text x="60" y="{h-90}" font-family="Arial, sans-serif" font-size="46" font-weight="800" fill="{BG_DARK}">{label}</text>
  <text x="60" y="{h-45}" font-family="Arial, sans-serif" font-size="20" fill="{BG_DARK}" letter-spacing="2">PADMA LAKSHMI DESIGN CO.</text>
</svg>'''
    save(f"{OUT}/posters/{slug}.svg", svg)

# ---------- 6. Certificates ----------
certs = [
    ("meta-certified","Meta Certified Digital Marketing Associate"),
    ("google-ads-cert","Google Ads Certification"),
    ("advanced-digital-marketing","Advanced Digital Marketing Certificate"),
]
for i,(slug,label) in enumerate(certs):
    w,h = 1000,700
    svg = f'''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 {w} {h}">
  <rect width="{w}" height="{h}" fill="{BG_DARK}"/>
  <rect x="30" y="30" width="{w-60}" height="{h-60}" fill="none" stroke="{ORANGE}" stroke-width="3"/>
  <rect x="46" y="46" width="{w-92}" height="{h-92}" fill="none" stroke="{ORANGE}" stroke-width="1" opacity="0.5"/>
  <text x="{w/2}" y="180" font-family="Arial, sans-serif" font-size="24" fill="{ORANGE}" text-anchor="middle" letter-spacing="6">CERTIFICATE OF COMPLETION</text>
  <text x="{w/2}" y="290" font-family="Arial, sans-serif" font-size="46" font-weight="800" fill="{WHITE}" text-anchor="middle">{label}</text>
  <text x="{w/2}" y="360" font-family="Arial, sans-serif" font-size="22" fill="#a3a3a3" text-anchor="middle">Awarded to Padma Lakshmi</text>
  <line x1="{w/2-140}" y1="470" x2="{w/2+140}" y2="470" stroke="{ORANGE}" stroke-width="2"/>
  <text x="{w/2}" y="500" font-family="Arial, sans-serif" font-size="16" fill="#777" text-anchor="middle">Signature</text>
</svg>'''
    save(f"{OUT}/certificates/{slug}.svg", svg)

# ---------- 7. Client logos (small monochrome marks for testimonials strip) ----------
client_names = ["Ad2Pro","Deloitte Digital","Mylestone","Mustang Enterprises","Impression Solutions","Jothi Foods","Talunus HR","Ana Fashions"]
for i,name in enumerate(client_names):
    w,h = 260,100
    initials = "".join([p[0] for p in name.split()])[:3]
    svg = f'''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 {w} {h}">
  <rect width="{w}" height="{h}" fill="transparent"/>
  <text x="{w/2}" y="{h/2+10}" font-family="Arial, sans-serif" font-size="30" font-weight="700" fill="#8a8a8a" text-anchor="middle" letter-spacing="1">{initials.upper()} <tspan font-size="14" fill="#555">{name.split()[-1] if len(name.split())>1 else ""}</tspan></text>
</svg>'''
    save(f"{OUT}/clients/client-{i+1:02d}.svg", svg)

# ---------- 8. Avatar placeholders for testimonials ----------
avatar_names = ["R. Iyer","S. Menon","K. Prasad","N. Devi","A. Raghavan"]
for i,name in enumerate(avatar_names):
    w,h = 160,160
    ini = "".join([p[0] for p in name.replace(".","").split()])[:2]
    svg = f'''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 {w} {h}">
  <defs>{grad_defs(f"av{i}", ORANGE, "#c94a1f")}</defs>
  <circle cx="{w/2}" cy="{h/2}" r="{w/2}" fill="url(#av{i})"/>
  <text x="{w/2}" y="{h/2+14}" font-family="Arial, sans-serif" font-size="46" font-weight="800" fill="{BG_DARK}" text-anchor="middle">{ini}</text>
</svg>'''
    save(f"{OUT}/clients/avatar-{i+1}.svg", svg)

# ---------- 9. Hero portrait placeholder ----------
w,h = 900,1100
svg = f'''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 {w} {h}">
  <defs>
    {grad_defs("hero1", "#1a1a1a", BG_DARK)}
    <radialGradient id="heroglow" cx="50%" cy="30%" r="60%">
      <stop offset="0%" stop-color="{ORANGE}" stop-opacity="0.35"/>
      <stop offset="100%" stop-color="{ORANGE}" stop-opacity="0"/>
    </radialGradient>
  </defs>
  <rect width="{w}" height="{h}" fill="url(#hero1)"/>
  <rect width="{w}" height="{h}" fill="url(#heroglow)"/>
  <circle cx="{w/2}" cy="380" r="220" fill="#232323"/>
  <path d="M {w/2-220} 620 Q {w/2} 480 {w/2+220} 620 L {w/2+260} {h} L {w/2-260} {h} Z" fill="#1e1e1e"/>
  <text x="{w/2}" y="{h-60}" font-family="Arial, sans-serif" font-size="22" fill="{ORANGE}" text-anchor="middle" letter-spacing="3">PADMA LAKSHMI</text>
</svg>'''
save(f"{OUT}/hero-portrait.svg", svg)

# ---------- 10. Favicon / logo mark ----------
svg = f'''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
  <rect width="100" height="100" rx="20" fill="{BG_DARK}"/>
  <text x="50" y="66" font-family="Arial, sans-serif" font-size="48" font-weight="800" fill="{ORANGE}" text-anchor="middle">P</text>
</svg>'''
save(f"{OUT}/favicon.svg", svg)

print("Generated:")
for root, dirs, files in os.walk(OUT):
    print(root, len(files))
