$ = jQuery.noConflict()
// Referencia: http://www.html5rocks.com/en/tutorials/speed/animations/

var last_known_scroll_position = $(window).scroll
var ticking = false
localStorage.removeItem('viewNumbers')

function doSomething(scroll_pos) {
  if ($(window).scrollTop() === 0) {
    $('#masthead').removeClass('active')
    $('#logito').attr('src', 'https://hombroahombro.org.pe/wp-content/themes/hombroahombro/images/logo.png')
  } else {
    $('#masthead').addClass('active')
    $('#logito').attr('src', 'https://hombroahombro.org.pe/wp-content/themes/hombroahombro/images/logo-blanco.png')
  }
}
function observerEvents() {
  function buildThresholdList() {
    var thresholds = []

    for (var i = 1.0; i <= 1.0; i++) {
      var ratio = i / 1.0
      thresholds.push(ratio)
    }

    thresholds.push(0)
    return thresholds
  }
  function createObserver(element) {
    var observer

    var options = {
      root: null,
      rootMargin: '0px',
      threshold: buildThresholdList(),
    }
    observer = new IntersectionObserver(handleIntersect, options)
    element && observer.observe(element)
  }

  function handleIntersect(entries, observer) {
    entries.forEach(function (entry) {
      if (entry.target === document.querySelector('.values-hah') && entry.intersectionRatio >= 0.5 && !localStorage.getItem('viewNumbers')) {
        localStorage.setItem('viewNumbers', true)
        $('.values-hah__item__value .number .count').each(function () {
          $(this)
            .prop('Counter', 0)
            .animate(
              {
                Counter: $(this).text(),
              },
              {
                duration: 7000,
                easing: 'swing',
                step: function (now) {
                  $(this).text(Math.ceil(now))
                },
              }
            )
        })
      }
    })
  }
  if (document.getElementsByClassName('values-hah')[0]) {
    createObserver(document.getElementsByClassName('values-hah')[0])
  }
}

$('.input-field').focusin(function (e) {
  $(this).addClass('active')
})

$('.vote').click(function () {})

$('.input-field').focusout(function (e) {
  if ($(this).find('input').attr('value').length <= 0) {
    console.log('es Cero', $(this).find('input').attr('value'), $(this).find('input').attr('value').length)
  } else if ($(this).find('input').attr('value').length > 0) {
    console.log('llego', $(this).find('input').attr('value').length)
    $(this).addClass('active')
  }
})

$('#downloadModal').click(function () {
  $('.modal-download').fadeIn()
})

$('.btn-quien').click(function () {
  console.log(this)
  $(this).addClass('active')
  var item = $(this).data('slide')
  var image = $('#' + item).data('img')
  $('#imgBases').attr('src', image)
  $('#' + item).fadeIn()
  $('#' + item)
    .siblings()
    .fadeOut()

  $(this).parent().siblings().find('a').removeClass('active')
})
$('#downloadBg').click(function () {
  $('.modal-download').fadeOut()
  $('.wpcf7-form')[0].reset()
  $('.input-field').removeClass('active')
  setTimeout(function () {
    $('.modal-download__content').removeClass('active')
    $('.modal-download__thanks').removeClass('active')
  }, 500)
})
$('.closeModalDownload').click(function () {
  $('.modal-download').fadeOut()
  $('.wpcf7-form')[0].reset()
  $('.input-field').removeClass('active')
  setTimeout(function () {
    $('.modal-download__content').removeClass('active')
    $('.modal-download__thanks').removeClass('active')
  }, 500)
})
$('.cerrarModal').click(function () {
  $('.modal-download').fadeOut()
  $('.input-field').removeClass('active')
  setTimeout(function () {
    $('.modal-download__content').removeClass('active')
    $('.modal-download__thanks').removeClass('active')
  }, 500)
})

$('.button-module').click(function () {
  console.log($(this).data('id'))
  var id = $(this).data('id')
  $(this).addClass('active')
  $(this).siblings().removeClass('active')
  $('#cont' + id).addClass('active')
  $('#cont' + id)
    .siblings()
    .removeClass('active')
})

window.addEventListener('scroll', function (e) {
  last_known_scroll_position = window.scrollY
  observerEvents()
  if (!ticking) {
    window.requestAnimationFrame(function () {
      doSomething(last_known_scroll_position)
      ticking = false
    })
  }
  ticking = true
})

$('#contactanosnew').click(function () {
  $('.formulario-flotante').fadeIn()
})

$('#contactanos').click(function () {
  $('.formulario-flotante').fadeIn()
})
Boolean

$('#btn-hero-atencion').click(function () {
  $('.formulario-flotante').fadeIn()
})

