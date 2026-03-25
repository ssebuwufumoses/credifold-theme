<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header">
  <div class="container">

    <!-- Logo -->
    <div class="site-logo">
      <?php if ( has_custom_logo() ) :
        the_custom_logo();
      else : ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="CrediFold Home">
        <svg width="32" height="36" viewBox="0 0 32 36" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M16 0L0 6V18C0 27.4 7.2 34.4 16 36C24.8 34.4 32 27.4 32 18V6L16 0Z" fill="#C9A84C" fill-opacity="0.15" stroke="#C9A84C" stroke-width="1.5"/>
          <path d="M16 4L4 9V18C4 25.2 9.4 31.2 16 32.8C22.6 31.2 28 25.2 28 18V9L16 4Z" fill="#1A2D7C" fill-opacity="0.6"/>
        </svg>
        <span class="site-logo__text">Credi<span>Fold</span></span>
      </a>
      <?php endif; ?>
    </div>

    <!-- Primary Navigation -->
    <nav class="primary-nav" aria-label="Primary">
      <?php
      wp_nav_menu( [
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => '',
        'items_wrap'     => '%3$s',
        'walker'         => new CF_Nav_Walker(),
        'fallback_cb'    => 'credifold_fallback_nav',
      ] );
      ?>
    </nav>

    <!-- Nav CTAs -->
    <div class="nav-cta">
      <a href="<?php echo esc_url( cf_whatsapp_link( 'Hello, I need an investigation.' ) ); ?>"
         class="btn btn-outline btn-sm"
         target="_blank" rel="noopener">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        WhatsApp
      </a>
      <a href="<?php echo esc_url( home_url( '/request-investigation' ) ); ?>" class="btn btn-primary btn-sm">
        Start Investigation
      </a>
    </div>

    <!-- Hamburger -->
    <button class="hamburger" id="hamburger" aria-label="Toggle menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>

  </div>
</header>

<!-- Mobile Nav -->
<nav class="mobile-nav" id="mobile-nav" aria-label="Mobile navigation" aria-hidden="true">
  <?php
  wp_nav_menu( [
    'theme_location' => 'primary',
    'container'      => false,
    'menu_class'     => '',
    'items_wrap'     => '%3$s',
    'depth'          => 2,
    'fallback_cb'    => 'credifold_fallback_nav_mobile',
  ] );
  ?>
  <div style="margin-top: auto; padding-top: 32px; display:flex; flex-direction:column; gap:12px;">
    <a href="<?php echo esc_url( home_url( '/request-investigation' ) ); ?>" class="btn btn-primary btn-full">Start Investigation</a>
    <a href="<?php echo esc_url( cf_whatsapp_link() ); ?>" class="btn btn-whatsapp btn-full" target="_blank" rel="noopener">WhatsApp Us</a>
  </div>
</nav>

<?php
// Custom nav walker for dropdown support
class CF_Nav_Walker extends Walker_Nav_Menu {
  public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
    $has_children = in_array( 'menu-item-has-children', $item->classes );
    $classes      = $has_children ? 'has-dropdown' : '';
    $output      .= '<div class="' . esc_attr( $classes ) . '">';
    $output      .= '<a href="' . esc_url( $item->url ) . '"' . ( $item->target ? ' target="' . esc_attr( $item->target ) . '"' : '' ) . '>' . esc_html( $item->title ) . '</a>';
  }
  public function end_el( &$output, $item, $depth = 0, $args = null ) {
    $output .= '</div>';
  }
  public function start_lvl( &$output, $depth = 0, $args = null ) {
    $output .= '<div class="dropdown-menu">';
  }
  public function end_lvl( &$output, $depth = 0, $args = null ) {
    $output .= '</div>';
  }
}

function credifold_fallback_nav() {
  $services = get_posts( [ 'post_type' => 'cf_service', 'posts_per_page' => -1, 'orderby' => 'meta_value_num', 'meta_key' => 'service_order' ] );
  echo '<a href="' . esc_url( home_url( '/' ) ) . '">Home</a>';
  if ( $services ) {
    echo '<div class="has-dropdown"><a href="' . esc_url( home_url( '/services' ) ) . '">Services</a><div class="dropdown-menu">';
    foreach ( $services as $s ) {
      echo '<a href="' . esc_url( get_permalink( $s->ID ) ) . '">' . esc_html( $s->post_title ) . '</a>';
    }
    echo '</div></div>';
  }
  echo '<a href="' . esc_url( home_url( '/how-it-works' ) ) . '">How It Works</a>';
  echo '<a href="' . esc_url( home_url( '/case-studies' ) ) . '">Case Studies</a>';
  echo '<a href="' . esc_url( home_url( '/about' ) ) . '">About</a>';
  echo '<a href="' . esc_url( home_url( '/blog' ) ) . '">Blog</a>';
  echo '<a href="' . esc_url( home_url( '/contact' ) ) . '">Contact</a>';
}

function credifold_fallback_nav_mobile() {
  credifold_fallback_nav();
}
?>
