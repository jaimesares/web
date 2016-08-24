@extends('web.layouts.base')

@section('content')
    <div class="presentation">
        <div class="container">
            @include('web.layouts.header')

            <h1>
                <span class="name">Jaime Sares</span>
                <br>···<br>
                <span class="backend">Backend Developer</span>
            </h1>
        </div>
    </div>

    <div id="about" class="about">
        <div class="container">
            <div class="col-md-offset-3 col-md-6">
                <img src="/images/jaimesares.jpg" alt="Jaime Sares">

                <h2 class="section">Sobre mí</h2>
                <p>
                    Soy Jaime Sares, un <strong>programador</strong> de 24 años, con <strong>+3 años de experiencia</strong>, especializado en <strong>backend</strong> alojado en Isla Cristina, Huelva. Apasionado de la programación y los animales.
                </p>

                <h2 class="section">Habilidades</h2>
                <p>Trabajo en <strong>PHP</strong> usando el framework <strong>Laravel</strong> para el backend con el que desarrollo <strong>páginas web dinámicas</strong>, <strong>aplicaciones</strong> y <strong>apis</strong>.</p>
                <p>En frontend suelo trabajar con <strong>HTML</strong>, <strong>CSS (SASS)</strong>, <strong>Bootstrap</strong> y <strong>JavaScript</strong>.</p>
                <br>
                <div class="progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                        PHP
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                        HTML
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                        CSS
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                        Wordpress
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-default progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        JavaScript
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="projects" class="projects">
        <div class="container">
            <h2 class="section">Proyectos</h2>
            <div class="col-md-offset-3 col-md-6 text-center">
                <p>He trabajado en varios proyectos a lo largo de estos 3 años. Principalmente he construido APIs, maquetado landings y creado webapps.</p>
                <hr>
            </div>
            <div class="row project">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <img src="/images/projects/protecms.jpg" class="img-responsive img-thumbnail" alt="ProteCMS">
                            </div>
                            <div class="col-md-6">
                                <h3>ProteCMS</h3>
                            </div>
                            <div class="col-md-6 tags">
                                <span class="label label-primary">Frontend</span>
                                <span class="label label-primary">Backend</span>
                                <span class="label label-primary">CEO</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <img src="/images/projects/mimento-new.jpg" class="img-responsive img-thumbnail" alt="Mimento">
                            </div>
                            <div class="col-md-6">
                                <h3>Mimento</h3>
                            </div>
                            <div class="col-md-6 tags">
                                <span class="label label-primary">API</span>
                                <span class="label label-primary">Frontend</span>
                                <span class="label label-primary">Backend</span>
                                <span class="label label-primary">CTO</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row project">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <img src="/images/projects/fotoloop.jpg" class="img-responsive img-thumbnail" alt="Fotoloop">
                            </div>
                            <div class="col-md-6">
                                <h3>Fotoloop</h3>
                            </div>
                            <div class="col-md-6 tags">
                                <span class="label label-primary">API</span>
                                <span class="label label-primary">Backend</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <img src="/images/projects/farmaapp.jpg" class="img-responsive img-thumbnail" alt="Farma APP">
                            </div>
                            <div class="col-md-6">
                                <h3>Farma APP</h3>
                            </div>
                            <div class="col-md-6 tags">
                                <span class="label label-primary">API</span>
                                <span class="label label-primary">Frontend</span>
                                <span class="label label-primary">Backend</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row project">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <img src="/images/projects/feeldreams.jpg" class="img-responsive img-thumbnail" alt="Feeldreams">
                            </div>
                            <div class="col-md-6">
                                <h3>Feeldreams</h3>
                            </div>
                            <div class="col-md-6 tags">
                                <span class="label label-primary">API</span>
                                <span class="label label-primary">Frontend</span>
                                <span class="label label-primary">Backend</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <img src="/images/projects/proponlow.jpg" class="img-responsive img-thumbnail" alt="Proponlow">
                            </div>
                            <div class="col-md-6">
                                <h3>Proponlow</h3>
                            </div>
                            <div class="col-md-6 tags">
                                <span class="label label-primary">Frontend</span>
                                <span class="label label-primary">Backend</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <img src="/images/projects/brandyluisfelipe.jpg" class="img-responsive img-thumbnail" alt="Feeldreams">
                            </div>
                            <div class="col-md-6">
                                <h3>Brandy Luis Felipe</h3>
                            </div>
                            <div class="col-md-6 tags">
                                <span class="label label-primary">Prestashop</span>
                                <span class="label label-primary">Frontend</span>
                                <span class="label label-primary">Backend</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <img src="/images/projects/climbcrew.jpg" class="img-responsive img-thumbnail" alt="Climbcrew">
                            </div>
                            <div class="col-md-6">
                                <h3>Climbcrew</h3>
                            </div>
                            <div class="col-md-6 tags">
                                <span class="label label-primary">Frontend</span>
                                <span class="label label-primary">Backend</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row project">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <img src="/images/projects/ambarcapital.jpg" class="img-responsive img-thumbnail" alt="ProteCMS">
                            </div>
                            <div class="col-md-6">
                                <h3>Ambar Capital</h3>
                            </div>
                            <div class="col-md-6 tags">
                                <span class="label label-primary">Frontend</span>
                                <span class="label label-primary">Backend</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <img src="/images/projects/galacapital.jpg" class="img-responsive img-thumbnail" alt="Mimento">
                            </div>
                            <div class="col-md-6">
                                <h3>Gala Capital</h3>
                            </div>
                            <div class="col-md-6 tags">
                                <span class="label label-primary">Frontend</span>
                                <span class="label label-primary">Backend</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row project">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <img src="/images/projects/vinciport.jpg" class="img-responsive img-thumbnail" alt="Feeldreams">
                            </div>
                            <div class="col-md-6">
                                <h3>Vinciport</h3>
                            </div>
                            <div class="col-md-6 tags">
                                <span class="label label-primary">API</span>
                                <span class="label label-primary">Backend</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <img src="/images/projects/vivergi.jpg" class="img-responsive img-thumbnail" alt="Vivergi">
                            </div>
                            <div class="col-md-6">
                                <h3>Vivergi</h3>
                            </div>
                            <div class="col-md-6 tags">
                                <span class="label label-primary">Frontend</span>
                                <span class="label label-primary">Backend</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row hide project">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <img src="/images/projects/nomads.jpg" class="img-responsive img-thumbnail" alt="Feeldreams">
                            </div>
                            <div class="col-md-6">
                                <h3>Nomads</h3>
                            </div>
                            <div class="col-md-6 tags">
                                <span class="label label-primary">Frontend</span>
                                <span class="label label-primary">Backend</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <img src="/images/projects/airun.jpg" class="img-responsive img-thumbnail" alt="Feeldreams">
                            </div>
                            <div class="col-md-6">
                                <h3>Airun Tocados</h3>
                            </div>
                            <div class="col-md-6 tags">
                                <span class="label label-primary">Wordpress</span>
                                <span class="label label-primary">Frontend</span>
                                <span class="label label-primary">Backend</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row hide project">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <img src="/images/projects/ahkeralmataf.jpg" class="img-responsive img-thumbnail" alt="Ahker Al Mataf">
                            </div>
                            <div class="col-md-6">
                                <h3>Ahker Al Mataf</h3>
                            </div>
                            <div class="col-md-6 tags">
                                <span class="label label-primary">API</span>
                                <span class="label label-primary">Backend</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <img src="/images/projects/eventicos.jpg" class="img-responsive img-thumbnail" alt="Ahker Al Mataf">
                            </div>
                            <div class="col-md-6">
                                <h3>Evénticos</h3>
                            </div>
                            <div class="col-md-6 tags">
                                <span class="label label-primary">Frontend</span>
                                <span class="label label-primary">Backend</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-offset-5 col-md-2">
                    <button class="btn btn-block btn-default more-projects">Mostrar más trabajos</button>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="contact">
        <div class="container">
            <h2 id="contact" class="section">Contacta conmigo</h2>
            <div class="col-md-offset-3 col-md-6 text-center">
                <p>¿Tienes algún proyecto en mente? ¿Una idea que quieras llevar a cabo? ¿Quieres asesoría sobre un proyecto que ya está en funcionamiento? Hablemos.</p>
            </div>
            @if (session()->has('contact_success'))
                <div class="row">
                    <div class="col-md-offset-4 col-md-4 alert alert-success text-center">
                        <p>El mensaje se ha enviado correctamente.</p>
                    </div>
                </div>
            @endif
            <form action="{{ route('contact') }}" method="POST" class="form col-md-offset-4 col-md-4 form-horizontal">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                    <label for="contact_name" class="control-label">Nombre</label>
                    <input type="text" name="name" id="contact_name" class="form-control" >
                    {!! $errors->first('name', '<div class="help-block">:message</div>') !!}
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                    <label for="contact_email" class="control-label">Correo electrónico</label>
                    <input type="email" name="email" id="contact_email" class="form-control" >
                    {!! $errors->first('email', '<div class="help-block">:message</div>') !!}
                </div>
                <div class="form-group {{ $errors->has('subject') ? 'has-error' : ''}}">
                    <label for="contact_subject" class="control-label">Asunto</label>
                    <input type="text" name="subject" id="contact_subject" class="form-control" >
                    {!! $errors->first('subject', '<div class="help-block">:message</div>') !!}
                </div>
                <div class="form-group {{ $errors->has('message') ? 'has-error' : ''}}">
                    <label for="contact_message" class="control-label">Mensaje</label>
                    <textarea name="message" id="contact_message" rows="5" class="form-control"></textarea>
                    {!! $errors->first('message', '<div class="help-block">:message</div>') !!}
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control">Enviar</button>
                </div>
            </form>
        </div>
    </div>
@stop