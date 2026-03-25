<?php
/**
 * Template Name: FAQ
 */
get_header();

$faq_groups = [
  'Getting Started' => [
    [ 'Do I need to give my real name to make an inquiry?',
      'No. You can contact us completely anonymously. We only ask for your identity when you have decided to proceed with a signed engagement. Your first inquiry — and the initial consultation — require nothing more than a description of your situation.' ],
    [ 'Is the initial consultation free?',
      'Yes. The first conversation costs nothing. We listen to your situation, advise you on whether and how we can help, and give you an honest assessment — all before any fee is discussed.' ],
    [ 'How do I start?',
      'Use any channel: the secure inquiry form on this website, WhatsApp, or email. Describe your situation briefly. We respond within 24 hours and take it from there at your pace.' ],
    [ 'What information do I need to provide upfront?',
      'As little or as much as you are comfortable sharing. A rough description of your situation is enough to get started. We ask follow-up questions during the consultation to fully understand what is needed.' ],
  ],
  'Confidentiality & Privacy' => [
    [ 'How do you protect my identity?',
      'All communications are handled under our confidentiality policy. We do not log, store, or share any personal information beyond what is operationally necessary. A formal confidentiality agreement is signed before any investigation begins.' ],
    [ 'Will anyone know I hired you?',
      'No. All investigative work is conducted discreetly. Our operatives do not identify themselves as investigators when conducting field work. The subject of an investigation never knows they are being investigated.' ],
    [ 'Is my communication with you confidential?',
      'Yes. WhatsApp messages, emails, and form submissions are all treated as confidential. We do not discuss, reference, or disclose client communications under any circumstances.' ],
    [ 'Can the subject of the investigation find out I contacted you?',
      'No. We never reveal client identities to third parties — including investigation subjects, legal parties, or government agencies — without your express written consent.' ],
  ],
  'Fees & Process' => [
    [ 'How much does an investigation cost?',
      'Fees depend on the type, scope, and duration of the investigation. We provide a fixed written fee in the engagement proposal — before work begins. There are no hidden charges, no hourly billing surprises, and no scope creep without your approval.' ],
    [ 'How long does an investigation take?',
      'It varies by case. A document or identity verification may take 3–5 days. A land title investigation typically takes 1–2 weeks. Surveillance and field investigations depend on the subject and scope. We give you a realistic timeline upfront.' ],
    [ 'Do I pay upfront?',
      'We typically require a deposit before work begins, with the balance due on delivery of the report. Exact payment terms are stated in your engagement proposal.' ],
    [ 'What happens if the investigation finds nothing?',
      'You still receive a full report documenting what was investigated and what was found — or not found. A negative finding is still a result. If we genuinely cannot pursue the investigation further, we will tell you honestly and discuss options.' ],
    [ 'Can I stop the investigation once it has started?',
      'Yes. You can pause or end an investigation at any time. We provide a report of findings to date. Fees for completed work are retained; fees for work not yet started are refunded.' ],
  ],
  'What We Can Investigate' => [
    [ 'Can you investigate land and property matters?',
      'Yes. Property and land verification is one of our most common cases — particularly for diaspora clients. We verify title deeds, check for fraudulent transfers, confirm boundary surveys, and investigate agent conduct.' ],
    [ 'Can you help if I am based outside Uganda?',
      'Absolutely. We work with clients in the UK, US, UAE, Canada, Europe, and beyond. All communication happens remotely. Our team operates on the ground in Uganda on your behalf.' ],
    [ 'Can you investigate a person — a business partner, employee, or spouse?',
      'Yes. Background checks, corporate due diligence, and personal investigations are all within our scope. All work is conducted legally and ethically, within Ugandan and international law.' ],
    [ 'Do you handle sensitive personal matters like marital investigations?',
      'Yes. We understand these cases require exceptional discretion. Marital and relationship investigations are handled with complete confidentiality and delivered with documented evidence — never rumour or assumption.' ],
    [ 'Can evidence from your investigations be used in court?',
      'Yes. All evidence is gathered through lawful means and documented in a format suitable for legal proceedings. If you are working with a lawyer, we can liaise directly to ensure the report meets the required standard.' ],
  ],
  'Results & Reports' => [
    [ 'What is included in the final report?',
      'Every report includes a written summary of findings, supporting evidence (photographs, documents, records, and verified testimony where applicable), and a clear conclusion. We walk you through the report in a debrief call.' ],
    [ 'How is the report delivered?',
      'Reports are delivered securely — via encrypted file transfer or in person, depending on your preference and location. Physical copies can be arranged for clients in Uganda.' ],
    [ 'Do you keep a copy of my report?',
      'We retain case records only for the minimum period required for operational purposes. After that, records are securely deleted. You own your report entirely.' ],
  ],
];
?>