$('#btn-emp').click(function () {
  $('.formulario-empresa').fadeIn()
})
$('.overlay-contacto').click(function () {
  $('.formulario-flotante').fadeOut()
  $('.formulario-empresa').fadeOut()
})

$('#form-proyecto').click(function () {
  $('.formulario-prevenir').fadeIn()
})

$('#cerrar-emp').click(function () {
  $('.formulario-empresa').fadeOut()
})

$('#unete').click(function () {
  $('.formulario-flotante').fadeIn()
})

$('#donante').click(function () {
  $('.formulario-donante').fadeIn()
})

$('#cerrardonante').click(function () {
  $('.formulario-donante').fadeOut()
})

$('#cerrar').click(function () {
  $('.formulario-flotante').fadeOut()
})

$('.slider.owl-carousel').owlCarousel({
  nav: false,
  margin: 0,
  loop: false,
  items: 1,
  autoplay: true,
  autoplayTimeout: 5000,
})

$('.slider-pdp.owl-carousel').owlCarousel({
  nav: false,
  margin: 0,
  dots: false,
  loop: true,
  items: 1,
  autoplay: true,
  autoplayTimeout: 5000,
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
})
$('.patronato__brands.owl-carousel').owlCarousel({
  nav: true,
  margin: 0,
  items: 1,
  autoWidth: true,
  dots: false,
  autoplay: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 4,
      margin: 20,
    },
  },
})

$('.partner__brands.owl-carousel').owlCarousel({
  nav: true,
  margin: 0,
  items: 1,
  autoWidth: true,
  autoplay: true,
  dots: false,
  loop: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 4,
      margin: 20,
    },
  },
})

$('.slide-directorio.owl-carousel').owlCarousel({
  nav: false,
  margin: 20,
  items: 1,
  autoWidth: false,
  dots: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 4,
      margin: 20,
    },
  },
})

$('.slide-patronato.owl-carousel').owlCarousel({
  nav: false,
  margin: 20,
  items: 1,
  autoWidth: false,
  autoplay: true,
  autoplayTimeout: 3000,
  responsive: {
    0: {
      items: 1,
      autoWidth: false,
    },
    768: {
      items: 2,
      autoWidth: false,
    },
    1000: {
      autoWidth: false,

      items: 4,
    },
  },
})

$('.team-carousel__content.owl-carousel').owlCarousel({
  nav: true,
  dots: false,
  loop: true,
  margin: 20,
  items: 1,
  autoWidth: false,
  autoplay: true,
  autoplayTimeout: 3000,
})

$(document).ready(function () {
  AOS.init()

  $('.sandwich').click(function () {
    $('#masthead').toggleClass('active')
    $('.sandwich').toggleClass('active')
    $('.container-nav').toggleClass('active')
    if ($('.sandwich').hasClass('active')) {
      var brandtwo = $('#brand').data('brandtwo')
      $('#brand').attr('src', brandtwo)
    } else {
      var brand = $('#brand').data('brand')
      $('#brand').attr('src', brand)
    }
  })
})

function abrirform(e) {
  e.parentNode.classList.add('active')
}
function cerrarform(e) {
  if (e.value.length <= 0) {
    e.parentNode.classList.remove('active')
  } else if (e.value.length >= 0) {
    e.parentNode.classList.add('active')
  }
}

$('.equipo-group.owl-carousel').owlCarousel({
  items: 1,
  margin: 20,
  responsive: {
    600: {
      margin: 0,
    },
  },
})

$('#noticias-slider.owl-carousel').owlCarousel({
  loop: true,
  margin: 0,
  dots: false,
  responsiveClass: true,
  autoplay: true,
  autoplayTimeout: 3000,
  responsive: {
    0: {
      items: 1,
      nav: false,
      dots: false,
    },
    600: {
      items: 3,
      margin: 20,
      nav: false,
      dots: false,
    },
    1000: {
      items: 3,
      margin: 20,
      dots: false,
      autoplay: true,
      loop: true,
      autoplayTimeout: 3000,
    },
  },
})

if (window.matchMedia('(max-width: 500px)').matches) {
  $('#zona-recursos').addClass('owl-carousel owl-theme')

  $('#zona-recursos.owl-carousel').owlCarousel({
    nav: false,
    margin: 10,
    items: 1,
    dots: true,
  })

  $('.slide-preparate').addClass('owl-carousel owl-theme')

  $('.slide-preparate.owl-carousel').owlCarousel({
    nav: false,
    margin: 10,
    items: 1,
    dots: true,
  })
} else {
  /* La pantalla tiene menos de 400 píxeles de ancho */
}
