<section class="section diaspora" id="diaspora" aria-labelledby="diaspora-heading">
  <div class="container">
    <div class="diaspora__inner">

      <!-- Left: Text -->
      <div class="fade-up">
        <span class="diaspora__badge">For the Ugandan Diaspora</span>
        <h2 class="diaspora__title h2" id="diaspora-heading">
          Invested in Uganda from Abroad?<br>
          <em style="font-style:italic; color:var(--cf-navy)">We Protect Your Interests.</em>
        </h2>
        <p class="diaspora__text">
          Thousands of Ugandans in the UK, US, UAE, Canada, and Europe are sending money home — to build homes, invest in land, and support family. But distance creates vulnerability.
        </p>

        <ul class="diaspora__list">
          <li class="diaspora__list-item">Verify land titles are legitimate and untampered</li>
          <li class="diaspora__list-item">Confirm agents and partners act in your interest</li>
          <li class="diaspora__list-item">Investigate suspicious financial activity in your name</li>
          <li class="diaspora__list-item">Monitor property and investment progress independently</li>
          <li class="diaspora__list-item">Document evidence for legal proceedings if needed</li>
        </ul>

        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-navy">
          Diaspora Protection Services
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>

      <!-- Right: Interactive country tabs -->
      <div class="diaspora__visual fade-up fade-up--delay-2">

        <div class="diaspora-tabs" role="tablist" aria-label="Diaspora locations">
          <button role="tab" aria-selected="true"  aria-controls="dtab-uk"  id="dtab-btn-uk"  class="diaspora-tab active" data-tab="uk">🇬🇧 UK</button>
          <button role="tab" aria-selected="false" aria-controls="dtab-us"  id="dtab-btn-us"  class="diaspora-tab"        data-tab="us">🇺🇸 US</button>
          <button role="tab" aria-selected="false" aria-controls="dtab-uae" id="dtab-btn-uae" class="diaspora-tab"        data-tab="uae">🇦🇪 UAE</button>
          <button role="tab" aria-selected="false" aria-controls="dtab-ca"  id="dtab-btn-ca"  class="diaspora-tab"        data-tab="ca">🇨🇦 Canada</button>
          <button role="tab" aria-selected="false" aria-controls="dtab-eu"  id="dtab-btn-eu"  class="diaspora-tab"        data-tab="eu">🇪🇺 Europe</button>
        </div>

        <div class="diaspora-panels">

          <div role="tabpanel" id="dtab-uk" aria-labelledby="dtab-btn-uk" class="diaspora-panel active">
            <h3 class="diaspora__visual-title">Uganda's largest overseas community</h3>
            <p class="diaspora__visual-text">Over 400,000 Ugandans in the UK send billions home annually. Land fraud, title manipulation, and agent mismanagement are the most reported risks. CrediFold gives you verified, on-the-ground intelligence.</p>
            <div class="diaspora-panel__stat">
              <span class="diaspora-panel__stat-num">67%</span>
              <span class="diaspora-panel__stat-label">of diaspora fraud cases involve property</span>
            </div>
          </div>

          <div role="tabpanel" id="dtab-us" aria-labelledby="dtab-btn-us" class="diaspora-panel" hidden>
            <h3 class="diaspora__visual-title">Protecting American-Ugandan investments</h3>
            <p class="diaspora__visual-text">Ugandan-Americans investing in property and business back home face a unique challenge — no local presence to verify what contractors, lawyers, and family members are actually doing.</p>
            <div class="diaspora-panel__stat">
              <span class="diaspora-panel__stat-num">24hr</span>
              <span class="diaspora-panel__stat-label">report turnaround for urgent US-based clients</span>
            </div>
          </div>

          <div role="tabpanel" id="dtab-uae" aria-labelledby="dtab-btn-uae" class="diaspora-panel" hidden>
            <h3 class="diaspora__visual-title">Built for Ugandans working in the Gulf</h3>
            <p class="diaspora__visual-text">Many Ugandans based in Dubai, Abu Dhabi, and across the UAE are building homes and investing from afar. We verify, monitor, and report — so you know exactly what your money is doing.</p>
            <div class="diaspora-panel__stat">
              <span class="diaspora-panel__stat-num">100%</span>
              <span class="diaspora-panel__stat-label">remote client service — no travel needed</span>
            </div>
          </div>

          <div role="tabpanel" id="dtab-ca" aria-labelledby="dtab-btn-ca" class="diaspora-panel" hidden>
            <h3 class="diaspora__visual-title">Serving the Canadian-Ugandan community</h3>
            <p class="diaspora__visual-text">From Toronto to Vancouver, Ugandan-Canadians trust CrediFold to protect their land, their family interests, and their business investments in Uganda — with full confidentiality.</p>
            <div class="diaspora-panel__stat">
              <span class="diaspora-panel__stat-num">Secure</span>
              <span class="diaspora-panel__stat-label">encrypted communication across all time zones</span>
            </div>
          </div>

          <div role="tabpanel" id="dtab-eu" aria-labelledby="dtab-btn-eu" class="diaspora-panel" hidden>
            <h3 class="diaspora__visual-title">Across Sweden, Germany, Netherlands & beyond</h3>
            <p class="diaspora__visual-text">Europe's Ugandan diaspora is growing fast. Whether you're in Stockholm, Berlin, or Amsterdam — CrediFold operates on the ground in Uganda, so you don't have to.</p>
            <div class="diaspora-panel__stat">
              <span class="diaspora-panel__stat-num">5+</span>
              <span class="diaspora-panel__stat-label">European countries served</span>
            </div>
          </div>

        </div>

        <div style="margin-top:var(--sp-5); padding-top:var(--sp-4); border-top:1px solid rgba(255,255,255,0.1);">
          <p style="font-size:0.8125rem; color:rgba(232,232,244,0.5); margin-bottom:var(--sp-2); text-transform:uppercase; letter-spacing:0.1em; font-weight:600;">Reach Us Securely</p>
          <div style="display:flex; gap:var(--sp-2); flex-wrap:wrap;">
            <a href="<?php echo esc_url( cf_whatsapp_link( 'Hello, I am based abroad and would like to protect my investments in Uganda.' ) ); ?>"
               class="btn btn-whatsapp btn-sm" target="_blank" rel="noopener">
              WhatsApp Now
            </a>
            <a href="<?php echo esc_url( home_url( '/request-investigation' ) ); ?>" class="btn btn-outline btn-sm">
              Secure Form
            </a>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>
