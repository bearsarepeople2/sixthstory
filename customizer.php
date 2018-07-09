<?php

add_action( 'customize_register', 'cd_customizer_settings' );

function cd_customizer_settings( $wp_customize ) {

  $wp_customize->add_section( 'who_we_are' , array(
      'title'      => 'Who we are',
      'priority'   => 30,
  ) );

  $wp_customize->add_setting( 'who_we_are_title' , array(
      'default'     => 'Who we are'
  ) );

  $wp_customize->add_control( 'who_we_are_title', array(
      'type' => 'text',
      'priority' => 10, // Within the section.
      'section' => 'who_we_are.', // Required, core or custom.
      'label' => 'Title',
    ) );

  $wp_customize->add_setting( 'who_we_are_desc' , array(
      'default'     => "We are one of the UK's leading Facebook Management Agencies with various in-house departments that specialise in social media campaigns, design and outreach marketing with over 10 years experience in the industry."
  ) );

  $wp_customize->add_control( 'who_we_are_desc', array(
    'type' => 'textarea',
    'priority' => 10, // Within the section.
    'section' => 'who_we_are', // Required, core or custom.
    'label' => 'Description',
  ) );

  $wp_customize->add_setting( 'who_we_are_image' , array(
    'default' => get_template_directory_uri() . '/assets/images/whoarewe.png'
  ) );

  $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'who_we_are_image', array(
         'label'      => __( 'Image' ),
         'section'    => 'who_we_are',
         'settings'   => 'who_we_are_image',
       )
     )
   );

// ---------------------------------------------------------------------------------------------

  $wp_customize->add_section( 'contact' , array(
      'title'      => 'Contact',
      'priority'   => 30,
  ) );

  $wp_customize->add_setting( 'contact_title' , array(
      'default'     => 'Get in touch.'
  ) );

  $wp_customize->add_control( 'contact_title', array(
      'type' => 'text',
      'priority' => 10, // Within the section.
      'section' => 'contact', // Required, core or custom.
      'label' => 'Title',
    ) );

  $wp_customize->add_setting( 'contact_email' , array(
      'default'     => "loremipsum@mysocialnetwork.com"
  ) );

  $wp_customize->add_control( 'contact_email', array(
    'type' => 'text',
    'priority' => 10, // Within the section.
    'section' => 'contact', // Required, core or custom.
    'label' => 'Email address',
  ) );

  $wp_customize->add_setting( 'contact_tel' , array(
      'default'     => "0121 000 0000"
  ) );

  $wp_customize->add_control( 'contact_tel', array(
    'type' => 'text',
    'priority' => 10, // Within the section.
    'section' => 'contact', // Required, core or custom.
    'label' => 'Telephone'
  ) );

  $wp_customize->add_setting( 'contact_addr_1' , array(
      'default'     => "Lorem ipsum"
  ) );

  $wp_customize->add_control( 'contact_addr_1', array(
    'type' => 'text',
    'priority' => 10, // Within the section.
    'section' => 'contact', // Required, core or custom.
    'label' => 'Address line 1',
  ) );

  $wp_customize->add_setting( 'contact_addr_2' , array(
      'default'     => "1 Lorem ipsum"
  ) );

  $wp_customize->add_control( 'contact_addr_2', array(
    'type' => 'text',
    'priority' => 10, // Within the section.
    'section' => 'contact', // Required, core or custom.
    'label' => 'Address line 2',
  ) );

  $wp_customize->add_setting( 'contact_addr_3' , array(
      'default'     => "B1 3JR"
  ) );

  $wp_customize->add_control( 'contact_addr_3', array(
    'type' => 'text',
    'priority' => 10, // Within the section.
    'section' => 'contact', // Required, core or custom.
    'label' => 'Address line 3',
  ) );

