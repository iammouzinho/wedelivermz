@extends('front.layouts.master')

@section('title')
    ENTREGAS
@endsection


@section('metas')
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<link rel="stylesheet" href="{{URL::to('css/book.css')}}">

<script>
    function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
            mapTypeControl: false,
            center: { lat: -25.9692, lng: 32.5732 },
            zoom: 13,
        });
        new AutocompleteDirectionsHandler(map);
    }

    class AutocompleteDirectionsHandler {
        constructor(map) {
            this.map = map;
            this.originPlaceId = "";
            this.destinationPlaceId = "";
            this.travelMode = google.maps.TravelMode.DRIVING;
            this.directionsService = new google.maps.DirectionsService();
            this.directionsRenderer = new google.maps.DirectionsRenderer();
            this.directionsRenderer.setMap(map);
            const originInput = document.getElementById("start-location");
            const destinationInput = document.getElementById("end-location");

            const originAutocomplete = new google.maps.places.Autocomplete(originInput);
            originAutocomplete.setFields(["place_id"]);

            const destinationAutocomplete = new google.maps.places.Autocomplete(destinationInput);
            destinationAutocomplete.setFields(["place_id"]);

            this.setupPlaceChangedListener(originAutocomplete, "ORIG");
            this.setupPlaceChangedListener(destinationAutocomplete, "DEST");
        }

        setupPlaceChangedListener(autocomplete, mode) {
            autocomplete.bindTo("bounds", this.map);
            autocomplete.addListener("place_changed", () => {
            const place = autocomplete.getPlace();

            if (!place.place_id) {
                window.alert("Escolha um local.");
                return;
            }

            if (mode === "ORIG") {
                this.originPlaceId = place.place_id;
            } else {
                this.destinationPlaceId = place.place_id;
            }
            this.route();
            });
        }

        route() {
            if (!this.originPlaceId || !this.destinationPlaceId) {
            return;
            }
            const me = this;
            this.directionsService.route(
            {
                origin: { placeId: this.originPlaceId },
                destination: { placeId: this.destinationPlaceId },
                travelMode: this.travelMode,
            },
            (response, status) => {
                if (status === "OK") {
                me.directionsRenderer.setDirections(response);
                } else {
                window.alert("Verifique a origem e destino" + status);
                }
            }
            );
        }
    }
</script>

@endsection


@section('content')

<div class="wrapper">
    <div id="book-section">
        <div class="book-left">
            <div id="right-side">
                <div class="container p-0">
                    <div class="stepwizard py-2">
                        <div class="stepwizard-row setup-panel">
                            <div class="stepwizard-step">
                                <a href="#step-1" type="button" class="btn step-active btn-circle">1</a>
                                <span>Rota</span>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-2" type="button" class="btn step-inactive btn-circle" disabled="disabled">2</a>
                                <span>Serviços</span>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-3" type="button" class="btn step-inactive btn-circle" disabled="disabled">3</a>
                                <span>Preço</span>
                            </div>
                        </div>
                    </div>
                    <form role="form" class="px-2 pt-2">
                        <div class="row setup-content" id="step-1">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select id="mySelect" data-show-content="true" class="form-control">
                                        <option>Tipo de Veículo...</option>
                                        <option data-content="<i class='fa fa-bus'></i> Machimbombo"></option>
                                        <option data-content="<i class='fa fa-truck'></i> Camião"></option>
                                        <option data-content="<i class='fa fa-car'></i> Autocarro"></option>
                                    </select>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <p class="mb-0"><b>Tipo de Entraga</b></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Rápida
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Agendar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Todo Dia
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="control-label">Local de Recolha</label>
                                            <input type="text" name="start-location" id="start-location" required="required" class="form-control" placeholder="Escreva o endereço" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Local de Entrega</label>
                                            <input type="text" required="required" name="end-location" id="end-location" class="form-control" placeholder="Escreva o endereço" />
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary nextBtn pull-right my-3" type="button" >Próximo</button>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-2">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="mb-0"><b>Tipo de Entraga</b></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Rápida
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Agendar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Todo Dia
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary nextBtn pull-right my-3" type="button" >Próximo</button>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-3">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="mb-0"><b>Resumo</b></p>
                                        <table style="font-size: 8pt" class="table">
                                            <tr>
                                                <td class="text-left px-0"><b> Nome Completo<b></td>
                                                <td  class="text-right px-0"> Joao Malume</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left px-0"><b> Serviços Adicionais<b></td>
                                                <td class="text-right px-0"> Joao Malume</td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="text-left px-0"><b>Preço Total:<b></td>
                                                <td  class="text-right px-0"> 120.000.00 MT</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <button class="btn btn-success pull-right my-3" type="submit">Terminar!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="left-side">
            <div id="map"> </div>
        </div>
    </div>
</div>

@endsection



@section('scripts')
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhOmuv1BN8nQVKYg1eu-ycW5luX6PWIAo&callback=initMap&libraries=places&v=weekly" ></script>
    <script type="text/javascript">
    $(document).ready(function () {

        var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                    $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('step-active').addClass('step-inactive');
                $item.addClass('step-active');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function(){
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for(var i=0; i<curInputs.length; i++){
                if (!curInputs[i].validity.valid){
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.step-active').trigger('click');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script>
        $('select').selectpicker();
    </script>
@endsection



