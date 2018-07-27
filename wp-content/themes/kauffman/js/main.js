jQuery(window).bind("load", function() {
  if (jQuery('#i_menu').is(":visible")) {
    jQuery('#i_menu').click(function () {
      if (jQuery(".sf-menu").is(":hidden")) {
        //jQuery(".fixed_active.before_fixed_header").css("height","initial");
        jQuery(".sf-menu").css('display', 'block');
      } else {
        //jQuery(".fixed_active.before_fixed_header").css("height","100px");
        jQuery(".sf-menu").css('display', 'none');
      }
    });

    jQuery("html").click(function (event) {
      if (event.target.id != "i_menu") {
        if (!jQuery(".sf-menu").is(":hidden")) {
          jQuery(".sf-menu").css('display', 'none');
        }
      }
    });
  }

  //-------------

  jQuery("div.js_question").click(function () {
    var this_ = jQuery(this);
    var el = this_.next(".js_q_ansver");
    var min_plus = this_.children(".js_min_plus");

    if (el.is(":hidden")) {
      el.css('display', 'block');
      min_plus.html('-');
    }else{
      el.css('display', 'none');
      min_plus.html('+');
    }
  });


  //-------------
  // var elm = document.querySelector('#menu_spy');
  //
  // if (elm) {
  //   var lavalampElm = document.querySelector('.js_lavalamp');
  //
  //   function positionLavalamp(activeElm) {
  //     if (activeElm['elm']!==null) {
  //       lavalampElm.style.width = activeElm.elm.offsetWidth + 'px';
  //       lavalampElm.style.left = activeElm.elm.offsetLeft + 'px';
  //     }
  //   }
  //
  //   var ms = new MenuSpy(elm, {
  //     callback: positionLavalamp,
  //     //hashTimeout: 2000
  //     //threshold: -1000
  //   });
  //
  //   positionLavalamp({elm: elm.querySelector('li.active')});
  // }

  jQuery('#js_fixed_menu').MenuAnchor();

  jQuery('#js_fixed_menu li').click(function(){
    this_string = jQuery(this).attr('id')+'-content';
    changeHashWithoutScrolling(this_string);
  });

  function changeHashWithoutScrolling(hash) {
    var id, elem;

    id = hash.replace(/^.*#/, '');

    if (id) {
      elem = document.getElementById(id);

      if (elem) {
        elem.id = id + '-tmp';
        window.location.hash = hash;
        elem.id = id;
      }
    }
  }
  //-------------

  jQuery('.tabgroup > div').hide();
  jQuery('.tabgroup > div:first-of-type').show();
  jQuery('.tabs a').click(function(e){
    e.preventDefault();
    var $this = jQuery(this),
    tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
    others = $this.closest('li').siblings().children('a'),
    target = $this.attr('href');
    others.removeClass('active');
    $this.addClass('active');
    jQuery(tabgroup).children('div').hide();
    jQuery(target).show();

    jQuery(".js_mainland_mobile").html($this.html());

    if (!jQuery('.js_mainland_mobile').is(":hidden")){
      if (!jQuery('.mainland__ul').is(":hidden")) {
        jQuery('.mainland__ul').hide();
      }
    }
  });

  //-------------

  jQuery('.js_float_right').parent().addClass("team__right_block1");

  //-----------------------------------------------------------------------
  var js_data_view = parseInt(jQuery('.js_data_view').attr('data-view'));

  jQuery('.js_post_item_display').each(function(i,el) {
    var this_ = jQuery(this);
    if (this_.attr('data-post')>js_data_view){
      this_.css('display','none');
    }
    //.attr('data-post') == '0' ) {
    //if ();
    //  jQuery(this).css("display","none");
  });

  var data_post = parseInt(js_data_view);
  var data_count = jQuery('.js_post_btn_more').attr('data-count');

  jQuery('.js_post_btn_more').click(function(){
    data_post += 1;
    data_count -= 1;

    if (data_count <= js_data_view){
      jQuery('.js_post_btn_more').css('display','none');
    }

    jQuery('.js_post_item_display').each(function(i,el) {
      var this_ = jQuery(this);
      if (this_.attr('data-post') == data_post){
        this_.css('display','block');
      }
    });
  });

  //===============================

  jQuery('.in_an_box_item').each(function(i,el) {
    var this_ = jQuery(this);
    if (this_.attr('data-tab') == 1){
      this_.css('display','block');
    }else{
      this_.css('display','none');
    }
  });

  jQuery('.in_an_menu li').click(function(){
    jQuery('.in_an_menu li').removeClass('active');
    jQuery(this).addClass('active');

    var active = jQuery(this).attr('data-tab');

    jQuery('.in_an_box_item').each(function(i,el) {
      var this_ = jQuery(this);
      if (this_.attr('data-tab') == active){
        this_.css('display','block');
      }else{
        this_.css('display','none');
      }
    });

  });

  //=========================
  AOS.init({
    //delay: 5000,
    //easing: 'ease-in-sine',
    offset: 160,
    duration: 1000,
    once: true
  });

  //=========================

  mobile_size_1000 = window.matchMedia( "(max-width: 1000px)" ).matches;

    var c, currentScrollTop = 0,
    navbar = jQuery('.before_fixed_header');
    navbar_height = navbar.height()+"px";
    //instead_menu = jQuery('.instead_menu');

    jQuery(window).scroll(function () {

      var a = jQuery(window).scrollTop();
      var b = navbar.height();

      currentScrollTop = a;
      //console.log(a);

      if (a>=100) {
        if (c < currentScrollTop && a > b + b) {
          if (!mobile_size_1000) {
            document.getElementById('js_menu_manipulation').style.height = '0';
          }
          //navbar.removeClass("fixed_active");
          //jQuery("div.js_menu_manipulation").css("height","0");
          //console.log('1');
          //instead_menu.css('display','none');
        } else if (c > currentScrollTop && !(a <= b)) {
          if (!mobile_size_1000) {
            document.getElementById('js_menu_manipulation').style.height = '100px';
          }
          //jQuery(".fixed_active.before_fixed_header").css("height","100px");
          navbar.addClass("fixed_active");
          //console.log('2');
          //jQuery("div.js_menu_manipulation").css("height","initial");
          //instead_menu.css('display','block');
        }
        c = currentScrollTop;
      }else{
        //jQuery(".fixed_active.before_fixed_header").css("height","initial");
        //document.getElementById('js_menu_manipulation').style.height='0';
        navbar.removeClass("fixed_active");
        if (!mobile_size_1000) {
          jQuery("div.js_menu_manipulation").css("height", "160px");
        }
        //navbar.animate({height: "0"});
        //instead_menu.css('display','none');
      }
    });

  //==========================

  jQuery(".js_read_more_block").css("display","none");

  jQuery(".js_read_more_btn").click(function(){
    jQuery(this).css("display","none");
    jQuery(this).parent().next(".js_read_more_block").show("slow");
  });

  //==========================
  jQuery('.count').each(function () {
    this_ = jQuery(this);

    var hT = this_.offset().top,
    hH = this_.outerHeight(),
    wH = jQuery(window).height(),
    wS = jQuery(window).scrollTop();
    //console.log((hT - wH), wS);
    if (wS > (hT + hH - wH)) {
        count(this_);
        this_.removeClass('count');
    }

  });


  jQuery(window).scroll(function() {

    jQuery('.count').each(function () {
      this_ = jQuery(this);

      var hT = this_.offset().top,
      hH = this_.outerHeight(),
      wH = jQuery(window).height(),
      wS = jQuery(window).scrollTop();
      //console.log((hT - wH), wS);
      if (wS > (hT + hH - wH)) {
          count(this_);
          this_.removeClass('count');
      }

    });


  });

    function count(el){


      el.prop('Counter', 0).animate({
        Counter: parseInt(el.attr('data-count-to'))
      }, {
        duration: parseInt(el.attr('data-duration')),
        easing: 'swing',
        step: function (now) {
          el.text(Math.ceil(now));
          if (el.text()==el.attr('data-count-to')){
            el.removeClass('count');
            el.text(el.attr('data-result'));
          }
        }
      });

    }

    //===========================================coma,

  function commaSeparateNumber(val){
    while (/(\d+)(\d{3})/.test(val.toString())){
      val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
    }
    return val;
  }

  function give_number(s){
    re = /\D+/ig;
    return s.replace(re, '');
  }

  //=============================================

  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 100,
    speed: 600,
    mousewheel: false,
    loop:true,
    // pagination: {
    //   el: '.swiper-pagination',
    //   clickable: true,
    //   type: 'fraction'
    // }
  });


  jQuery('.swiper_button_js').click(function(){
    swiper.slideNext(600);
  });

  //=============================================

  jQuery('.js_mainland_mobile').click(function(){
    next = jQuery(this).next();

    if (next.is(":hidden")) {
      next.show();
    }else{
      next.hide();
    }
  });

  window.onclick = function(event) {
    if(!jQuery(event.target).closest('.mainland__block').length) {  //!! )
      if (!jQuery('.js_mainland_mobile').is(":hidden")){
        if (!jQuery('.mainland__ul').is(":hidden")) {
          jQuery('.mainland__ul').hide();
        }
      }
    }
  }

  // ---------------------

  //jQuery('#html1').jstree();

  jQuery("#html1").jstree(
  {
    "plugins" : ["search"]
  }
  ).bind("select_node.jstree", function (e, data) {
    var href = data.node.a_attr.href;
    //document.location.href = href;

    if (href != "#") {
      window.open(
      href,
      '_blank'
      );
    }
  });

  jQuery('#html1').on('click', '.jstree-anchor', function (e) {
    jQuery(this).jstree(true).toggle_node(e.target);
  });

  jQuery("#form_search_tree").submit(function(e) {
    e.preventDefault();
    jQuery("#html1").jstree(true).search(jQuery("#search_tree_q").val());
  });

  /* --mobile top and buttom-- */
  mobile_size = window.matchMedia( "(max-width: 1200px)" ).matches;

  if (mobile_size) {

    jQuery('.j_mobile_margin').each(function (i, el) {
      this_ = jQuery(this);
      attr_top = this_.attr('data-m-top');
      attr_bottom = this_.attr('data-m-bottom');
      //console.log(give_number(attr_));
      if (attr_top.length > 0) {
        this_.css('margin-top', attr_top + 'px');
      }
      if (attr_bottom.length > 0) {
        this_.css('margin-bottom', attr_bottom + 'px');
      }
    });
  }

});
