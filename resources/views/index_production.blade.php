@extends('templates.master')
@section('title')
Kaique Gonçalves | Desenvolvedor Web especializado em PHP
@endsection
@section('seo')
<!-- Primary Meta Tags -->
<meta name="description"
    content="Sou parte da revolução tecnológica da sua empresa, modernizar o seu negócio baseado na sua necessidade ideal é a minha especialidade.">
<meta name="keywords"
    content="desenvolvimento,web,agencia,ti,sites,blogs,lojas,virtuais,marketplace,ecommerce,hospedagem,de,sites,design de telas, ui, ux, designer">
<meta name="robots" content="index, follow">
<meta name="author" content="Kaique Gonçalves">
<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://devkaique.com">
<meta property="og:title" content="Kaique Gonçalves | Desenvolvedor Web especializado em PHP">
<meta property="og:description"
    content="Sou parte da revolução tecnológica da sua empresa, modernizar o seu negócio baseado na sua necessidade ideal é a minha especialidade.">
<meta property="og:image" content="http://lp.akdesenvolvimento.com.br/hospedagem/img/logo/dark.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://devkaique.com">
<meta property="twitter:title" content="Kaique Gonçalves | Desenvolvedor Web especializado em PHP">
<meta property="twitter:description"
    content="Sou parte da revolução tecnológica da sua empresa, modernizar o seu negócio baseado na sua necessidade ideal é a minha especialidade.">
<meta property="twitter:image" content="http://lp.akdesenvolvimento.com.br/hospedagem/img/logo/dark.png">
@endsection
@section('content')
<!-- ===== Start Slider ===== -->
<section class="slider d-flex justify-content-center" id="slider">
    <div class="container text-center">
        <div class="row all-content">
            <div class="col-12">
                <div class="left-content">
                    <p class="hello">
                        Olá, eu sou</p>
                    <!-- Animated Text-->
                    <div class="animated-headlines">
                        <h1 class="cd-headline clip is-full-width">
                            <span class="cd-words-wrapper">
                                <b class="is-visible">Kaique Gonçalves</b>
                                <b>Especialista em PHP</b>
                                <b>UI/UX Designer</b>
                                <b>Desenvolvedor Web</b>
                            </span>
                        </h1>
                    </div>
                    <p class="paragraph">
                       Aqui você acompanha conteúdos sobre desenvolvimento, empreendedorismo e fica sabendo um pouquinho sobre mim e os meus serviços.
                    </p>
                    {{-- <a href="#portfolio" class="btn">
                        Meu portfolio</a> --}}
                </div>
            </div>
        </div>
    </div>
    <div id="particles-js" class="particels"></div>
</section>
<!-- ===== End Slider ===== -->



<!-- ===== Start About Me ===== -->
<section class="about-me" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="{{asset('assets/img/myself.png')}}" alt="" class="img-fluid">
            </div>
            <div class="col-md-7">
                <h2>Sobre mim</h2>
                <p>
                    Olá, me chamo Kaique Gonçalves e sou especialista em PHP e em
                    seu framework Laravel. Trabalho como consultor freelancer e
                    alocado como desenvolvedor atualmente. Sou um empreendedor
                    nato, já atuei em empresas de diversos estados, entre eles Rio de
                    Janeiro, São Paulo e Mato Grosso do Sul. Projetos cujos desafios
                    são atingir resultados, resolver problemas são minha
                    especialidade. Possuo inglês fluente e nas horas vagas, não
                    dispenso uma boa música.
                </p>
                {{-- <a href="#0" class="btn-1">Curricullum</a> --}}
                <a href="/portfolio/" class="btn-2">Portfolio</a>
            </div>
        </div>
    </div>
</section>
<!-- ===== End About Me ===== -->

