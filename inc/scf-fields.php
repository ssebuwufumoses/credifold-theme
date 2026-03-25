<?php
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'acf_add_local_field_group' ) ) return;

// ── HOME PAGE FIELDS ─────────────────────────────────────────────────────────
acf_add_local_field_group( [
    'key'      => 'group_home_hero',
    'title'    => 'Home — Hero Section',
    'fields'   => [
        [ 'key' => 'field_hero_headline',    'label' => 'Headline',           'name' => 'hero_headline',    'type' => 'text',     'default_value' => 'Uncover the Truth. Protect What Matters.' ],
        [ 'key' => 'field_hero_subheadline', 'label' => 'Sub-headline',       'name' => 'hero_subheadline', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Confidential private investigations across Uganda and beyond. Discreet. Professional. Results-driven.' ],
        [ 'key' => 'field_hero_cta_primary', 'label' => 'Primary CTA Text',   'name' => 'hero_cta_primary', 'type' => 'text',     'default_value' => 'Start an Investigation' ],
        [ 'key' => 'field_hero_cta_secondary','label'=> 'Secondary CTA Text', 'name' => 'hero_cta_secondary','type'=> 'text',     'default_value' => 'Explore Services' ],
    ],
    'location' => [ [ [ 'param' => 'page_type', 'operator' => '==', 'value' => 'front_page' ] ] ],
] );

acf_add_local_field_group( [
    'key'      => 'group_home_trust',
    'title'    => 'Home — Trust Bar Statistics',
    'fields'   => [
        [ 'key' => 'field_stat1_num',   'label' => 'Stat 1 Number', 'name' => 'stat1_number', 'type' => 'text', 'default_value' => '500+' ],
        [ 'key' => 'field_stat1_label', 'label' => 'Stat 1 Label',  'name' => 'stat1_label',  'type' => 'text', 'default_value' => 'Cases Handled' ],
        [ 'key' => 'field_stat2_num',   'label' => 'Stat 2 Number', 'name' => 'stat2_number', 'type' => 'text', 'default_value' => '100%' ],
        [ 'key' => 'field_stat2_label', 'label' => 'Stat 2 Label',  'name' => 'stat2_label',  'type' => 'text', 'default_value' => 'Confidential' ],
        [ 'key' => 'field_stat3_num',   'label' => 'Stat 3 Number', 'name' => 'stat3_number', 'type' => 'text', 'default_value' => '12+' ],
        [ 'key' => 'field_stat3_label', 'label' => 'Stat 3 Label',  'name' => 'stat3_label',  'type' => 'text', 'default_value' => 'Service Types' ],
        [ 'key' => 'field_stat4_num',   'label' => 'Stat 4 Number', 'name' => 'stat4_number', 'type' => 'text', 'default_value' => '24hrs' ],
        [ 'key' => 'field_stat4_label', 'label' => 'Stat 4 Label',  'name' => 'stat4_label',  'type' => 'text', 'default_value' => 'Response Time' ],
    ],
    'location' => [ [ [ 'param' => 'page_type', 'operator' => '==', 'value' => 'front_page' ] ] ],
] );

// ── SERVICE FIELDS ────────────────────────────────────────────────────────────
acf_add_local_field_group( [
    'key'    => 'group_service_fields',
    'title'  => 'Service Details',
    'fields' => [
        [ 'key' => 'field_svc_tagline',       'label' => 'Tagline',             'name' => 'service_tagline',       'type' => 'text' ],
        [ 'key' => 'field_svc_icon',          'label' => 'Service Icon (SVG/PNG)','name'=> 'service_icon',          'type' => 'image', 'return_format' => 'url' ],
        [ 'key' => 'field_svc_who_needs',     'label' => 'Who Needs This',      'name' => 'service_who_needs',     'type' => 'wysiwyg', 'toolbar' => 'basic' ],
        [ 'key' => 'field_svc_what_we_do',    'label' => 'What We Investigate', 'name' => 'service_what_we_do',
          'type' => 'repeater', 'button_label' => 'Add Item', 'sub_fields' => [
              [ 'key' => 'field_svc_item', 'label' => 'Item', 'name' => 'item', 'type' => 'text' ],
          ],
        ],
        [ 'key' => 'field_svc_process',       'label' => 'Process Steps',       'name' => 'service_process',
          'type' => 'repeater', 'button_label' => 'Add Step', 'sub_fields' => [
              [ 'key' => 'field_svc_step_title', 'label' => 'Step Title',       'name' => 'step_title',       'type' => 'text' ],
              [ 'key' => 'field_svc_step_desc',  'label' => 'Step Description', 'name' => 'step_description', 'type' => 'textarea' ],
          ],
        ],
        [ 'key' => 'field_svc_price_from',    'label' => 'Starting Price',      'name' => 'service_price_from',    'type' => 'text', 'placeholder' => 'e.g. From UGX 500,000' ],
        [ 'key' => 'field_svc_turnaround',    'label' => 'Turnaround Time',     'name' => 'service_turnaround',    'type' => 'text', 'placeholder' => 'e.g. 3–7 business days' ],
        [ 'key' => 'field_svc_featured',      'label' => 'Feature on Homepage', 'name' => 'service_featured',     'type' => 'true_false', 'default_value' => 0 ],
        [ 'key' => 'field_svc_display_order', 'label' => 'Display Order',       'name' => 'service_order',        'type' => 'number', 'default_value' => 10 ],
    ],
    'location' => [ [ [ 'param' => 'post_type', 'operator' => '==', 'value' => 'cf_service' ] ] ],
] );

// ── CASE STUDY FIELDS ─────────────────────────────────────────────────────────
acf_add_local_field_group( [
    'key'    => 'group_case_fields',
    'title'  => 'Case Study Details',
    'fields' => [
        [ 'key' => 'field_case_location',   'label' => 'Client Location',   'name' => 'case_location',   'type' => 'text', 'placeholder' => 'e.g. UK-based client' ],
        [ 'key' => 'field_case_service',    'label' => 'Service Type',      'name' => 'case_service',    'type' => 'post_object', 'post_type' => 'cf_service', 'return_format' => 'id' ],
        [ 'key' => 'field_case_outcome',    'label' => 'Outcome Summary',   'name' => 'case_outcome',    'type' => 'textarea', 'rows' => 4 ],
        [ 'key' => 'field_case_duration',   'label' => 'Investigation Duration', 'name' => 'case_duration', 'type' => 'text', 'placeholder' => 'e.g. 14 days' ],
        [ 'key' => 'field_case_featured',   'label' => 'Feature on Homepage','name' => 'case_featured',  'type' => 'true_false', 'default_value' => 0 ],
    ],
    'location' => [ [ [ 'param' => 'post_type', 'operator' => '==', 'value' => 'cf_case' ] ] ],
] );

// ── TESTIMONIAL FIELDS ────────────────────────────────────────────────────────
acf_add_local_field_group( [
    'key'    => 'group_testimonial_fields',
    'title'  => 'Testimonial Details',
    'fields' => [
        [ 'key' => 'field_testi_quote',      'label' => 'Quote',           'name' => 'testi_quote',      'type' => 'textarea', 'rows' => 5 ],
        [ 'key' => 'field_testi_client',     'label' => 'Client Label',    'name' => 'testi_client',     'type' => 'text', 'placeholder' => 'e.g. Property Investor, UK' ],
        [ 'key' => 'field_testi_service',    'label' => 'Service Used',    'name' => 'testi_service',    'type' => 'post_object', 'post_type' => 'cf_service', 'return_format' => 'title' ],
        [ 'key' => 'field_testi_rating',     'label' => 'Rating (1-5)',    'name' => 'testi_rating',     'type' => 'number', 'min' => 1, 'max' => 5, 'default_value' => 5 ],
    ],
    'location' => [ [ [ 'param' => 'post_type', 'operator' => '==', 'value' => 'cf_testimonial' ] ] ],
] );

// ── FAQ FIELDS ────────────────────────────────────────────────────────────────
acf_add_local_field_group( [
    'key'    => 'group_faq_fields',
    'title'  => 'FAQ Details',
    'fields' => [
        [ 'key' => 'field_faq_answer',    'label' => 'Answer',   'name' => 'faq_answer',   'type' => 'wysiwyg' ],
        [ 'key' => 'field_faq_category',  'label' => 'Category', 'name' => 'faq_category', 'type' => 'select',
          'choices' => [ 'general' => 'General', 'services' => 'Services', 'process' => 'Process', 'confidentiality' => 'Confidentiality', 'pricing' => 'Pricing' ],
          'default_value' => 'general',
        ],
    ],
    'location' => [ [ [ 'param' => 'post_type', 'operator' => '==', 'value' => 'cf_faq' ] ] ],
] );
