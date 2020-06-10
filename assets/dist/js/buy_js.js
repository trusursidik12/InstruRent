/**
 * Created by Webdevia on 2/28/2018.
 */
jQuery(document).ready(function ($) {
  "use strict";

  var panel_html = buy_custom_html.panel_buy_custom_html;
  var display_panel = buy_custom_html.show_panel;
  var open = 0;

  if (display_panel == 'yes'){
    $('body').append(panel_html);
  }

  $('.buy_panel .toggle').on("click", function () {
    if(open % 2) {
      $('.buy_panel .section-description').slideDown(500);
      $('.buy_panel .toggle').addClass('section-down');
      $('.buy_panel').addClass('open');
    } else {
      $('.buy_panel .section-description').slideUp(500);
      $('.buy_panel .toggle').removeClass('section-down');
      $('.buy_panel').removeClass('open');
    }
    open++;

    if (  $('.buy_panel').hasClass('open') ) {
      localStorage.setItem('buy-panel', 'open');
    } else {
      localStorage.setItem('buy-panel', 'closed');
    }
  });

  if ( localStorage.getItem('buy-panel') === 'open' ) {
    $('.buy_panel .section-description').slideDown(500);
    $('.buy_panel .toggle').addClass('section-down');
    $('.buy_panel').addClass('open');
  }else {
    $('.buy_panel .section-description').slideUp(500);
    $('.buy_panel .toggle').removeClass('section-down');
    $('.buy_panel').removeClass('open');
  }


});