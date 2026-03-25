<?php
/**
 * Template Name: Request Investigation
 * Description: Multi-step secure inquiry form.
 */
get_header();

$service_types = [
  'property'   => 'Property & Land Verification',
  'diaspora'   => 'Diaspora Investment Protection',
  'corporate'  => 'Corporate Due Diligence',
  'background' => 'Employee / Background Check',
  'marital'    => 'Marital & Relationship Investigation',
  'fraud'      => 'Fraud & Financial Investigation',
  'missing'    => 'Missing Person',
  'cyber'      => 'Cyber & Digital Investigation',
  'kyc'        => 'KYC / Identity Verification',
  'other'      => 'Other / Not Listed',
];
?>

<main class="main-content rfi-page" style="background: var(--cf-black);">

  <!-- Page Hero -->
  <div class="rfi-hero">
    <div class="container">
      <div class="rfi-hero__inner">
        <div class="section-eyebrow" style="justify-content:center;">Confidential Inquiry</div>
        <h1 class="rfi-hero__title">Start Your Investigation</h1>
        <p class="rfi-hero__desc">No names required until you're ready. We respond within 24 hours. Everything is strictly confidential.</p>
        <div class="rfi-hero__badges">
          <span class="rfi-badge">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/></svg>
            Encrypted
          </span>
          <span class="rfi-badge">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
            Identity Protected
          </span>
          <span class="rfi-badge">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12,6 12,12 16,14"/></svg>
            24hr Response
          </span>
        </div>
      </div>
    </div>
  </div>

  <!-- Form Section -->
  <div class="rfi-form-section">
    <div class="container">
      <div class="rfi-layout">

        <!-- Form -->
        <div class="rfi-form-wrap">

          <!-- Step progress -->
          <div class="rfi-progress" aria-label="Form progress">
            <div class="rfi-progress__steps">
              <div class="rfi-step-dot active" data-step="1">
                <span class="rfi-step-dot__num">1</span>
                <span class="rfi-step-dot__label">Your Case</span>
              </div>
              <div class="rfi-progress__line"></div>
              <div class="rfi-step-dot" data-step="2">
                <span class="rfi-step-dot__num">2</span>
                <span class="rfi-step-dot__label">Contact</span>
              </div>
              <div class="rfi-progress__line"></div>
              <div class="rfi-step-dot" data-step="3">
                <span class="rfi-step-dot__num">3</span>
                <span class="rfi-step-dot__label">Confirm</span>
              </div>
            </div>
          </div>

          <form id="cf-investigation-form" class="rfi-form" novalidate>
            <?php wp_nonce_field( 'cf_nonce', 'cf_nonce_field' ); ?>

            <!-- ─── STEP 1: Your Case ─────────────────────── -->
            <div class="form-step active" data-step="0">
              <h2 class="rfi-step__title">What do you need investigated?</h2>
              <p class="rfi-step__desc">Select the closest match — you can clarify in the description below.</p>

              <div class="service-type-grid">
                <?php foreach ( $service_types as $val => $label ) : ?>
                  <label class="service-type-card">
                    <input type="radio" name="service_type" value="<?php echo esc_attr( $val ); ?>" required>
                    <span class="service-type-card__inner">
                      <span class="service-type-card__label"><?php echo esc_html( $label ); ?></span>
                    </span>
                  </label>
                <?php endforeach; ?>
              </div>

              <div class="form-group" style="margin-top: var(--sp-4);">
                <label class="form-label form-label--light" for="urgency">Urgency Level</label>
                <div class="urgency-row">
                  <label class="urgency-option">
                    <input type="radio" name="urgency" value="normal" checked>
                    <span>Normal</span>
                    <small>Response within 24–48hrs</small>
                  </label>
                  <label class="urgency-option">
                    <input type="radio" name="urgency" value="urgent">
                    <span>Urgent</span>
                    <small>Response within 24hrs</small>
                  </label>
                </div>
              </div>

              <div class="form-group">
                <label class="form-label form-label--light" for="situation">Briefly describe your situation <span class="form-label__note">(optional — no names yet)</span></label>
                <textarea id="situation" name="situation" class="form-input form-input--dark form-textarea" rows="4"
                  placeholder="e.g. I suspect a land title I purchased has been transferred without my knowledge…"></textarea>
              </div>

              <div class="rfi-step__actions">
                <button type="button" class="btn btn-primary btn-lg" data-next-step>
                  Continue
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
                <p class="rfi-step__note">Or contact us directly via
                  <a href="<?php echo esc_url( cf_whatsapp_link( 'Hello, I would like to request an investigation.' ) ); ?>"
                     target="_blank" rel="noopener" style="color:var(--cf-gold);">WhatsApp</a>
                </p>
              </div>
            </div>

            <!-- ─── STEP 2: Contact ───────────────────────── -->
            <div class="form-step" data-step="1">
              <h2 class="rfi-step__title">How should we reach you?</h2>
              <p class="rfi-step__desc">We will use this only to respond to your inquiry. No information is shared.</p>

              <div class="form-group">
                <label class="form-label form-label--light">Preferred contact method</label>
                <div class="contact-method-row">
                  <label class="contact-method-option">
                    <input type="radio" name="contact_method" value="whatsapp" checked>
                    <span>
                      <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                      WhatsApp
                    </span>
                  </label>
                  <label class="contact-method-option">
                    <input type="radio" name="contact_method" value="email">
                    <span>
                      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                      Email
                    </span>
                  </label>
                </div>
              </div>

              <div class="form-group" id="contact-detail-group">
                <label class="form-label form-label--light" for="contact_detail" id="contact-detail-label">WhatsApp Number</label>
                <input type="text" id="contact_detail" name="contact_detail" class="form-input form-input--dark"
                  placeholder="+256 700 000 000" required>
                <p class="form-hint">Include country code (e.g. +44 for UK, +1 for US)</p>
              </div>

              <div class="form-group">
                <label class="form-label form-label--light" for="location">Your location</label>
                <select id="location" name="location" class="form-input form-select form-input--dark">
                  <option value="">Select your country</option>
                  <option value="Uganda">Uganda</option>
                  <option value="United Kingdom">United Kingdom 🇬🇧</option>
                  <option value="United States">United States 🇺🇸</option>
                  <option value="UAE">UAE 🇦🇪</option>
                  <option value="Canada">Canada 🇨🇦</option>
                  <option value="Europe">Europe 🇪🇺</option>
                  <option value="Other">Other</option>
                </select>
              </div>

              <div class="form-group">
                <label class="form-label form-label--light">Preferred date &amp; time to be contacted</label>
                <p class="form-hint" style="margin-bottom:var(--sp-2);">All times in East Africa Time (EAT, UTC+3). We'll do our best to reach you at your chosen slot.</p>

                <div class="datetime-picker">
                  <!-- Date picker -->
                  <div class="datetime-picker__date">
                    <label class="datetime-picker__section-label">Select a date</label>
                    <input type="date" id="preferred_date" name="preferred_date"
                           class="form-input form-input--dark datetime-picker__date-input"
                           min="<?php echo esc_attr( gmdate( 'Y-m-d' ) ); ?>">
                  </div>

                  <!-- Time slots -->
                  <div class="datetime-picker__slots" id="time-slots-wrap">
                    <label class="datetime-picker__section-label">Select a time slot</label>
                    <div class="time-slots-grid" id="time-slots-grid">
                      <?php
                      $slots = [
                        'morning'   => [ '08:00', '09:00', '10:00', '11:00' ],
                        'afternoon' => [ '12:00', '13:00', '14:00', '15:00', '16:00' ],
                        'evening'   => [ '17:00', '18:00', '19:00', '20:00' ],
                      ];
                      $labels = [ 'morning' => 'Morning', 'afternoon' => 'Afternoon', 'evening' => 'Evening' ];
                      foreach ( $slots as $period => $times ) : ?>
                        <div class="time-slots__group">
                          <span class="time-slots__period"><?php echo esc_html( $labels[ $period ] ); ?></span>
                          <div class="time-slots__row">
                            <?php foreach ( $times as $t ) :
                              $hour   = (int) substr( $t, 0, 2 );
                              $ampm   = $hour >= 12 ? 'PM' : 'AM';
                              $hour12 = $hour > 12 ? $hour - 12 : ( $hour === 0 ? 12 : $hour );
                              $display = sprintf( '%d:00 %s', $hour12, $ampm );
                            ?>
                              <button type="button" class="time-slot-btn" data-time="<?php echo esc_attr( $t ); ?>">
                                <?php echo esc_html( $display ); ?>
                              </button>
                            <?php endforeach; ?>
                          </div>
                        </div>
                      <?php endforeach; ?>
                    </div>
                    <input type="hidden" name="preferred_time" id="preferred_time">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="form-label form-label--light" for="name">Your name <span class="form-label__note">(optional)</span></label>
                <input type="text" id="name" name="client_name" class="form-input form-input--dark"
                  placeholder="You may use a pseudonym">
              </div>

              <div class="rfi-step__actions">
                <button type="button" class="btn btn-outline" data-prev-step>
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                  Back
                </button>
                <button type="button" class="btn btn-primary btn-lg" data-next-step>
                  Review Inquiry
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
              </div>
            </div>

            <!-- ─── STEP 3: Confirm ───────────────────────── -->
            <div class="form-step" data-step="2">
              <h2 class="rfi-step__title">Review your inquiry</h2>
              <p class="rfi-step__desc">Check the details below before submitting. You can go back to edit anything.</p>

              <div class="rfi-summary" id="rfi-summary">
                <!-- Populated by JS -->
              </div>

              <div class="rfi-privacy-box">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--cf-gold)" stroke-width="1.5" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                <p>Your inquiry is encrypted and never shared with third parties. Your identity will not be disclosed without your written consent. All communications are bound by strict confidentiality.</p>
              </div>

              <div id="cf-form-message" class="rfi-form-message" style="display:none;"></div>

              <div class="rfi-step__actions">
                <button type="button" class="btn btn-outline" data-prev-step>
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                  Edit
                </button>
                <button type="submit" class="btn btn-primary btn-lg" id="cf-submit-btn">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                  Submit Secure Inquiry
                </button>
              </div>
            </div>

          </form><!-- #cf-investigation-form -->
        </div>

        <!-- Sidebar -->
        <aside class="rfi-sidebar">

          <div class="rfi-sidebar__card">
            <h3 class="rfi-sidebar__title">Why CrediFold?</h3>
            <ul class="rfi-sidebar__list">
              <li>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/></svg>
                Absolute confidentiality — guaranteed
              </li>
              <li>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="20,6 9,17 4,12"/></svg>
                No case too complex or too sensitive
              </li>
              <li>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12,6 12,12 16,14"/></svg>
                Response within 24 hours
              </li>
              <li>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                Uganda-based, diaspora-ready
              </li>
              <li>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14,2 14,8 20,8"/></svg>
                Documented, evidenced reports
              </li>
            </ul>
          </div>

          <div class="rfi-sidebar__card rfi-sidebar__card--whatsapp">
            <p class="rfi-sidebar__whatsapp-title">Prefer to talk first?</p>
            <p class="rfi-sidebar__whatsapp-desc">Send us a confidential WhatsApp message. No commitment, just a conversation.</p>
            <a href="<?php echo esc_url( cf_whatsapp_link( 'Hello, I would like to discuss a confidential investigation.' ) ); ?>"
               class="btn btn-whatsapp btn-full" target="_blank" rel="noopener">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
              Message on WhatsApp
            </a>
          </div>

          <div class="rfi-sidebar__card">
            <p style="font-size:0.8rem; color:rgba(232,232,244,0.4); line-height:1.7;">
              All submissions are received only by CrediFold investigators. No data is sold, shared, or stored beyond operational necessity.
            </p>
          </div>

        </aside>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>
