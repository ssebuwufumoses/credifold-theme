<?php
/**
 * Template Name: How It Works
 */
get_header();
?>

<main class="main-content">

  <!-- Hero -->
  <div class="page-hero">
    <div class="page-hero__inner container">
      <div class="section-eyebrow" style="justify-content:center;">The Process</div>
      <h1 class="page-hero__title display-2">How CrediFold Works</h1>
      <p class="page-hero__desc">From your first message to your final report — a structured, confidential process designed around your safety, privacy, and results.</p>
    </div>
  </div>

  <!-- Process steps — full detail -->
  <section class="section">
    <div class="container">

      <div class="hiw-intro fade-up">
        <p>Every investigation follows the same five-stage process. Each stage is designed with one goal: to give you the truth, safely and completely. Here is exactly what happens when you work with CrediFold.</p>
      </div>

      <div class="hiw-steps">

        <?php
        $steps = [
          [
            'num'     => '01',
            'title'   => 'Secure Inquiry',
            'summary' => 'You reach out — anonymously if you prefer.',
            'body'    => 'Contact us via our encrypted inquiry form, WhatsApp, or email. You do not need to provide your real name at this stage. Simply describe your situation in as much or as little detail as you are comfortable sharing. There is no fee and no obligation at this point.',
            'note'    => 'Your identity is protected from the first message.',
            'icon'    => '<rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/>',
            'details' => [
              'Use any channel — WhatsApp, email, or the secure form',
              'No real name required until you choose to proceed',
              'All communications are encrypted and confidential',
              'We respond within 24 hours, usually much sooner',
            ],
          ],
          [
            'num'     => '02',
            'title'   => 'Confidential Consultation',
            'summary' => 'We discuss your case in full — privately and without obligation.',
            'body'    => 'Once we receive your inquiry, we schedule a private consultation. This can be done via WhatsApp, phone, or email — whichever you prefer. During this conversation, we listen to your full situation, ask clarifying questions, and give you an honest assessment of what investigation is possible and what it would involve.',
            'note'    => 'No names, no records — until you sign an engagement agreement.',
            'icon'    => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/>',
            'details' => [
              'Conducted via your preferred channel',
              'Completely confidential — subject to our privacy policy',
              'We give you an honest assessment, including if we cannot help',
              'No fee for the consultation',
            ],
          ],
          [
            'num'     => '03',
            'title'   => 'Engagement & Proposal',
            'summary' => 'We present a clear scope, timeline, and fee — you decide.',
            'body'    => 'Based on our consultation, we prepare a written engagement proposal. This sets out exactly what we will investigate, how we will do it, the expected timeline, and the total fee. Nothing is vague. You review and approve the proposal before any work begins. A confidentiality agreement is signed at this stage.',
            'note'    => 'You approve everything before we begin. No hidden fees.',
            'icon'    => '<path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14,2 14,8 20,8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/>',
            'details' => [
              'Written proposal with clear scope and deliverables',
              'Fixed fee agreed upfront — no surprises',
              'Signed confidentiality agreement before work begins',
              'You can decline at this stage with no obligation',
            ],
          ],
          [
            'num'     => '04',
            'title'   => 'Active Investigation',
            'summary' => 'Our operatives work on the ground — and keep you informed.',
            'body'    => 'With your approval confirmed, our field investigators begin work. Depending on the case, this may involve physical surveillance, records searches, document verification, interviews, or digital analysis. You receive structured progress updates throughout — never left wondering what is happening.',
            'note'    => 'All evidence gathered is lawful and court-admissible.',
            'icon'    => '<circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>',
            'details' => [
              'Field investigation, surveillance, and records analysis',
              'Regular progress updates throughout the case',
              'All methods are legal and ethical',
              'Evidence is preserved in documented, court-ready format',
            ],
          ],
          [
            'num'     => '05',
            'title'   => 'Detailed Report & Debrief',
            'summary' => 'You receive everything — documented, evidenced, and clearly explained.',
            'body'    => 'At the conclusion of the investigation, we deliver a comprehensive written report. This includes all findings, supporting evidence (photographs, documents, records), and a clear summary of what was discovered. We walk you through the report in a debrief call and advise on any next steps — legal or otherwise.',
            'note'    => 'Your report is delivered securely. All copies are yours.',
            'icon'    => '<path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/>',
            'details' => [
              'Full written report with supporting evidence',
              'Photographs, documents, and records included',
              'Debrief call to explain findings and advise on next steps',
              'Report delivered securely — encrypted transfer or in person',
            ],
          ],
        ];
        ?>

        <?php foreach ( $steps as $i => $step ) : ?>
          <div class="hiw-step fade-up">
            <div class="hiw-step__left">
              <div class="hiw-step__num"><?php echo esc_html( $step['num'] ); ?></div>
              <?php if ( $i < count( $steps ) - 1 ) : ?>
                <div class="hiw-step__line" aria-hidden="true"></div>
              <?php endif; ?>
            </div>
            <div class="hiw-step__right">
              <div class="hiw-step__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                  <?php echo $step['icon']; // phpcs:ignore ?>
                </svg>
              </div>
              <h2 class="hiw-step__title"><?php echo esc_html( $step['title'] ); ?></h2>
              <p class="hiw-step__summary"><?php echo esc_html( $step['summary'] ); ?></p>
              <p class="hiw-step__body"><?php echo esc_html( $step['body'] ); ?></p>
              <ul class="hiw-step__details">
                <?php foreach ( $step['details'] as $d ) : ?>
                  <li>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20,6 9,17 4,12"/></svg>
                    <?php echo esc_html( $d ); ?>
                  </li>
                <?php endforeach; ?>
              </ul>
              <div class="hiw-step__note">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/></svg>
                <?php echo esc_html( $step['note'] ); ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>

  <!-- What to expect section -->
  <section class="section section--light">
    <div class="container">
      <div class="section-header--center fade-up">
        <div class="section-eyebrow">What to Expect</div>
        <h2 class="section-title h2">Honest Answers to Honest Questions</h2>
        <p class="section-desc">Before you reach out, here is what every CrediFold client should know.</p>
      </div>
      <div class="hiw-expectations">
        <?php
        $expectations = [
          [
            'q' => 'How long does an investigation take?',
            'a' => 'It depends entirely on the case. A background check may take 3–5 business days. A land title investigation may take 1–2 weeks. Surveillance cases vary. We always give you a realistic timeline in the proposal — and we stick to it.',
          ],
          [
            'q' => 'How much does it cost?',
            'a' => 'Fees vary by case type, scope, and location. We provide a fixed fee in writing before any work begins. There are no hourly charges or hidden costs. The fee you agree is the fee you pay.',
          ],
          [
            'q' => 'Can you guarantee results?',
            'a' => 'We cannot guarantee a specific outcome — no honest investigator can. What we guarantee is thoroughness, professionalism, and a complete report of everything we find. If there is nothing to find, we will tell you that too.',
          ],
          [
            'q' => 'Is what you do legal?',
            'a' => 'Yes. All investigation methods used by CrediFold are lawful. Evidence is gathered through legal means — ensuring it is admissible in court if required. We do not engage in illegal surveillance, hacking, or any activity that violates Ugandan or international law.',
          ],
          [
            'q' => 'What if I need to stop the investigation?',
            'a' => 'You can pause or stop your investigation at any time. We will provide a report of findings to date and release you from the engagement. Fees for completed work are retained; fees for work not yet started are refunded.',
          ],
        ];
        ?>
        <div class="hiw-expectations__grid">
          <?php foreach ( $expectations as $i => $e ) : ?>
            <div class="hiw-expectation fade-up fade-up--delay-<?php echo min( $i + 1, 5 ); ?>">
              <h3 class="hiw-expectation__q"><?php echo esc_html( $e['q'] ); ?></h3>
              <p  class="hiw-expectation__a"><?php echo esc_html( $e['a'] ); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section section--dark" style="text-align:center; border-top:1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width:600px;">
      <div class="section-eyebrow" style="justify-content:center;">Ready to Begin?</div>
      <h2 class="h2" style="color:var(--cf-white); margin-bottom:var(--sp-2);">Step One Is Free. Step One Is Anonymous.</h2>
      <p style="color:rgba(232,232,244,0.6); margin-bottom:var(--sp-5); line-height:1.75;">Submit an inquiry with no name and no commitment. We will respond within 24 hours and take it from there — at your pace.</p>
      <div style="display:flex; gap:var(--sp-2); justify-content:center; flex-wrap:wrap;">
        <a href="<?php echo esc_url( home_url( '/request-investigation' ) ); ?>" class="btn btn-primary btn-lg">
          Start Your Inquiry
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="<?php echo esc_url( cf_whatsapp_link( 'Hello, I\'d like to understand the investigation process before starting.' ) ); ?>"
           class="btn btn-outline" target="_blank" rel="noopener">
          Ask a Question First
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