// ---------------------------------------------------------------------------------------------

  $wp_customize->add_section( 'what_we_do' , array(
      'title'      => 'What we do',
      'priority'   => 30,
  ) );

  $wp_customize->add_setting( 'campaigns' , array(
      'default'     => "Whether you're launching a product, promoting a new range or even rebranding, we have the experience and skills to help. Depending on the campaign, we can look after every aspect including the creation of adverts, data capture, design and despoke Facebook targeting!"
  ) );

  $wp_customize->add_control( 'campaigns', array(
    'type' => 'textarea',
    'priority' => 10, // Within the section.
    'section' => 'what_we_do', // Required, core or custom.
    'label' => 'Campaigns',
  ) );

  $wp_customize->add_setting( 'design' , array(
      'default'     => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce suscipit mi sed sapien pretium, ac vehicula libero placerat. Nunc metus risus, dignissim sit amet metus nec, sodales congue risus. Aliquam pulvinar efficitur condimentum. Quisque efficitur metus quis dui vestibulum, in porttitor odio laoreet. Sed elit diam, gravida sit amet feugiat vel, accumsan in turpis. Praesent non magna ex. Nullam hendrerit dapibus fringilla."
  ) );

  $wp_customize->add_control( 'design', array(
    'type' => 'textarea',
    'priority' => 10, // Within the section.
    'section' => 'what_we_do', // Required, core or custom.
    'label' => 'Page design',
  ) );

  $wp_customize->add_setting( 'management' , array(
      'default'     => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce suscipit mi sed sapien pretium, ac vehicula libero placerat. Nunc metus risus, dignissim sit amet metus nec, sodales congue risus. Aliquam pulvinar efficitur condimentum. Quisque efficitur metus quis dui vestibulum, in porttitor odio laoreet. Sed elit diam, gravida sit amet feugiat vel, accumsan in turpis. Praesent non magna ex. Nullam hendrerit dapibus fringilla."
  ) );

  $wp_customize->add_control( 'management', array(
    'type' => 'textarea',
    'priority' => 10, // Within the section.
    'section' => 'what_we_do', // Required, core or custom.
    'label' => 'Management',
  ) );

  $wp_customize->add_setting( 'outreach' , array(
      'default'     => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce suscipit mi sed sapien pretium, ac vehicula libero placerat. Nunc metus risus, dignissim sit amet metus nec, sodales congue risus. Aliquam pulvinar efficitur condimentum. Quisque efficitur metus quis dui vestibulum, in porttitor odio laoreet. Sed elit diam, gravida sit amet feugiat vel, accumsan in turpis. Praesent non magna ex. Nullam hendrerit dapibus fringilla."
  ) );

  $wp_customize->add_control( 'outreach', array(
    'type' => 'textarea',
    'priority' => 10, // Within the section.
    'section' => 'what_we_do', // Required, core or custom.
    'label' => 'Outreach',
  ) );

  $wp_customize->add_setting( 'apps' , array(
      'default'     => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce suscipit mi sed sapien pretium, ac vehicula libero placerat. Nunc metus risus, dignissim sit amet metus nec, sodales congue risus. Aliquam pulvinar efficitur condimentum. Quisque efficitur metus quis dui vestibulum, in porttitor odio laoreet. Sed elit diam, gravida sit amet feugiat vel, accumsan in turpis. Praesent non magna ex. Nullam hendrerit dapibus fringilla."
  ) );

  $wp_customize->add_control( 'apps', array(
    'type' => 'textarea',
    'priority' => 10, // Within the section.
    'section' => 'what_we_do', // Required, core or custom.
    'label' => 'Competition apps',
  ) );

  $wp_customize->add_setting( 'networking' , array(
      'default'     => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce suscipit mi sed sapien pretium, ac vehicula libero placerat. Nunc metus risus, dignissim sit amet metus nec, sodales congue risus. Aliquam pulvinar efficitur condimentum. Quisque efficitur metus quis dui vestibulum, in porttitor odio laoreet. Sed elit diam, gravida sit amet feugiat vel, accumsan in turpis. Praesent non magna ex. Nullam hendrerit dapibus fringilla."
  ) );

  $wp_customize->add_control( 'networking', array(
    'type' => 'textarea',
    'priority' => 10, // Within the section.
    'section' => 'what_we_do', // Required, core or custom.
    'label' => 'Networking',
  ) );

}
