<div id="votacion" style="position:relative; top:-8px;">

</div>


<section class="votacion-videos">
  <div class="container">
    <div class="votacion-videos__title">
      <?php the_sub_field('titulo') ?>

    </div>
    <!-- <div class="votacion-videos__filters">
      <button class="active" data-filter="all">Todos</button>
      <button class="" data-filter=".educacion">Educación</button>
      <button class="" data-filter=".salud">Salud y Nutrición</button>
      <button class="" data-filter=".transporte">Transporte y Logística</button>
    </div> -->
    <div id="form" class="votacion-videos__container" method="post">

      <div class="votacion-videos__item mix  educacion">
        <div class="votacion-videos__img" style="background:url(https://hombroahombro.org.pe/wp-content/uploads/2020/09/Lulu.png)">
          <a class="btn-play" href="https://www.youtube.com/watch?v=7tzMNEkPTO0&t" target="_blank"></a>
          <div class="like"></div>
        </div>
        <div class="votacion-videos__text">
          <div class="votacion-videos__title">
            <span>Educación</span>
            <p>Lulu la academia</p>
          </div>

        </div>
      </div>


      <div class="votacion-videos__item mix  educacion">
        <div class="votacion-videos__img" style="background:url(https://hombroahombro.org.pe/wp-content/uploads/2020/09/SitSmart.png)">
          <a class="btn-play" href="https://www.youtube.com/watch?v=BcgW_gfaYNI&t" target="_blank"></a>
          <div class="like"></div>
        </div>
        <div class="votacion-videos__text">
          <div class="votacion-videos__title">
            <span>Transporte</span>
            <p>SitSmart </p>
          </div>

        </div>
      </div>


      <div class="votacion-videos__item mix  educacion">
        <div class="votacion-videos__img" style="background:url(https://hombroahombro.org.pe/wp-content/uploads/2020/09/Embutidos-de-Cuy.png)">
          <a class="btn-play" href="https://www.youtube.com/watch?v=w-EHnqU0fDw&t" target="_blank"></a>
          <div class="like"></div>
        </div>
        <div class="votacion-videos__text">
          <div class="votacion-videos__title">
            <span>Salud</span>
            <p>Embutidos de Cuy</p>
          </div>

        </div>
      </div>


      <div class="votacion-videos__item mix  educacion">
        <div class="votacion-videos__img" style="background:url(https://hombroahombro.org.pe/wp-content/uploads/2020/09/Ticlea-Peru.png)">
          <a class="btn-play" href="https://www.youtube.com/watch?v=UM3jPipLRDo&t" target="_blank"></a>
          <div class="like"></div>
        </div>
        <div class="votacion-videos__text">
          <div class="votacion-videos__title">
            <span>Premio especial</span>
            <p>Ticlea Perú</p>
          </div>

        </div>
      </div>
    </div>
    <!-- <div class="controls-pagination">
      <div class="mixitup-page-list"></div>
    </div> -->
  </div>
</section>
<!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/mixitup.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/mixitup-pagination.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/mixitup-multifilter.min.js"></script> -->
<!-- <script>
  function abrirModalForm(e, cati, name) {

    if (localStorage.getItem('educacion') && localStorage.getItem('salud') && localStorage.getItem('transporte')) {
      $('.modal-download__content').addClass('active')
      $('.modal-download__thanks').addClass('active')
    } else if (localStorage.getItem(cati)) {
      $('.modal-download__content').addClass('active')
      $('.modal-download__thanks').addClass('active')

    } else {
      localStorage.setItem('trackVideo', e)
      localStorage.setItem('catRelative', cati)
      $('.modal-download__content').removeClass('active')
      $('.modal-download__thanks').removeClass('active')
      $('#categoryh').attr('value', name)
    }
    $('.modal-download').fadeIn()

  }
  var database = firebase.database();
  var rootRef = database.ref("vote");
  var UserRef = database.ref("user");

  // function añadir() {
  //   var nombreh = $("#nombreh").val()
  //   var emailh = $("#emailh").val()
  //   var phoneh = $("#phoneh").val()
  //   var cati = localStorage.getItem('catRelative')
  //   if (!localStorage.getItem('educacion') || !localStorage.getItem('salud') || !localStorage.getItem('transporte')) {
  //     var valor = localStorage.getItem('trackVideo')
  //     var autoId = UserRef.push().key

  //     UserRef.orderByChild('email').equalTo(emailh).once('value', snapshot => {
  //       if (snapshot.val() != null) {
  //         alert("Ya votaste con este correo")
  //         return false
  //       } else {
  //         alert("Gracias por votar")
  //         var nombreh = $("#nombreh").val()
  //         var emailh = $("#emailh").val()
  //         var phoneh = $("#phoneh").val()
  //         var autoId = UserRef.push().key

  //         UserRef.child(autoId).set({
  //           phone: phoneh,
  //           email: emailh,
  //           name: nombreh,
  //         })
  //         $('.modal-download__content').addClass('active')
  //         $('.modal-download__thanks').addClass('active')
  //       }
  //     })




  //     // rootRef.child(valor).once("value", function(snapshot) {
  //     //   var idVoto = snapshot.val()
  //     //   var votedValue = (snapshot.val().voted + 1)
  //     //   rootRef.child(valor).update({

  //     //     voted: votedValue
  //     //   })
  //     // })
  //     // $('.modal-download__content').addClass('active')
  //     // $('.modal-download__thanks').addClass('active')

  //     // var catSelect = localStorage.getItem('catRelative')
  //     // localStorage.setItem(catSelect, catSelect)
  //     // localStorage.removeItem('catRelative')
  //     // location.reload()
  //   }
  // }
  document.addEventListener('DOMContentLoaded', function(event) {
    localStorage.removeItem('catRelative')
    $('.verMasVideos').click(function() {
      $('#form').addClass('active')
      $(this).hide()
    })
    rootRef.orderByKey().once('value', snapshot => {
      const array = snapshot.val()
      const filas = array.map(function(item, e) {
        return `
      <div class="votacion-videos__item mix  ${item.categoria}">
            <div class="votacion-videos__img" style="background:url(${item.rutImg})">
              <div class="contador ">${item.voted} votos</div>
              <a class="btn-play" href="${item.rutVideo}" target="_blank"></a>
              <div class="like"></div>
            </div>
            <div class="votacion-videos__text">
              <div class="votacion-videos__title">
                <span>${item.catFull}</span>
                <p>${item.titulo}</p>
              </div>

            </div>
          </div>`
      }).join("")

      document.getElementById("form").innerHTML = filas
      var containerEl = document.querySelector('.votacion-videos__container');
      var currentLimit = 6;
      var incrementAmount = 6;
      if (window.matchMedia("(min-width: 450px)").matches) {
        var currentLimit = 6;
      } else {
        var currentLimit = 6;
      }
      var mixer = mixitup(containerEl, {
        multifilter: {
          enable: true
        },
        animation: {
          effects: 'fade translateZ(-100px)'
        },
        pagination: {
          limit: currentLimit
        },

      });
    })
  })
</script> -->