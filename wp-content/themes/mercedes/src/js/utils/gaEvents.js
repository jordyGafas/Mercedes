import '@babel/polyfill';
import 'nodelist-foreach-polyfill';

export const gaEvents = () => {
  // EVENT TRACKING

  const slidesToggle = document.querySelectorAll('.slide-open-toggle');
  const sliderArrow = document.querySelectorAll('.slider-arrow');
  const youtube = document.querySelectorAll('.embed-container');
  const SocialMedia = document.querySelectorAll('.social-links a');
  //data-tracking-value
  if ( slidesToggle !== null ) {
  
    slidesToggle.forEach((trackLinkedIn, index) => {
      trackLinkedIn.addEventListener('click', function() {
      //console.log("quotes", trackLinkedIn);
        gtag('event', 'click', {
          'event_category': 'Futur_Mobility_Slides_Toggle',
          'event_label': this.dataset.trackingValue,
          'transport_type': 'beacon'
        });
        //ga('send', 'event', 'Slides Toggle', 'click', this.dataset.trackingValue);
      });
    });
  
  }
  
  if ( sliderArrow !== null ) {
      //console.log("ld", linkedinProfiles);
  
      sliderArrow.forEach((trackEmail, index) => {
      //console.log("ld", 'fire');
  
      trackEmail.addEventListener('click', function() {
        gtag('event', 'click', {
          'event_category': 'Futur_Mobility_Sliders',
          'event_label': this.dataset.trackingValue,
          'transport_type': 'beacon'
        });
      });
    });
  
  }
  
  if ( youtube !== null ) {
      //console.log("ld", socialShare);
      youtube.forEach((trackTelephone, index) => {
      trackTelephone.addEventListener('click', function() {
        gtag('event', 'click', {
          'event_category': 'Futur_Mobility_youtube',
          'event_label': this.dataset.trackingValue,
          'transport_type': 'beacon'
        });
      });
    });
  
  }

  if ( SocialMedia !== null ) {
    //console.log("ld", socialShare);
    SocialMedia.forEach((trackTelephone, index) => {
    trackTelephone.addEventListener('click', function() {
      gtag('event', 'click', {
        'event_category': 'Futur_Mobility_Social_media',
        'event_label': this.dataset.trackingValue,
        'transport_type': 'beacon'
      });
    });
  });

}
}