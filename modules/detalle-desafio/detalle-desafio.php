<section id="detalle" class="desafio-hombro">
    <div class="container">
        <h2>¿De qué trata el <strong>Reto Hombro a Hombro?</strong></h2>
        <div class="desafio-hombro-module">
            <div class="desafio-hombro-module__buttons">
                <div class="desafio-hombro-module__buttons__container">
                    <button class="button-module active" data-id="desafio">RETO</button>
                    <button class="button-module" data-id="bases">CATEGORÍAS</button>
                    <button class="button-module" data-id="participar">¿CÓMO PARTICIPAR?</button>
                    <button class="button-module" data-id="premios">PREMIOS</button>
                    <button class="button-module" data-id="jurado">JURADO</button>
                    <button class="button-module" data-id="etapas">ETAPAS</button>
                    <button class="button-module" data-id="criterios">CRITERIOS DE EVALUACIÓN</button>


                </div>
            </div>

            <div class="desafio-hombro-module__content">
                <div id="contdesafio" class="desafio-hombro-module__content__link active">
                    <div class="col_one">
                        <p>
                            La crisis sanitaria ocasionada por la COVID-19 ha evidenciado una serie de problemas que estaban latentes en nuestro país y que se han visto agudizados durante la pandemia. Es momento de que empresarios y emprendedores trabajemos unidos para lograr el ansiado desarrollo del país, especialmente en estos momentos difíciles. Por ello, en el <strong>Reto Hombro a Hombro</strong> queremos premiar y promover a aquellos emprendedores que están comprometidos con el Perú, que han identificado formas de acortar brechas con proyectos innovadores y sostenibles, y que quieren convertir sus ideas en empresas exitosas que utilicen el poder del mercado para solucionar problemas reales de las personas. <strong>Si tienes una idea que soluciona problemas incluidos en las 4 categorías del concurso, y que puedes transformar en un negocio, este reto está hecho para ti.</strong>
                        </p>

                    </div>
                    <div class="col_two">
                        <div class="video-reto">
                            <video controls>
                                <source src="<?php the_sub_field('video_reto') ?>" type="video/mp4">

                            </video>
                        </div>
                    </div>
                </div>
                <div id="contbases" class="desafio-hombro-module__content__link">
                    <div class="container">
                        <div class="container-text">
                            <?php if (get_sub_field('bases')) : $i = 0; ?>
                                <div class="text-quienes">
                                    <?php while (has_sub_field('bases')) : $i++; ?>
                                        <div id="<?php the_sub_field('id') ?>" data-img="<?php the_sub_field('imagen') ?>" class="item-text">
                                            <?php the_sub_field('texto') ?>
                                        </div>
                                    <?php endwhile; ?>

                                </div>
                            <?php endif; ?>
                            <div class="menu-slide">
                                <ul class="menu">
                                    <li><a class="btn-quien active" data-slide="educacion">EDUCACIÓN</a></li>
                                    <li><a class="btn-quien" data-slide="financiera">INCLUSIÓN FINANCIERA</a></li>
                                    <li><a class="btn-quien" data-slide="salud">SALUD Y NUTRICIÓN</a></li>
                                    <li><a class="btn-quien" data-slide="transporte">TRANSPORTE Y LOGÍSTICA</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="img" data-aos="fade-up">
                            <img id="imgBases" src="<?php the_sub_field('imagen_default_bases') ?>" alt="">
                        </div>
                    </div>
                </div>
                <div id="contparticipar" class="desafio-hombro-module__content__link">

                    <div class="col_one ">
                        <h5>¡Ya cerramos las inscripciones!</h5>
                        <p>
                            Mantente al tanto del Reto Hombro a Hombro en nuestras redes sociales:
                        </p>

                        <div class="redes">
                            <a href="https://www.facebook.com/HombroaHombroPe/" class="linkred "><img src="/wp-content/uploads/2020/09/facebook.svg" alt=""></a>
                            <a href="https://www.instagram.com/_hombroahombro_/" class="linkred "><img src="/wp-content/uploads/2020/09/instagram.svg" alt=""></a>
                        </div>

                    </div>
                    <div class="col_two">
                        <img src="<?php the_sub_field('imagen_cierre') ?>" />

                    </div>
                </div>
                <div id="contpremios" class="desafio-hombro-module__content__link">
                    <div class="col_one">
                        <div class="col_one__item">
                            <p class="col_one__item__text"><strong>4 premios de <span>US$ 5,000</span> </strong>como capital semilla para el desarrollo del proyecto (uno por categoría)</p>
                        </div>
                        <div class="col_one__item">
                            <p class="col_one__item__text"><strong>Asesoría empresarial</strong> por parte de expertos de alguna de las organizaciones patrocinadoras del concurso.
                            </p>
                        </div>
                    </div>
                    <div class="col_two">

                        <div class="col_one__item">
                            <p>Los miembros del jurado tienen la discreción para anunciar más premios o reconocimientos especiales u honoríficos en la etapa final del Reto Hombro a Hombro, así como de declarar desierta alguna categoría, en caso ninguno de los proyectos presentados tenga méritos suficientes de acuerdo con los criterios de evaluación establecidos.</p>
                        </div>
                    </div>
                </div>
                <div id="contjurado" class="desafio-hombro-module__content__link">
                    <div class="textJurado">
                        <p>El jurado calificador está compuesto por profesionales con amplia experiencia empresarial o en los sectores de cada categoría del concurso. Sus miembros evaluarán de manera imparcial y calificarán los proyectos finalistas de acuerdo con los criterios del Reto Hombro a Hombro mencionados en la sección correspondiente, tomando en cuenta su calidad técnica para resolver un problema de la sociedad, y el potencial de convertirse en un negocio. También podrá proporcionar retroalimentación a los finalistas con el fin de ayudarlos a identificar áreas de mejora.</p>
                    </div>
                    <?php if (get_sub_field('jurados')) : $i = 0; ?>
                        <?php while (has_sub_field('jurados')) : $i++; ?>
                            <div class="jurado">
                                <img src="<?php the_sub_field('imagen_del_jurado') ?>" alt="">
                                <div class="text">
                                    <?php the_sub_field('nombre_del_jurado') ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>

                <div id="contetapas" class="desafio-hombro-module__content__link align-start">
                    <div class="col_four">
                        <h4>1. Inscripción</h4>
                        <p>Los interesados en participar pueden registrar sus postulaciones entre el 2 de agosto y el 4 de setiembre del 2020 en la plataforma del concurso: <a href="https://hombroahombro.org.pe/reto/registro">www.hombroahombro.org.pe/reto/registro</a></p>
                    </div>
                    <div class="col_four">
                        <h4>2. Selección de finalistas </h4>
                        <p>Del 5 al 8 de setiembre un equipo técnico seleccionará un máximo de 3 finalistas por cada una de las categorías de acuerdo con los criterios de <strong>Innovación, Impacto y Sostenibilidad del proyecto.</strong> Estos criterios son los mismos que considerará el jurado calificador que tiene a su cargo la selección final de los ganadores. </p>
                        <p>La presentación del grupo de finalistas se realizará en la web del concurso el día 10 de setiembre de 2020. A partir de ese momento, la calificación incluye una variable adicional que es el puntaje obtenido de la ciudadanía. Para ello, del 10 al 17 de setiembre de 2020 se subirán los vídeos “pitch” de cada finalista a la página de Facebook de Hombro a Hombro. La cantidad de votos (Likes) obtenidos se ponderará en el puntaje final y será equivalente al 10% del mismo.</p>
                    </div>

                    <div class="col_four">
                        <h4>3. Premiacion</h4>
                        <p>La ceremonia de premiación será el día <strong>24 de setiembre</strong> y la transmisión se realizará en vivo por el Facebook de Hombro a Hombro.La ceremonia de premiación será el día 24 de setiembre y la transmisión se realizará en vivo por el Facebook de Hombro a Hombro. Los ganadores podrán coordinar con los organizadores para concretar la entrega de los premios a partir del día siguiente de recibida la notificación por escrito por parte de los organizadores.</p>
                    </div>
                </div>
                <div id="contcriterios" class="desafio-hombro-module__content__link align-start">
                    <p>Cada uno de los criterios de evaluación, definidos como <strong>Innovación, Impacto, Sostenibilidad y Favorito del Público </strong>se obtiene de la consideración de algunas variables que se explican a continuación:</p>
                    <div class="criterios">
                        <?php if (get_sub_field('criterios')) : $i = 0; ?>
                            <?php while (has_sub_field('criterios')) : $i++; ?>
                                <div class="criterios__item">
                                    <img src="<?php the_sub_field('imagen') ?>" alt="">
                                    <div class="text">
                                        <?php the_sub_field('texto') ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<div class="modal-download">
    <div id="downloadBg" class="overlay"></div>
    <div class="modal-download__content">
        <div class="closeModalDownload"></div>
        <h3>Déjanos tus datos y <strong>vota por tu favorito</strong></h3>
        <form id="formGoogle" action="https://docs.google.com/forms/u/4/d/e/1FAIpQLSeo8qrmvbL8kplfVbYQM6LuIjLTHjVHTMipIOmpYz9fzosRGA/formResponse" method="post" target="hidden_iframe">


            <div class="input-field"><label> Nombre</label><input type="text" name="entry.1773564716" size="40" id="nombreh" required></div>
            <div class="input-field"><label> Correo</label><input type="email" name="entry.57765961" size="40" id="emailh" required></div>
            <div class="input-field"><label> Teléfono</label><input type="number" name="entry.1882366042" size="40" id="phoneh" required>
                <input style="display:none;" type="text" name="entry.1571479501" size="40" id="categoryh">

            </div>

            <button id="sendForm" type="button" class="btn btn-red">VOTAR</button>
        </form>
    </div>
    <div class="modal-download__thanks">
        <div class="closeModalDownload"></div>
               <h3>Gracias por tu voto <strong>¡Que gane el mejor!</strong></h3>
        <button class="cerrarModal btn btn-red">Listo</button>

    </div>
