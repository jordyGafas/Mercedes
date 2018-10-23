<div class="subscribe-contact">
  <div class="subscribe-contact__inner row u-flex u-flex-wrap u-align--center">
    <div class="subscribe-contact__block">
      <div class="contact-block">
        <div class="contact-block__inner u-flex u-flex-wrap u-column u-align-v-center u-align-h-center">
          <h6><?php the_field('label_subscribe_title', 'option'); ?></h6>
          <p><?php the_field('label_subscribe_text', 'option'); ?></p>
          <?php the_field('footer_newsletter', 'option'); ?>
        </div>
      </div>
    </div>
    <div class="subscribe-contact__block">
      <div class="contact-block">
        <div class="contact-block__inner u-flex u-flex-wrap u-column u-align-v-center u-align-h-center">
          <div class="contact-block__meta">
            <h6><?php the_field('label_contact_title', 'option'); ?></h6>
            <p><?php the_field('label_contact_text', 'option'); ?></p>
            <a href="<?php the_field('label_contact_url', 'option'); ?>"><?php the_field('label_contact_label', 'option'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>