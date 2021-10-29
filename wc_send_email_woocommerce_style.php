<?php

// MJ Funktion zum Mail senden in WooCommerce Style!

// @email	 - E-Mail Adresse des Empängers
// @subject  - Betreff der E-Mail
// @heading  - Überschrift innerhalb des WooCommece Template
// @message  - Body Inhalt (kann auch HTML sein)
// --------------------------------------------------------------------------------------

function fox_send_email_woocommerce_style( $email, $subject, $heading, $message ) {

  $mailer   = WC()->mailer();
  $wc_email = new WC_Email;

  $html_message = $wc_email->style_inline( $mailer->wrap_message( $heading, $message ) );

  $headers = array(
    'Content-Type: text/html; charset=UTF-8',
    'From: ' . get_option('admin_email'),
  );
  $headers = implode( PHP_EOL, $headers );

  wp_mail( $email, $subject, $html_message, $headers );
}

?>