<main class="main-content">

  <!-- Hero -->
  <div class="page-hero">
    <div class="page-hero__inner container">
      <div class="section-eyebrow" style="justify-content:center;">FAQs</div>
      <h1 class="page-hero__title display-2">Frequently Asked Questions</h1>
      <p class="page-hero__desc">Everything you need to know before reaching out. If your question isn't here, contact us directly — no question is too sensitive.</p>
    </div>
  </div>

  <section class="section">
    <div class="container">
      <div class="faq-layout">

        <!-- FAQ groups -->
        <div class="faq-main">
          <?php foreach ( $faq_groups as $group => $items ) : ?>
            <div class="faq-group fade-up" id="<?php echo esc_attr( sanitize_title( $group ) ); ?>">
              <h2 class="faq-group__title"><?php echo esc_html( $group ); ?></h2>
              <div class="faq-accordion">
                <?php foreach ( $items as $i => $item ) :
                  $id = 'faq-' . sanitize_title( $group ) . '-' . $i;
                ?>
                  <div class="faq-item">
                    <button class="faq-item__question" aria-expanded="false" aria-controls="<?php echo esc_attr( $id ); ?>">
                      <?php echo esc_html( $item[0] ); ?>
                      <span class="faq-item__icon" aria-hidden="true">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6,9 12,15 18,9"/></svg>
                      </span>
                    </button>
                    <div class="faq-item__answer" id="<?php echo esc_attr( $id ); ?>" hidden>
                      <p><?php echo esc_html( $item[1] ); ?></p>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Sidebar -->
        <aside class="faq-sidebar">
          <div class="faq-sidebar__card fade-up">
            <h3 class="faq-sidebar__title">Still have questions?</h3>
            <p class="faq-sidebar__desc">No question is too sensitive. Reach out — everything you share is confidential.</p>
            <div style="display:flex; flex-direction:column; gap:var(--sp-2);">
              <a href="<?php echo esc_url( cf_whatsapp_link( 'Hello, I have a question about your services.' ) ); ?>"
                 class="btn btn-whatsapp btn-full" target="_blank" rel="noopener">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                Ask on WhatsApp
              </a>
              <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline-dark btn-full">
                Contact Us
              </a>
            </div>
          </div>

          <div class="faq-sidebar__card faq-sidebar__card--cta fade-up fade-up--delay-2">
            <div class="section-eyebrow" style="margin-bottom:var(--sp-2);">Ready to proceed?</div>
            <h3 style="font-family:var(--font-heading); font-size:1.375rem; color:var(--cf-white); margin-bottom:var(--sp-2);">Start a Confidential Inquiry</h3>
            <p style="font-size:0.875rem; color:rgba(232,232,244,0.6); margin-bottom:var(--sp-3); line-height:1.65;">No names, no commitment. Just your situation — and we'll take it from there.</p>
            <a href="<?php echo esc_url( home_url( '/request-investigation' ) ); ?>" class="btn btn-primary btn-full">
              Start Now
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>

          <!-- Quick nav -->
          <div class="faq-sidebar__card fade-up fade-up--delay-3">
            <h4 class="faq-sidebar__nav-title">Jump to section</h4>
            <ul class="faq-sidebar__nav">
              <?php foreach ( array_keys( $faq_groups ) as $group ) : ?>
                <li>
                  <a href="#<?php echo esc_attr( sanitize_title( $group ) ); ?>">
                    <?php echo esc_html( $group ); ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>

        </aside>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
