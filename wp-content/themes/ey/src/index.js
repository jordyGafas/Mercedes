/*-----------------------------------------
  IMPORT CSS
  -----------------------------------------*/

  import css from './css/app.css';

/*-----------------------------------------
  IMPORT JS
  -----------------------------------------*/

  import browserClasses from './js/utils/bowser';
  import lazyLoad from './js/utils/lazy';
  import { barbaInit } from './js/barba';

/*-----------------------------------------
  INIT
  -----------------------------------------*/

  const panda = {
  	init: function() {
  		browserClasses();
  		lazyLoad();
  		barbaInit();
  	}
  };
  panda.init();