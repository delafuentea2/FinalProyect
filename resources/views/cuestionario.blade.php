@extends('layouts.cuestionarioTpl')

<body>
    <div class="home">
        <div class="home-inner">
            <div class="frame-wrapper">
                <div class="mm-parent">
                    <div class="mm"><a href="{{ route ('/')}}"> <img src="img/logoMMOscuro.png" alt="MDN"
                                id="logo"> </a></div>

                </div>
                <button class="image-3-wrapper">
                    <img class="image-3-icon" alt="" src="https://i.postimg.cc/J0wfG2Vg/icons8-men-30.png" />
                </button>
            </div>
        </div>
    </div>
    <div class="container">

        @if (Auth::check())
            <form id="movie-form">
                <label for="sentimiento">¿Cómo te sientes hoy?</label>
                <div class="multiselect">
                    <div class="selectBox" onclick="showCheckboxes()">
                        <select id="sentimiento">
                            <option>Seleccionar emociones</option>
                        </select>
                        <div class="overSelect"></div>
                    </div>
                    <div id="checkboxes">
                        <label for="checkbox1">
                            <input type="checkbox" id="checkbox1" name="sentimiento" value="estresado" />Estresad@ /
                            ansios@
                        </label>
                        <label for="checkbox2">
                            <input type="checkbox" id="checkbox2" name="sentimiento" value="triste" />Triste /
                            melancólic@
                        </label>
                        <label for="checkbox3">
                            <input type="checkbox" id="checkbox3" name="sentimiento" value="feliz" />Feliz / animad@
                        </label>
                        <label for="checkbox4">
                            <input type="checkbox" id="checkbox4" name="sentimiento" value="cansado" />Aburrid@ /
                            indiferente
                        </label>
                        <label for="checkbox5">
                            <input type="checkbox" id="checkbox5" name="sentimiento" value="emocionado" />Emocionad@ /
                            aventurero
                        </label>
                    </div>

                    <br /><br />

                    <label for="apta-para-todo-publico">¿Prefieres una película que sea apta para todo público?</label>
                    <select id="apta-para-todo-publico" name="apta-para-todo-publico">
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                        <option value="indiferente">Indiferente</option>
                    </select>

                    <br /><br />

                    <label for="duracion">¿Tienes preferencia por la duración de una película?</label>
                    <select id="duracion" name="duracion">
                        <option value="corta">Entre 90 y 120 minutos</option>
                        <option value="larga">mas de 120 minutos</option>
                        <option value="indiferente">Indiferente</option>
                    </select>

                    <br /><br />

                    <label for="maraton">¿Te gustaría hacer un maratón de películas?</label>
                    <select id="maraton" name="maraton">
                        <option value="no">No</option>
                        <option value="si">Sí</option>
                    </select>
                </div>

                <br /><br />

                <button type="submit" id="search-button">Buscar películas</button>
            </form>
        @else
            <div id="login-message">Debes <a href="{{ route('login') }}" id="iniciar-sesion-a">iniciar sesión</a> o <a
                    href="{{ route('register') }}" id="iniciar-sesion-a">registrate</a> para hacer el formulario!</div>
            <div id="img-message">
                <img src="https://img.icons8.com/?size=512&id=5342&format=png" alt="MDN" id="logo">
            </div>
        @endif
    </div>
    </div>

</div>
</div>
<div id="cargando" class="oculto" style="display: none;">

<img src="https://media.tenor.com/joLYNfFQGDgAAAAC/loading.gif" alt="Cargando...">
</div>


<div id="fotos-container" style="display: none;" class="aparecer-con-efecto">
<h2>Últimos estrenos</h2> </div>
    <div id="caja-resultados">
        <h1 style="display: none;" id="h2">Tus peliculas recomendadas</h1>
        <ul id="lista-resultados"></ul>
    </div>
    <div id="detalles"> </div>
    <button style="display: none;" id="guardarFormulario">Guardar formulario</button>


</body>
<script src="{{ asset('js/cuestionario.js') }}"></script>

</html>
