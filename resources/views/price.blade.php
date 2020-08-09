@extends('layouts.app')
@include('inc.menu')

@section('title')
    Цены
@endsection
@section('header')
@endsection
<div class="jumbotron p-4 p-md-5 text-white rounded bg-success">
    <div class="col-md-6 px-0">
        <h6 class="display-4 ">Стоимоть и описание услуг клиники "Emirmed"</h6>
        <p class="lead my-3">Мы ради видеть Вас вновь! В данном разделе содержатся цены на все услуги нашего медицинского центра,
            а так-же краткое описание процесса проведения процедуры<br>
        Так-же Вы можете просто</p>
        <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Записаться онлайн...</a></p>
    </div>
</div>



<!--Accordion wrapper-->
<div class="accordion md-accordion accordion-4" id="accordionEx2" role="tablist" aria-multiselectable="true">

    <!-- Accordion card -->
    <div class="card">

        <!-- Card header -->
        <div class="card-header z-depth-1 teal lighten-4" role="tab" id="heading10">
            <a data-toggle="collapse" data-parent="#accordionEx2" href="#collapse10" aria-expanded="true"
               aria-controls="collapse10">
                <p class="mb-0 black-text  font-weight-bold">
                    Устная консультация. Интерпритация анализов.</p>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapse10" class="collapse show" role="tabpanel" aria-labelledby="heading10"
             data-parent="#accordionEx2">
            <div class="card-body rgba-teal-strong white-text">
                <!----стоимомть---->
                <div class="alert alert-warning">Стоимомть консультации от 2000 тенге</div>
                <!----стоимомть---->
                <p>Во время консультации врач выслушает ваши жалобы и задаст уточняющие вопросы,
                    которые помогут поставить максимально точный диагноз.
                    После сбора анамнеза врач проведет осмотр. Он включает в себя:</p>

                <ul>
                    <li>пальпацию молочных желез;</li>
                    <li>осмотр наружных половых органов в гинекологическом кресле;</li>
                    <li>внутривагинальный осмотр при помощи гинекологических зеркал;</li>
                    <li>двуручное влагалищное обследование.</li>
                </ul>
                <p><a class="btn btn-outline-success pull-left" href="#">Записаться на консультацию</a></p>
            </div>
        </div>
    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card">

        <!-- Card header -->
        <div class="card-header z-depth-1 teal lighten-3" role="tab" id="heading11">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse11"
               aria-expanded="false" aria-controls="collapse11">
                <p class="mb-0 black-text  font-weight-bold">
                    Устная консультация. Интерпритация анализов.</p>

            </a>
        </div>

        <!-- Card body -->
        <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading11"
             data-parent="#accordionEx2">
            <div class="card-body rgba-teal-strong white-text">
                <!----стоимомть---->
                <div class="alert alert-warning">Стоимомть консультации от 2000 тенге</div>
                <!----стоимомть---->
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute,
                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                    3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                    shoreditch et.</p>

                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                    accusamus labore.</p>
            </div>
        </div>
    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card">

        <!-- Card header -->
        <div class="card-header z-depth-1 teal lighten-2" role="tab" id="heading12">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse12"
               aria-expanded="false" aria-controls="collapse12">
                <p class="mb-0 black-text  font-weight-bold">
                    Устная консультация. Интерпритация анализов.</p>

            </a>
        </div>

        <!-- Card body -->
        <div id="collapse12" class="collapse" role="tabpanel" aria-labelledby="heading12"
             data-parent="#accordionEx2">
            <div class="card-body rgba-teal-strong white-text">
                <!----стоимомть---->
                <div class="alert alert-warning">Стоимомть консультации от 2000 тенге</div>
                <!----стоимомть---->
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute,
                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                    3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                    shoreditch et.</p>

                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                    accusamus labore.</p>
            </div>
        </div>
    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card">

        <!-- Card header -->
        <div class="card-header z-depth-1 teal lighten-1" role="tab" id="heading13">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse13"
               aria-expanded="true" aria-controls="collapse13">
                <p class="mb-0 black-text  font-weight-bold">
                    Устная консультация. Интерпритация анализов.</p>

            </a>
        </div>

        <!-- Card body -->
        <div id="collapse13" class="collapse" role="tabpanel" aria-labelledby="heading13"
             data-parent="#accordionEx2">
            <div class="card-body rgba-teal-strong white-text">
                <!----стоимомть---->
                <div class="alert alert-warning">Стоимомть консультации от 2000 тенге</div>
                <!----стоимомть---->
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute,
                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                    3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                    shoreditch et.</p>

                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                    accusamus labore.</p>
            </div>
        </div>
    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card">

        <!-- Card header -->
        <div class="card-header z-depth-1 teal" role="tab" id="heading14">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse14"
               aria-expanded="false" aria-controls="collapse14">
                <p class="mb-0 black-text  font-weight-bold">
                    Устная консультация. Интерпритация анализов.</p>

            </a>
        </div>

        <!-- Card body -->
        <div id="collapse14" class="collapse" role="tabpanel" aria-labelledby="heading14"
             data-parent="#accordionEx2">
            <div class="card-body rgba-teal-strong white-text">
                <!----стоимомть---->
                <div class="alert alert-warning">Стоимомть консультации от 2000 тенге</div>
                <!----стоимомть---->
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute,
                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                    3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                    shoreditch et.</p>

                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                    accusamus labore.</p>
            </div>
        </div>
    </div>
    <!-- Accordion card -->

    <!-- Card header -->
    <div class="card-header z-depth-1 teal" role="tab" id="heading15">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse15"
           aria-expanded="false" aria-controls="collapse15">
            <p class="mb-0 black-text  font-weight-bold">
                Устная консультация. Интерпритация анализов.</p>
        </a>
    </div>

    <!-- Card body -->
    <div id="collapse15" class="collapse" role="tabpanel" aria-labelledby="heading15"
         data-parent="#accordionEx2">
        <div class="card-body rgba-teal-strong white-text">
            <!----стоимомть---->
            <div class="alert alert-warning">Стоимомть консультации от 2000 тенге</div>
            <!----стоимомть---->
            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                wolf moon officia aute,
                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                shoreditch et.</p>

            <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                accusamus labore.</p>
        </div>
    </div>
</div>
<!-- Accordion card -->


<!--/.Accordion wrapper-->

@include('inc.footer')