<!-- ===== Start Services ===== -->
<section class="services" id="services">
    <h2 class="text-center">Serviços</h2>
    <div class="container">
        <div class="row">
            <!-- Box-1 -->
            <div class="col-md-6 col-lg-4">
                <div class="box">
                    <span class="fa fa-cogs"></span>
                    <h3>Desenvolvimento de Sistemas Customizados</h3>
                    {{-- <p>Lorem Ipsum simply text of the printing and type setting industry when
                        an unknown printing simply </p> --}}
                </div>
            </div>
            <!-- Box-2 -->
            <div class="col-md-6 col-lg-4">
                <div class="box">
                    <span class="fa fa-code"></span>
                    <h3>Desenvolvimento de Sites</h3>
                    {{-- <p>Lorem Ipsum simply text of the printing and type setting industry when
                        an unknown printing simply </p> --}}
                </div>
            </div>
            <!-- Box-3 -->
            <div class="col-md-6 col-lg-4">
                <div class="box">
                    <span class="fa fa-phone"></span>
                        Consultoria e Treinamentos</h3>
                    {{-- <p>Lorem Ipsum simply text of the printing and type setting industry when
                        an unknown printing simply </p> --}}
                </div>
            </div>
            <!-- Box-4 -->
            <div class="col-md-6 col-lg-4">
                <div class="box">
                    <span class="fa fa-tv"></span>
                    <h3>Design de Telas (UX/UI)</h3>
                    {{-- <p>Lorem Ipsum simply text of the printing and type setting industry when
                        an unknown printing simply </p> --}}
                </div>
            </div>
            <!-- Box-5 -->
            <div class="col-md-6 col-lg-4">
                <div class="box">
                    <span class="fa fa-users"></span>
                    <h3>Gestão de Projetos</h3>
                    {{-- <p>Lorem Ipsum simply text of the printing and type setting industry when
                        an unknown printing simply </p> --}}
                </div>
            </div>
            <!-- Box-6 -->
            <div class="col-md-6 col-lg-4">
                <div class="box">
                    <span class="fa fa-bar-chart"></span>
                    <h3>Planejamento de Marketing</h3>
                    {{-- <p>Lorem Ipsum simply text of the printing and type setting industry when
                        an unknown printing simply </p> --}}
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="portfolio" id="portfolio">
    <div class="container">
        <h2 class="text-center">Portfolio</h2>
        <div class="row">
            <div class="col-sm-12">
                <div class="button-group filter-button-group text-center">
                    <button data-filter="*" class="active">All</button>
                    <button data-filter=".marketing">Marketing</button>
                    <button data-filter=".design">Design</button>
                    <button data-filter=".development">Development</button>
                </div>
            </div>
        </div>
        <div class="row grid">
            <!-- Image-1 -->
            <div class="col-lg-4 col-md-6 grid-item marketing">
                <div class="single-portfolio-item ">
                    <img src="https://via.placeholder.com/400x400" alt="" class="img-fluid">
                    <div class="overlay text-center">
                        <div class="content">
                            <h3>Brex Logo</h3>
                            <p>Brand</p>
                            <a href="https://via.placeholder.com/400x400" class="image-link">
                                <span class="fa fa-eye"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Image-2 -->
            <div class="col-lg-4 col-md-6 grid-item marketing">
                <div class="single-portfolio-item">
                    <img src="https://via.placeholder.com/400x400" alt="" class="img-fluid">
                    <div class="overlay text-center">
                        <div class="content">
                            <h3>Brex Logo</h3>
                            <p>Brand</p>
                            <a href="https://via.placeholder.com/400x400" class="image-link">
                                <span class="fa fa-eye"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Image-3 -->
            <div class="col-lg-4 col-md-6 grid-item design">
                <div class="single-portfolio-item">
                    <img src="https://via.placeholder.com/400x400" alt="" class="img-fluid">
                    <div class="overlay text-center">
                        <div class="content">
                            <h3>Brex Logo</h3>
                            <p>Brand</p>
                            <a href="https://via.placeholder.com/400x400" class="image-link">
                                <span class="fa fa-eye"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Image-4 -->
            <div class="col-lg-4 col-md-6 grid-item design">
                <div class="single-portfolio-item">
                    <img src="https://via.placeholder.com/400x400" alt="" class="img-fluid">
                    <div class="overlay text-center">
                        <div class="content">
                            <h3>Brex Logo</h3>
                            <p>Brand</p>
                            <a href="https://via.placeholder.com/400x400" class="image-link">
                                <span class="fa fa-eye"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Image-5 -->
            <div class="col-lg-4 col-md-6 grid-item development">
                <div class="single-portfolio-item">
                    <img src="https://via.placeholder.com/400x400" alt="" class="img-fluid">
                    <div class="overlay text-center">
                        <div class="content">
                            <h3>Brex Logo</h3>
                            <p>Brand</p>
                            <a href="https://via.placeholder.com/400x400" class="image-link">
                                <span class="fa fa-eye"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Image-6 -->
            <div class="col-lg-4 col-md-6 grid-item development">
                <div class="single-portfolio-item">
                    <img src="https://via.placeholder.com/400x400" alt="" class="img-fluid">
                    <div class="overlay text-center">
                        <div class="content">
                            <h3>Brex Logo</h3>
                            <p>Brand</p>
                            <a href="https://via.placeholder.com/400x400" class="image-link">
                                <span class="fa fa-eye"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section> --}}
@if(count($posts) != 0)
<section class="blog" id="blog">
    <div class="container">
        <h2 class="text-center">Meu Blog!</h2>
        <div class="row">
            <!-- Post-1 -->
            @foreach($posts as $post)
            <div class="co-md-6 col-lg-4">
                <div class="box">
                    <div class="image">
                        <img src="{{asset('images/uploads/blog')}}/{{$post->main_image}}" alt="">
                        <a href="" class="cate"></a>
                    </div>
                    <div class="text">
                        <h3><a href="{{url('blog/')}}/{{$post->url}}"> {{$post->title}}</a></h3>
                        <h4>Postado em: {{ Carbon\Carbon::parse($post->created_at)->format('d/m/Y | H:m')}}</h4>
                        <p>{{$post->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            <a href="blog" class="text-center button-read-more">Ler mais</a>
        </div>
    </div>
</section>
@endif

<section class="contact" id="contact">
    <h2 class="text-center">Vamos tomar um café?!</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @include('includes.alerts')
                <form method="POST" action="{{route('form.contato')}}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nome" placeholder="Nome">
                        </div>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="assunto" placeholder="Assunto">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" id="comment" name="mensagem" placeholder="Mensagem"></textarea>
                    </div>
                    <button class="btn btn-block" type="submit">Enviar Mensagem!</button>
                </form>
            </div>
            <div class="col-md-4">
                <div class="info">


                        <p><span class="fa fa-mobile"></span>
                    (18) 99823-4266 </p>

                    <p><span class="fa fa-at"></span>
                    contato@devkaique.com</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===== End Contact ===== -->




@endsection