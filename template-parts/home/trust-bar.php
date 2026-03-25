<?php
$stats = [
  [ 'number' => get_field('stat1_number') ?: '500+',  'label' => get_field('stat1_label') ?: 'Cases Handled'    ],
  [ 'number' => get_field('stat2_number') ?: '100%',  'label' => get_field('stat2_label') ?: 'Confidential'     ],
  [ 'number' => get_field('stat3_number') ?: '12+',   'label' => get_field('stat3_label') ?: 'Service Types'    ],
  [ 'number' => get_field('stat4_number') ?: '24hrs', 'label' => get_field('stat4_label') ?: 'Response Time'    ],
];
?>

<div class="trust-bar" aria-label="Key statistics">
  <div class="container">
    <div class="trust-bar__grid">
      <?php foreach ( $stats as $i => $stat ) : ?>
        <div class="trust-bar__item fade-up fade-up--delay-<?php echo $i + 1; ?>">
          <span class="trust-bar__number"><?php echo esc_html( $stat['number'] ); ?></span>
          <span class="trust-bar__label"><?php echo esc_html( $stat['label'] ); ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
