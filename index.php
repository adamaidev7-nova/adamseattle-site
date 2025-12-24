<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adam AI helps small businesses organize their digital chaos. Professional digital asset management services.">
    <title>Adam AI | Digital Asset Management for Small Businesses</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <style>
:root {
    --navy-deep: #0c1222;
    --navy-primary: #0f1729;
    --navy-light: #162033;
    --navy-lighter: #1e2d47;
    --teal-primary: #00c8b0;
    --teal-bright: #00e5c9;
    --teal-dim: #009e8b;
    --teal-glow: rgba(0, 200, 176, 0.15);
    --silver-bright: #ffffff;
    --silver-primary: #e2e8f0;
    --silver-muted: #94a3b8;
    --silver-dim: #64748b;
    --font-display: 'Plus Jakarta Sans', sans-serif;
    --font-mono: 'JetBrains Mono', monospace;
    --space-xs: 0.5rem; --space-sm: 0.75rem; --space-md: 1rem; --space-lg: 1.5rem;
    --space-xl: 2rem; --space-2xl: 3rem; --space-3xl: 4rem; --space-4xl: 6rem; --space-5xl: 8rem;
    --radius-sm: 6px; --radius-md: 10px; --radius-lg: 16px; --radius-xl: 24px; --radius-full: 9999px;
    --ease-out: cubic-bezier(0.16, 1, 0.3, 1);
    --transition-fast: 150ms var(--ease-out);
    --transition-base: 300ms var(--ease-out);
    --shadow-glow: 0 0 40px rgba(0, 200, 176, 0.2);
}
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; }
body { font-family: var(--font-display); font-size: 1rem; line-height: 1.6; color: var(--silver-primary); background: var(--navy-deep); -webkit-font-smoothing: antialiased; overflow-x: hidden; }
body::before { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E"); opacity: 0.03; pointer-events: none; z-index: 1000; }
a { color: inherit; text-decoration: none; }
button { font-family: inherit; cursor: pointer; border: none; background: none; }
.container { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 var(--space-lg); }
h1, h2, h3 { font-weight: 700; line-height: 1.15; color: var(--silver-bright); letter-spacing: -0.02em; }
h1 { font-size: clamp(2.5rem, 6vw, 4rem); }
h2 { font-size: clamp(1.75rem, 4vw, 2.5rem); }
h3 { font-size: clamp(1.25rem, 2.5vw, 1.5rem); }
p { color: var(--silver-muted); }
.text-gradient { background: linear-gradient(135deg, var(--teal-bright) 0%, var(--teal-primary) 50%, var(--silver-bright) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
.btn { display: inline-flex; align-items: center; justify-content: center; padding: var(--space-md) var(--space-xl); font-size: 0.9375rem; font-weight: 600; border-radius: var(--radius-full); transition: all var(--transition-base); }
.btn-primary { background: linear-gradient(135deg, var(--teal-primary), var(--teal-dim)); color: var(--navy-deep); box-shadow: 0 2px 8px rgba(0,0,0,0.3), 0 0 20px rgba(0, 200, 176, 0.3); }
.btn-primary:hover { transform: translateY(-2px); box-shadow: 0 4px 20px rgba(0,0,0,0.4), 0 0 30px rgba(0, 200, 176, 0.4); }
.btn-secondary { background: var(--navy-lighter); color: var(--silver-primary); border: 1px solid var(--navy-lighter); }
.btn-secondary:hover { border-color: var(--teal-primary); color: var(--teal-bright); }
.nav { position: fixed; top: 0; left: 0; right: 0; z-index: 100; padding: var(--space-md) 0; transition: all var(--transition-base); }
.nav.scrolled { background: rgba(12, 18, 34, 0.9); backdrop-filter: blur(20px); border-bottom: 1px solid rgba(255,255,255,0.05); }
.nav-inner { display: flex; align-items: center; justify-content: space-between; }
.nav-logo { font-size: 1.5rem; font-weight: 700; color: var(--silver-bright); display: flex; align-items: center; gap: var(--space-xs); }
.nav-logo span { color: var(--teal-primary); }
.nav-logo-icon { width: 32px; height: 32px; background: linear-gradient(135deg, var(--teal-primary), var(--teal-dim)); border-radius: var(--radius-sm); display: flex; align-items: center; justify-content: center; font-size: 0.875rem; font-weight: 700; color: var(--navy-deep); }
.nav-links { display: flex; align-items: center; gap: var(--space-xl); }
.nav-link { font-size: 0.9375rem; font-weight: 500; color: var(--silver-muted); transition: color var(--transition-fast); position: relative; }
.nav-link::after { content: ''; position: absolute; bottom: -4px; left: 0; width: 0; height: 2px; background: var(--teal-primary); transition: width var(--transition-base); }
.nav-link:hover { color: var(--silver-bright); }
.nav-link:hover::after { width: 100%; }
.nav-cta { margin-left: var(--space-md); }
.nav-toggle { display: none; flex-direction: column; gap: 5px; padding: var(--space-xs); }
.nav-toggle span { display: block; width: 24px; height: 2px; background: var(--silver-primary); border-radius: 2px; transition: all var(--transition-fast); }
.nav-toggle.active span:nth-child(1) { transform: rotate(45deg) translate(5px, 5px); }
.nav-toggle.active span:nth-child(2) { opacity: 0; }
.nav-toggle.active span:nth-child(3) { transform: rotate(-45deg) translate(5px, -5px); }
.mobile-menu { display: none; position: fixed; top: 70px; left: 0; right: 0; background: var(--navy-primary); border-bottom: 1px solid rgba(255,255,255,0.05); padding: var(--space-lg); transform: translateY(-100%); opacity: 0; transition: all var(--transition-base); z-index: 99; }
.mobile-menu.active { transform: translateY(0); opacity: 1; }
.mobile-menu a { display: block; padding: var(--space-md) 0; font-size: 1.125rem; font-weight: 500; color: var(--silver-muted); border-bottom: 1px solid rgba(255,255,255,0.05); }
.mobile-menu a:last-child { border-bottom: none; }
.mobile-menu a:hover { color: var(--teal-bright); }
.hero { min-height: 100vh; display: flex; align-items: center; position: relative; padding: var(--space-5xl) 0; overflow: hidden; }
.hero-bg { position: absolute; inset: 0; background: radial-gradient(ellipse 80% 50% at 50% -20%, rgba(0, 200, 176, 0.15) 0%, transparent 50%), radial-gradient(ellipse 60% 40% at 90% 80%, rgba(0, 200, 176, 0.08) 0%, transparent 50%), linear-gradient(180deg, var(--navy-deep), var(--navy-primary)); z-index: -1; }
.hero-grid { position: absolute; inset: 0; background-image: linear-gradient(rgba(0, 200, 176, 0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(0, 200, 176, 0.03) 1px, transparent 1px); background-size: 60px 60px; mask-image: radial-gradient(ellipse 70% 70% at 50% 50%, black 0%, transparent 70%); -webkit-mask-image: radial-gradient(ellipse 70% 70% at 50% 50%, black 0%, transparent 70%); z-index: -1; }
.hero-content { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-4xl); align-items: center; }
.hero-text { max-width: 600px; }
.hero-badge { display: inline-flex; align-items: center; gap: var(--space-xs); padding: var(--space-xs) var(--space-md); background: var(--teal-glow); border: 1px solid rgba(0, 200, 176, 0.2); border-radius: var(--radius-full); font-size: 0.8125rem; font-weight: 600; color: var(--teal-bright); margin-bottom: var(--space-lg); animation: fadeInUp 0.6s var(--ease-out) both; }
.hero-badge::before { content: ''; width: 6px; height: 6px; background: var(--teal-bright); border-radius: 50%; animation: pulse 2s infinite; }
@keyframes pulse { 0%, 100% { opacity: 1; } 50% { opacity: 0.5; } }
.hero-title { margin-bottom: var(--space-lg); animation: fadeInUp 0.6s var(--ease-out) 0.1s both; }
.hero-subtitle { font-size: 1.25rem; line-height: 1.7; color: var(--silver-muted); margin-bottom: var(--space-xl); animation: fadeInUp 0.6s var(--ease-out) 0.2s both; }
.hero-actions { display: flex; gap: var(--space-md); animation: fadeInUp 0.6s var(--ease-out) 0.3s both; }
.hero-visual { position: relative; display: flex; justify-content: center; align-items: center; animation: fadeIn 1s var(--ease-out) 0.4s both; }
.hero-graphic { position: relative; width: 100%; max-width: 450px; }
.folder-stack { display: flex; flex-direction: column; gap: var(--space-sm); padding: var(--space-xl); }
.folder { display: flex; align-items: center; gap: var(--space-md); padding: var(--space-md) var(--space-lg); background: var(--navy-light); border: 1px solid rgba(255,255,255,0.05); border-radius: var(--radius-md); font-size: 0.875rem; color: var(--silver-dim); transition: all var(--transition-base); animation: slideInRight 0.5s var(--ease-out) both; }
.folder:nth-child(1) { animation-delay: 0.5s; transform: rotate(-2deg); }
.folder:nth-child(2) { animation-delay: 0.6s; transform: rotate(1deg); }
.folder:nth-child(3) { animation-delay: 0.7s; transform: rotate(-1deg); }
.folder-icon { width: 36px; height: 36px; background: var(--navy-lighter); border-radius: var(--radius-sm); display: flex; align-items: center; justify-content: center; font-size: 1.125rem; }
.transform-arrow { display: flex; justify-content: center; padding: var(--space-lg) 0; animation: fadeIn 0.5s var(--ease-out) 0.9s both; }
.transform-arrow svg { width: 24px; height: 40px; color: var(--teal-primary); animation: bounce 2s infinite; }
@keyframes bounce { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(8px); } }
.folder-organized { background: linear-gradient(135deg, rgba(0, 200, 176, 0.1), rgba(0, 200, 176, 0.05)); border-color: rgba(0, 200, 176, 0.3); color: var(--teal-bright); transform: rotate(0deg) !important; animation-delay: 1s !important; }
.folder-organized .folder-icon { background: var(--teal-primary); color: var(--navy-deep); }
@keyframes fadeInUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
@keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
@keyframes slideInRight { from { opacity: 0; transform: translateX(30px); } to { opacity: 1; } }
.section-header { text-align: center; margin-bottom: var(--space-3xl); }
.section-label { display: inline-block; font-family: var(--font-mono); font-size: 0.8125rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.15em; color: var(--teal-primary); margin-bottom: var(--space-md); }
.section-title { margin-bottom: var(--space-md); }
.section-subtitle { font-size: 1.125rem; color: var(--silver-dim); max-width: 600px; margin: 0 auto; }
.problem { padding: var(--space-5xl) 0; background: var(--navy-primary); position: relative; }
.problem::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 1px; background: linear-gradient(90deg, transparent, rgba(0, 200, 176, 0.3), transparent); }
.problem-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--space-lg); margin-bottom: var(--space-3xl); }
.problem-card { background: var(--navy-light); border: 1px solid rgba(255,255,255,0.03); border-radius: var(--radius-lg); padding: var(--space-xl); text-align: center; transition: all var(--transition-base); }
.problem-card:hover { transform: translateY(-4px); border-color: rgba(0, 200, 176, 0.2); box-shadow: var(--shadow-glow); }
.problem-icon { font-size: 2.5rem; margin-bottom: var(--space-md); }
.problem-card p { font-size: 0.9375rem; font-style: italic; }
.problem-empathy { text-align: center; max-width: 700px; margin: 0 auto; }
.problem-empathy p { font-size: 1.25rem; color: var(--silver-muted); line-height: 1.7; }
.services { padding: var(--space-5xl) 0; background: var(--navy-deep); }
.services-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: var(--space-lg); margin-bottom: var(--space-3xl); }
.service-card { background: linear-gradient(135deg, var(--navy-light), var(--navy-primary)); border: 1px solid rgba(255,255,255,0.03); border-radius: var(--radius-lg); padding: var(--space-2xl); transition: all var(--transition-base); position: relative; overflow: hidden; }
.service-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 2px; background: linear-gradient(90deg, var(--teal-primary), transparent); opacity: 0; transition: opacity var(--transition-base); }
.service-card:hover { transform: translateY(-4px); border-color: rgba(0, 200, 176, 0.15); }
.service-card:hover::before { opacity: 1; }
.service-number { font-family: var(--font-mono); font-size: 0.8125rem; font-weight: 600; color: var(--teal-primary); margin-bottom: var(--space-md); }
.service-card h3 { margin-bottom: var(--space-sm); }
.service-card p { font-size: 0.9375rem; line-height: 1.7; }
.services-result { background: linear-gradient(135deg, rgba(0, 200, 176, 0.1), rgba(0, 200, 176, 0.05)); border: 1px solid rgba(0, 200, 176, 0.2); border-radius: var(--radius-lg); padding: var(--space-xl); text-align: center; max-width: 600px; margin: 0 auto; }
.services-result p { font-size: 1.125rem; color: var(--silver-bright); }
.services-result strong { color: var(--teal-bright); }
.about { padding: var(--space-5xl) 0; background: var(--navy-primary); }
.about-content { display: grid; grid-template-columns: 280px 1fr; gap: var(--space-3xl); align-items: start; }
.about-image-wrapper { width: 100%; aspect-ratio: 1; background: linear-gradient(135deg, var(--teal-primary), var(--teal-dim)); border-radius: var(--radius-xl); display: flex; align-items: center; justify-content: center; font-size: 4rem; font-weight: 700; color: var(--navy-deep); position: relative; overflow: hidden; }
.about-image-wrapper::after { content: ''; position: absolute; inset: 0; background: linear-gradient(135deg, transparent 40%, rgba(255,255,255,0.1) 100%); }
.about-text h2 { margin-bottom: var(--space-lg); }
.about-text p { font-size: 1.0625rem; line-height: 1.8; margin-bottom: var(--space-md); }
.about-location { display: inline-flex; align-items: center; gap: var(--space-xs); font-size: 0.9375rem; color: var(--silver-dim); margin-top: var(--space-md); }
.blog { padding: var(--space-5xl) 0; background: var(--navy-deep); }
.blog-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--space-lg); }
.blog-card { background: var(--navy-light); border: 1px solid rgba(255,255,255,0.03); border-radius: var(--radius-lg); padding: var(--space-xl); transition: all var(--transition-base); display: flex; flex-direction: column; }
.blog-card:hover { transform: translateY(-4px); border-color: rgba(0, 200, 176, 0.2); }
.blog-card-label { display: inline-block; font-family: var(--font-mono); font-size: 0.6875rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; color: var(--teal-primary); background: var(--teal-glow); padding: var(--space-xs) var(--space-sm); border-radius: var(--radius-full); margin-bottom: var(--space-md); width: fit-content; }
.blog-card h3 { font-size: 1.125rem; margin-bottom: var(--space-sm); line-height: 1.4; }
.blog-card p { font-size: 0.9375rem; flex-grow: 1; }
.blog-card-date { font-family: var(--font-mono); font-size: 0.75rem; color: var(--silver-dim); margin-top: var(--space-md); }
.testimonial { padding: var(--space-3xl) 0; background: var(--navy-primary); }
.testimonial-card { max-width: 700px; margin: 0 auto; text-align: center; }
.testimonial-placeholder { padding: var(--space-2xl); border: 2px dashed rgba(255,255,255,0.1); border-radius: var(--radius-lg); }
.testimonial-placeholder p { font-size: 1.25rem; font-style: italic; color: var(--silver-dim); margin-bottom: var(--space-sm); }
.testimonial-placeholder span { font-size: 0.9375rem; color: var(--silver-dim); }
.contact { padding: var(--space-5xl) 0; background: linear-gradient(180deg, var(--navy-deep), var(--navy-primary)); position: relative; }
.contact::before { content: ''; position: absolute; top: 0; left: 50%; transform: translateX(-50%); width: 80%; height: 1px; background: linear-gradient(90deg, transparent, rgba(0, 200, 176, 0.3), transparent); }
.contact-content { max-width: 600px; margin: 0 auto; text-align: center; }
.contact-content h2 { margin-bottom: var(--space-md); }
.contact-content > p { font-size: 1.125rem; margin-bottom: var(--space-2xl); }
.contact-email-btn { margin-bottom: var(--space-md); }
.contact-email { font-family: var(--font-mono); font-size: 0.875rem; color: var(--silver-dim); margin-bottom: var(--space-2xl); }
.contact-divider { display: flex; align-items: center; gap: var(--space-md); margin-bottom: var(--space-2xl); color: var(--silver-dim); font-size: 0.875rem; }
.contact-divider::before, .contact-divider::after { content: ''; flex: 1; height: 1px; background: rgba(255,255,255,0.1); }
.contact-form { text-align: left; }
.form-group { margin-bottom: var(--space-lg); }
.form-group label { display: block; font-size: 0.875rem; font-weight: 500; color: var(--silver-muted); margin-bottom: var(--space-xs); }
.form-group input, .form-group textarea { width: 100%; padding: var(--space-md); font-family: var(--font-display); font-size: 1rem; color: var(--silver-bright); background: var(--navy-light); border: 1px solid rgba(255,255,255,0.1); border-radius: var(--radius-md); transition: all var(--transition-fast); }
.form-group input::placeholder, .form-group textarea::placeholder { color: var(--silver-dim); }
.form-group input:focus, .form-group textarea:focus { outline: none; border-color: var(--teal-primary); box-shadow: 0 0 0 3px var(--teal-glow); }
.form-group textarea { resize: vertical; min-height: 120px; }
.contact-form .btn { width: 100%; }
.form-status { padding: var(--space-md); border-radius: var(--radius-md); margin-bottom: var(--space-lg); text-align: center; }
.form-status.success { background: rgba(16, 185, 129, 0.15); border: 1px solid rgba(16, 185, 129, 0.3); color: #10b981; }
.form-status.error { background: rgba(239, 68, 68, 0.15); border: 1px solid rgba(239, 68, 68, 0.3); color: #ef4444; }
.footer { padding: var(--space-2xl) 0; background: var(--navy-deep); border-top: 1px solid rgba(255,255,255,0.03); }
.footer-content { display: flex; flex-direction: column; align-items: center; text-align: center; gap: var(--space-sm); }
.footer-logo { font-size: 1.25rem; font-weight: 700; color: var(--silver-bright); }
.footer-logo span { color: var(--teal-primary); }
.footer-tagline { font-size: 0.9375rem; color: var(--silver-dim); }
.footer-copyright { font-size: 0.8125rem; color: var(--silver-dim); }
.fade-in { opacity: 0; transform: translateY(20px); transition: all 0.6s var(--ease-out); }
.fade-in.visible { opacity: 1; transform: translateY(0); }
@media (max-width: 1024px) {
    .hero-content { grid-template-columns: 1fr; text-align: center; }
    .hero-text { max-width: 100%; }
    .hero-actions { justify-content: center; }
    .hero-visual { margin-top: var(--space-2xl); }
    .services-grid { grid-template-columns: 1fr; }
    .about-content { grid-template-columns: 1fr; text-align: center; }
    .about-image-wrapper { max-width: 250px; margin: 0 auto; }
}
@media (max-width: 768px) {
    .nav-links { display: none; }
    .nav-toggle { display: flex; }
    .mobile-menu { display: block; }
    .problem-grid { grid-template-columns: repeat(2, 1fr); }
    .blog-grid { grid-template-columns: 1fr; }
    .hero { min-height: auto; padding: calc(var(--space-5xl) + 40px) 0 var(--space-3xl); }
    .hero-actions { flex-direction: column; }
    .hero-actions .btn { width: 100%; }
}
@media (max-width: 480px) {
    .problem-grid { grid-template-columns: 1fr; }
    .folder-stack { padding: var(--space-md); }
    .folder { padding: var(--space-sm) var(--space-md); font-size: 0.75rem; }
    .folder-icon { width: 28px; height: 28px; font-size: 0.875rem; }
}
    </style>
</head>
<body>
    <nav class="nav" id="nav">
        <div class="container">
            <div class="nav-inner">
                <a href="/" class="nav-logo"><div class="nav-logo-icon">A</div>Adam<span>AI</span></a>
                <div class="nav-links">
                    <a href="#services" class="nav-link">Services</a>
                    <a href="#about" class="nav-link">About</a>
                    <a href="#blog" class="nav-link">Blog</a>
                    <a href="#contact" class="btn btn-primary nav-cta">Let's Talk</a>
                </div>
                <button class="nav-toggle" id="navToggle" aria-label="Toggle menu"><span></span><span></span><span></span></button>
            </div>
        </div>
    </nav>
    <div class="mobile-menu" id="mobileMenu">
        <a href="#services">Services</a>
        <a href="#about">About</a>
        <a href="#blog">Blog</a>
        <a href="#contact">Let's Talk</a>
    </div>
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="hero-grid"></div>
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="hero-badge">Digital Asset Management</div>
                    <h1 class="hero-title">Stop wasting time <span class="text-gradient">hunting for files.</span></h1>
                    <p class="hero-subtitle">I help small business owners organize their digital chaos—so you can find what you need in seconds, not hours.</p>
                    <div class="hero-actions">
                        <a href="#contact" class="btn btn-primary">Get Organized</a>
                        <a href="#services" class="btn btn-secondary">See How It Works</a>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="hero-graphic">
                        <div class="folder-stack">
                            <div class="folder"><div class="folder-icon">📁</div><span>Contracts_FINAL_v3_USE THIS</span></div>
                            <div class="folder"><div class="folder-icon">📁</div><span>Photos_2023_maybe_backup</span></div>
                            <div class="folder"><div class="folder-icon">📁</div><span>Logo_NEW_ask_sarah_first</span></div>
                            <div class="transform-arrow"><svg viewBox="0 0 24 40" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 0 L12 32 M4 24 L12 32 L20 24"/></svg></div>
                            <div class="folder folder-organized"><div class="folder-icon">✓</div><span>Organized & Searchable</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="problem">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Sound Familiar?</span>
                <h2 class="section-title">The daily frustration of digital chaos</h2>
            </div>
            <div class="problem-grid">
                <div class="problem-card fade-in"><div class="problem-icon">🔍</div><p>"Where's the final version of that logo?"</p></div>
                <div class="problem-card fade-in"><div class="problem-icon">📁</div><p>"I know I saved it somewhere..."</p></div>
                <div class="problem-card fade-in"><div class="problem-icon">😰</div><p>"The client needs it now and I can't find it."</p></div>
                <div class="problem-card fade-in"><div class="problem-icon">🗂️</div><p>"I've tried to organize this three times."</p></div>
            </div>
            <div class="problem-empathy fade-in"><p>You're not bad at organizing. You're busy running a business. Let me handle the mess so you can focus on what you do best.</p></div>
        </div>
    </section>
    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <span class="section-label">What You Get</span>
                <h2 class="section-title">A complete system, ready to use</h2>
                <p class="section-subtitle">No more hunting. No more chaos. Just clarity.</p>
            </div>
            <div class="services-grid">
                <div class="service-card fade-in"><div class="service-number">01</div><h3>Full Audit</h3><p>I'll review everything you have—every folder, drive, and dusty corner of your digital life. No judgment, just clarity.</p></div>
                <div class="service-card fade-in"><div class="service-number">02</div><h3>Custom System</h3><p>I'll design an organization structure that fits how you actually work—not some generic template that falls apart in a week.</p></div>
                <div class="service-card fade-in"><div class="service-number">03</div><h3>Complete Setup</h3><p>I'll organize and migrate your files into the new system. You don't lift a finger.</p></div>
                <div class="service-card fade-in"><div class="service-number">04</div><h3>Simple Training</h3><p>A quick walkthrough so you know exactly how to keep it organized going forward. No tech degree required.</p></div>
            </div>
            <div class="services-result fade-in"><p><strong>The result?</strong> You find any file in under 30 seconds. Every time.</p></div>
        </div>
    </section>
    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-image fade-in"><div class="about-image-wrapper">A</div></div>
                <div class="about-text fade-in">
                    <h2>Hey, I'm Adam.</h2>
                    <p>I'm a digital asset management specialist who helps small businesses and nonprofits get their digital lives in order.</p>
                    <p>I know what it's like to waste precious time digging through folders named "New Folder (7)" looking for something important. That frustration? I fix it.</p>
                    <p>I combine systematic organization with smart technology to create systems that actually stick—because a system you can't maintain isn't a system at all.</p>
                    <div class="about-location">📍 Based in Ohio, working with clients everywhere.</div>
                </div>
            </div>
        </div>
    </section>
    <section id="blog" class="blog">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Insights</span>
                <h2 class="section-title">Latest from the blog</h2>
                <p class="section-subtitle">Thoughts on digital organization, AI, and working smarter.</p>
            </div>
            <div class="blog-grid">
                <article class="blog-card fade-in"><span class="blog-card-label">Coming Soon</span><h3>Why Your Folder System Keeps Failing</h3><p>The real reason you can't stay organized isn't discipline—it's design.</p><span class="blog-card-date">First post coming soon</span></article>
                <article class="blog-card fade-in"><span class="blog-card-label">Coming Soon</span><h3>How AI Is Changing Digital Asset Management</h3><p>Smart tagging, automatic organization, and what it means for small businesses.</p><span class="blog-card-date">First post coming soon</span></article>
                <article class="blog-card fade-in"><span class="blog-card-label">Coming Soon</span><h3>The 30-Second File Test</h3><p>A simple way to know if your digital organization is actually working.</p><span class="blog-card-date">First post coming soon</span></article>
            </div>
        </div>
    </section>
    <section class="testimonial">
        <div class="container">
            <div class="testimonial-card fade-in">
                <div class="testimonial-placeholder"><p>"Your success story goes here."</p><span>— Your first client, coming soon</span></div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">
            <div class="contact-content">
                <h2>Ready to get organized?</h2>
                <p>Let's talk about your digital mess. No pressure, no judgment—just a conversation about how I can help.</p>
                <div class="contact-email-btn"><a href="mailto:adam@adamai.io" class="btn btn-primary">Email Me Directly</a></div>
                <p class="contact-email">adam@adamai.io</p>
                <div class="contact-divider"><span>or send a quick message</span></div>
                <?php
                $status = '';
                $statusType = '';
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
                    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
                    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
                    
                    if (!empty($name) && !empty($email) && !empty($message)) {
                        $to = "adam@adamai.io";
                        $subject = "New Contact from AdamAI.io: $name";
                        $body = "Name: $name\n";
                        $body .= "Email: $email\n\n";
                        $body .= "Message:\n$message";
                        $headers = "From: $email\r\n";
                        $headers .= "Reply-To: $email\r\n";
                        
                        if (mail($to, $subject, $body, $headers)) {
                            $status = "Thanks! Your message has been sent. I'll get back to you soon.";
                            $statusType = "success";
                        } else {
                            $status = "Something went wrong. Please email me directly at adam@adamai.io";
                            $statusType = "error";
                        }
                    } else {
                        $status = "Please fill in all fields.";
                        $statusType = "error";
                    }
                }
                if ($status): ?>
                <div class="form-status <?php echo $statusType; ?>"><?php echo $status; ?></div>
                <?php endif; ?>
                <form class="contact-form" method="POST" action="#contact">
                    <div class="form-group"><label for="name">Your Name</label><input type="text" id="name" name="name" placeholder="What should I call you?" required></div>
                    <div class="form-group"><label for="email">Your Email</label><input type="email" id="email" name="email" placeholder="Where can I reach you?" required></div>
                    <div class="form-group"><label for="message">What's your biggest digital headache?</label><textarea id="message" name="message" placeholder="Tell me about the chaos..." required></textarea></div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <a href="/" class="footer-logo">Adam<span>AI</span></a>
                <p class="footer-tagline">Digital clarity for busy businesses.</p>
                <p class="footer-copyright">© 2025 Adam AI. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    const nav = document.getElementById('nav');
    window.addEventListener('scroll', function() {
        nav.classList.toggle('scrolled', window.scrollY > 50);
    });
    const navToggle = document.getElementById('navToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    navToggle.addEventListener('click', function() {
        navToggle.classList.toggle('active');
        mobileMenu.classList.toggle('active');
    });
    mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', function() {
            navToggle.classList.remove('active');
            mobileMenu.classList.remove('active');
        });
    });
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                const navHeight = nav.offsetHeight;
                window.scrollTo({ top: target.offsetTop - navHeight - 20, behavior: 'smooth' });
            }
        });
    });
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
    document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
});
    </script>
</body>
</html>
