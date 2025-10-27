<?php
// Eugenio Damaso Professional Website - Homepage
// Realizzato e sviluppato da Eugenio Damaso
// Basato su framework Team Evoluto AI (6.0) © 2025

require_once 'includes/config.php';
require_once 'includes/functions.php';

$page_title = 'Eugenio Damaso - Strategic Business Consultant & AI Innovation Expert';
$page_description = 'Trasformo la Business Intelligence attraverso Frameworks AI Proprietari. Consulenza strategica in Cybersecurity, Analytics, Project Management e soluzioni AI custom.';
$page_keywords = 'eugenio damaso, business consultant, ai framework, team evoluto ai, cybersecurity, business intelligence, project management, consulenza strategica';
$canonical_url = SITE_URL;

include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section" id="home">
    <div class="hero-background">
        <div class="animated-bg"></div>
        <div class="particle-system"></div>
    </div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">
                    <span class="highlight-text">Eugenio Damaso</span><br>
                    <span class="typing-animation">Strategic Business Consultant</span>
                </h1>
                <p class="hero-subtitle">
                    Trasformo la <strong>Business Intelligence</strong> attraverso <strong>Frameworks AI Proprietari</strong>
                </p>
                
                <!-- Credibility Bar -->
                <div class="credibility-bar">
                    <div class="credential-item">
                        <i class="fas fa-certificate"></i>
                        <span>20+ Certificazioni Elite</span>
                    </div>
                    <div class="credential-item">
                        <i class="fas fa-brain"></i>
                        <span>Creator Team Evoluto AI</span>
                    </div>
                    <div class="credential-item">
                        <i class="fas fa-shield-alt"></i>
                        <span>Cybersecurity & IT Expert</span>
                    </div>
                    <div class="credential-item">
                        <i class="fas fa-chart-line"></i>
                        <span>Business Intelligence Specialist</span>
                    </div>
                </div>
                
                <!-- CTA Buttons -->
                <div class="hero-cta">
                    <a href="/prenota-consulenza" class="btn btn-primary btn-lg pulse-animation">
                        <i class="fas fa-calendar-check"></i>
                        Prenota Consulenza Gratuita 90 min
                    </a>
                    <a href="/expertise" class="btn btn-secondary btn-lg">
                        <i class="fas fa-user-tie"></i>
                        Scopri le Competenze
                    </a>
                </div>
            </div>
            
            <div class="hero-visual">
                <div class="floating-card">
                    <div class="ai-visualization">
                        <div class="neural-network">
                            <div class="node active"></div>
                            <div class="node"></div>
                            <div class="node active"></div>
                            <div class="node"></div>
                            <div class="node active"></div>
                        </div>
                        <div class="data-flow"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="scroll-indicator">
        <div class="scroll-arrow"></div>
    </div>
</section>

<!-- Services Preview Section -->
<section class="services-preview" id="services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Servizi di Consulenza Elite</h2>
            <p class="section-subtitle">Soluzioni strategiche personalizzate per la tua crescita</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card hover-effect">
                <div class="service-icon">
                    <i class="fas fa-robot"></i>
                </div>
                <h3>AI Framework Development</h3>
                <p>Sviluppo e implementazione di framework AI proprietari per automazione e intelligence avanzata.</p>
                <div class="service-features">
                    <span class="feature-tag">Team Evoluto AI</span>
                    <span class="feature-tag">Custom Solutions</span>
                </div>
            </div>
            
            <div class="service-card hover-effect">
                <div class="service-icon">
                    <i class="fas fa-shield-virus"></i>
                </div>
                <h3>Cybersecurity Strategy</h3>
                <p>Strategia di sicurezza informatica completa con assessment, implementazione e monitoring.</p>
                <div class="service-features">
                    <span class="feature-tag">RSI Certified</span>
                    <span class="feature-tag">Penetration Testing</span>
                </div>
            </div>
            
            <div class="service-card hover-effect">
                <div class="service-icon">
                    <i class="fas fa-chart-area"></i>
                </div>
                <h3>Business Intelligence</h3>
                <p>Analisi avanzata dei dati, dashboard personalizzate e sistemi di supporto decisionale.</p>
                <div class="service-features">
                    <span class="feature-tag">Advanced Analytics</span>
                    <span class="feature-tag">Real-time Dashboards</span>
                </div>
            </div>
            
            <div class="service-card hover-effect">
                <div class="service-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3>ESG & Sustainability</h3>
                <p>Strategia ESG completa con reporting, compliance e stakeholder engagement.</p>
                <div class="service-features">
                    <span class="feature-tag">ESG Strategy</span>
                    <span class="feature-tag">Sustainability Reporting</span>
                </div>
            </div>
            
            <div class="service-card hover-effect">
                <div class="service-icon">
                    <i class="fas fa-project-diagram"></i>
                </div>
                <h3>Project Management</h3>
                <p>Gestione progetti complessa con metodologie Agile e Digital Transformation.</p>
                <div class="service-features">
                    <span class="feature-tag">PMP® Candidate</span>
                    <span class="feature-tag">Agile Certified</span>
                </div>
            </div>
            
            <div class="service-card hover-effect">
                <div class="service-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3>Custom Software</h3>
                <p>Sviluppo software personalizzato con tecnologie .NET, PHP e integrazioni cloud.</p>
                <div class="service-features">
                    <span class="feature-tag">.NET/C# Expert</span>
                    <span class="feature-tag">Cloud Integration</span>
                </div>
            </div>
        </div>
        
        <div class="cta-section">
            <a href="/servizi" class="btn btn-outline-primary btn-lg">
                <i class="fas fa-arrow-right"></i>
                Esplora Tutti i Servizi
            </a>
        </div>
    </div>