</div>


<!-- <script>
    function descargar() {
        $('.modal-download__content').addClass('active')
        $('.modal-download__thanks').addClass('active')
        var download = document.createElement("a");
        download.setAttribute('download', name);
        download.href = "/wp-content/uploads/2020/07/documentos-reto-hombro-a-hombro.zip";
        document.body.appendChild(download);
        download.click();
        download.remove();

    }
</script> -->

<script>
    document.addEventListener('DOMContentLoaded', function(event) {

        var database = firebase.database();
        var rootRef = database.ref("vote");
        var UserRef = database.ref("user");
        $('#sendForm').click(function(e) {
            var nombreh = $("#nombreh").val()
            var emailh = $("#emailh").val()
            var phoneh = $("#phoneh").val()
            var cati = localStorage.getItem('catRelative')
            e.preventDefault()

            if (!localStorage.getItem('educacion') || !localStorage.getItem('salud') || !localStorage.getItem('transporte')) {
                var autoId = UserRef.push().key

                UserRef.orderByChild('email').equalTo(emailh).once('value', snapshot => {
                    if (snapshot.val() != null) {
                        if (cati === "salud" && Object.entries(snapshot.val())[0][1].salud) {
                            $('.modal-download__content').addClass('active')
                            localStorage.setItem(cati, cati)
                            $('.modal-download__thanks').addClass('active')
                            return alert("ya botaste por esta categoria")
                        } else if (cati === "educacion" && Object.entries(snapshot.val())[0][1].educacion) {
                            $('.modal-download__content').addClass('active')
                            localStorage.setItem(cati, cati)
                            $('.modal-download__thanks').addClass('active')
                            return alert("ya botaste por esta categoria")
                        } else if (cati === "transporte" && Object.entries(snapshot.val())[0][1].transporte) {
                            $('.modal-download__content').addClass('active')
                            localStorage.setItem(cati, cati)
                            $('.modal-download__thanks').addClass('active')
                            return alert("ya botaste por esta categoria")
                        } else {
                            $('#formGoogle').submit()
                            UserRef.child(Object.entries(snapshot.val())[0][0]).once("value", function() {
                                UserRef.child(Object.entries(snapshot.val())[0][0]).update({
                                    [cati]: true,
                                })
                                var valor = localStorage.getItem('trackVideo')


                                rootRef.child(valor).once("value", function(snapshot) {
                                    var idVoto = snapshot.val()
                                    var votedValue = (snapshot.val().voted + 1)
                                    rootRef.child(valor).update({

                                        voted: votedValue
                                    })
                                })
                            })
                            location.reload()
                            $('.modal-download__content').addClass('active')
                            $('.modal-download__thanks').addClass('active')
                            localStorage.setItem(cati, cati)
                        }

                    } else {
                        var valor = localStorage.getItem('trackVideo')
                        $('#formGoogle').submit()
                        var nombreh = $("#nombreh").val()
                        var emailh = $("#emailh").val()
                        var phoneh = $("#phoneh").val()
                        var autoId = UserRef.push().key

                        UserRef.child(autoId).set({
                            phone: phoneh,
                            email: emailh,
                            name: nombreh,
                            educacion: false,
                            salud: false,
                            transporte: false
                        })
                        UserRef.child(autoId).once("value", function() {
                            UserRef.child(autoId).update({
                                [cati]: true,
                            })

                        })


                        rootRef.child(valor).once("value", function(snapshot) {
                            var idVoto = snapshot.val()
                            var votedValue = (snapshot.val().voted + 1)
                            rootRef.child(valor).update({

                                voted: votedValue
                            })
                        })
                        $('.modal-download__content').addClass('active')
                        $('.modal-download__thanks').addClass('active')

                        var catSelect = localStorage.getItem('catRelative')
                        localStorage.setItem(catSelect, catSelect)
                        localStorage.removeItem('catRelative')
                        location.reload()
                        $('.modal-download__content').addClass('active')
                        $('.modal-download__thanks').addClass('active')
                    }
                })
            }
        })
    })
</script>