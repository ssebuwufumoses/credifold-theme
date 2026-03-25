<?php
/**
 * Template Name: Contact
 */
get_header();
?>

<main class="main-content">

  <!-- Hero -->
  <div class="page-hero">
    <div class="page-hero__inner container">
      <div class="section-eyebrow" style="justify-content:center;">Get in Touch</div>
      <h1 class="page-hero__title display-2">Contact CrediFold</h1>
      <p class="page-hero__desc">Reach us through any of the channels below. All communications are strictly confidential — no information is logged or shared.</p>
    </div>
  </div>

  <section class="section">
    <div class="container">
      <div class="contact-layout">

        <!-- Left: contact channels -->
        <div class="contact-channels">

          <div class="contact-channel-card fade-up">
            <div class="contact-channel-card__icon contact-channel-card__icon--whatsapp">
              <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            </div>
            <div class="contact-channel-card__body">
              <h2 class="contact-channel-card__title">WhatsApp</h2>
              <p class="contact-channel-card__desc">Fastest response. Send a message anytime — we typically reply within a few hours. No commitment required to make first contact.</p>
              <a href="<?php echo esc_url( cf_whatsapp_link( 'Hello, I would like to discuss a confidential matter with CrediFold.' ) ); ?>"
                 class="btn btn-whatsapp" target="_blank" rel="noopener">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                Message on WhatsApp
              </a>
              <p class="contact-channel-card__number"><?php echo esc_html( cf_whatsapp() ); ?></p>
            </div>
          </div>

          <div class="contact-channel-card fade-up fade-up--delay-2">
            <div class="contact-channel-card__icon contact-channel-card__icon--email">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </div>
            <div class="contact-channel-card__body">
              <h2 class="contact-channel-card__title">Email</h2>
              <p class="contact-channel-card__desc">For detailed inquiries or when you prefer written communication. We respond to all emails within 24 hours.</p>
              <a href="mailto:<?php echo esc_attr( cf_email() ); ?>" class="btn btn-navy">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Send an Email
              </a>
              <p class="contact-channel-card__number"><?php echo esc_html( cf_email() ); ?></p>
            </div>
          </div>

          <div class="contact-channel-card fade-up fade-up--delay-3">
            <div class="contact-channel-card__icon contact-channel-card__icon--form">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <div class="contact-channel-card__body">
              <h2 class="contact-channel-card__title">Secure Inquiry Form</h2>
              <p class="contact-channel-card__desc">Prefer not to identify yourself yet? Our encrypted form lets you describe your situation without revealing your name — until you're ready.</p>
              <a href="<?php echo esc_url( home_url( '/request-investigation' ) ); ?>" class="btn btn-primary">
                Start Secure Inquiry
              </a>
            </div>
          </div>

        </div>

        <!-- Right: FAQ + privacy note -->
        <aside class="contact-aside fade-up fade-up--delay-2">

          <div class="contact-aside__card">
            <h3 class="contact-aside__title">Common Questions</h3>
            <div class="contact-faq">
              <?php
              $faqs = [
                [ 'Do I have to give my real name?',         'No. You can make first contact completely anonymously. We only ask for identifying details when you decide to proceed with an engagement.' ],
                [ 'How quickly will you respond?',           'WhatsApp messages are usually answered within a few hours. Email and form submissions receive a response within 24 hours, always.' ],
                [ 'Is my message really confidential?',      'Yes. All communications are subject to our confidentiality policy. Nothing you share is disclosed to any third party under any circumstances.' ],
                [ 'Can I contact you from outside Uganda?',  'Absolutely. We work with clients in the UK, US, UAE, Canada, and beyond. WhatsApp and email work from anywhere in the world.' ],
                [ 'What happens after I make contact?',      'We have a brief initial conversation to understand your situation. There is no obligation and no fee at this stage — just a confidential discussion.' ],
              ];
              ?>
              <?php foreach ( $faqs as $i => $faq ) : ?>
                <div class="contact-faq__item">
                  <button class="contact-faq__question" aria-expanded="false" aria-controls="cfaq-<?php echo $i; ?>">
                    <?php echo esc_html( $faq[0] ); ?>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="6,9 12,15 18,9"/></svg>
                  </button>
                  <div class="contact-faq__answer" id="cfaq-<?php echo $i; ?>" hidden>
                    <p><?php echo esc_html( $faq[1] ); ?></p>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="contact-aside__card contact-aside__card--privacy">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--cf-gold)" stroke-width="1.5" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
            <h4>Privacy Guarantee</h4>
            <p>No call logs. No email records stored beyond necessity. No third-party sharing. Every communication with CrediFold is protected under our confidentiality policy.</p>
          </div>

        </aside>

      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