</section>

<!-- Competency Showcase -->
<section class="competency-showcase">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Expertise & Certificazioni</h2>
            <p class="section-subtitle">Competenze certificate e comprovate sul campo</p>
        </div>
        
        <div class="competency-visual">
            <div class="skills-radar">
                <div class="skill-item" data-skill="ai-development" data-level="98">
                    <div class="skill-name">AI Framework Development</div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 98%"></div>
                    </div>
                </div>
                <div class="skill-item" data-skill="business-intelligence" data-level="95">
                    <div class="skill-name">Business Intelligence</div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 95%"></div>
                    </div>
                </div>
                <div class="skill-item" data-skill="cybersecurity" data-level="92">
                    <div class="skill-name">Cybersecurity Management</div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 92%"></div>
                    </div>
                </div>
                <div class="skill-item" data-skill="project-management" data-level="88">
                    <div class="skill-name">Project Management</div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 88%"></div>
                    </div>
                </div>
                <div class="skill-item" data-skill="financial-analysis" data-level="90">
                    <div class="skill-name">Financial Analysis</div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 90%"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="certifications-grid">
            <div class="cert-category">
                <h4>Supply Chain & Operations</h4>
                <div class="cert-badges">
                    <span class="cert-badge">SFC™</span>
                    <span class="cert-badge">SSYB</span>
                    <span class="cert-badge">SCMS-F™</span>
                    <span class="cert-badge">SCDM-F™</span>
                    <span class="cert-badge">SCMR-F™</span>
                </div>
            </div>
            <div class="cert-category">
                <h4>Technology & Development</h4>
                <div class="cert-badges">
                    <span class="cert-badge">Microsoft .NET</span>
                    <span class="cert-badge">PHP 7</span>
                    <span class="cert-badge">Google Cloud</span>
                </div>
            </div>
            <div class="cert-category">
                <h4>Business & Management</h4>
                <div class="cert-badges">
                    <span class="cert-badge">PMP® Candidate</span>
                    <span class="cert-badge">Financial Analyst</span>
                    <span class="cert-badge">MBA</span>
                    <span class="cert-badge">Agile PM</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Preview -->
<section class="blog-preview">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Insights & Analysis</h2>
            <p class="section-subtitle">Approfondimenti strategici e trend analysis</p>
        </div>
        
        <div class="blog-grid">
            <?php
            $latest_posts = getLatestBlogPosts(3);
            if (!empty($latest_posts)):
                foreach ($latest_posts as $post):
            ?>
            <article class="blog-card hover-effect">
                <div class="blog-image">
                    <img src="<?php echo $post['image'] ?: '/assets/images/default-blog.jpg'; ?>" alt="<?php echo htmlspecialchars($post['title']); ?>">
                    <div class="blog-category"><?php echo $post['category']; ?></div>
                </div>
                <div class="blog-content">
                    <h3 class="blog-title">
                        <a href="/blog/<?php echo $post['slug']; ?>"><?php echo htmlspecialchars($post['title']); ?></a>
                    </h3>
                    <p class="blog-excerpt"><?php echo truncateText($post['excerpt'], 120); ?></p>
                    <div class="blog-meta">
                        <span class="blog-date">
                            <i class="fas fa-calendar"></i>
                            <?php echo formatDate($post['created_at']); ?>
                        </span>
                        <span class="blog-read-time">
                            <i class="fas fa-clock"></i>
                            <?php echo estimateReadTime($post['content']); ?> min
                        </span>
                    </div>
                </div>
            </article>
            <?php 
                endforeach;
            else:
            ?>
            <div class="no-posts">
                <p>Prossimamente articoli e insights esclusivi...</p>
            </div>
            <?php endif; ?>
        </div>
        
        <div class="cta-section">
            <a href="/blog" class="btn btn-outline-primary btn-lg">
                <i class="fas fa-newspaper"></i>
                Leggi Tutti gli Articoli
            </a>
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="contact-cta">
    <div class="container">
        <div class="cta-content">
            <h2>Pronto a Trasformare il Tuo Business?</h2>
            <p>Prenota una consulenza gratuita di 90 minuti e scopri come possiamo accelerare la tua crescita</p>
            <div class="cta-buttons">
                <a href="/prenota-consulenza" class="btn btn-primary btn-lg">
                    <i class="fas fa-calendar-check"></i>
                    Prenota Consulenza Gratuita
                </a>
                <a href="mailto:eugenio.damaso01@gmail.com" class="btn btn-secondary btn-lg">
                    <i class="fas fa-envelope"></i>
                    eugenio.damaso01@gmail.com
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>