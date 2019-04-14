@extends('layout')


@section('content')


<div class="content">
    <div class="container text-drag">
        <div class="row mt-3">
            <div class="col">
                <img src="../../images/learning-about-colour/lc10.jpg" class="img-fluid mx-auto d-block rounded panel colour-panel">
            </div>
        </div>

        <div class="row mt-2 justify-content-center">
            <p>If we mix the 3 primary colors, we get <div class="word-placeholder ml-3 mr-3" ondrop="drop(event)" ondragover="allowDrop(event)"></div> color.
        </div>
        
        <div class="row mt-2 justify-content-center">
            <p class="mr-3">choose: </p>
            <span id="drag1" draggable="true" ondragstart="drag(event)" width="45" height="45" class="mr-1 border border-dark">secondary</span>
            <span id="drag2" draggable="true" ondragstart="drag(event)" width="45" height="45" class="mr-1 border border-dark">primary</span>
            <span id="drag3" draggable="true" ondragstart="drag(event)" width="45" height="45" class="mr-1 border border-dark">tertiary</span>
        </div>

        <div class="row mt-2">
            <a class="btn btn-outline-dark mx-auto" href="12" role="button">next</a>
        </div>
    </div>
</div>


<script>
    function allowDrop(ev) {
        ev.preventDefault();
    }

    function drag(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
    }

    var i = false;

    function drop(ev) {
        
        ev.preventDefault();
        var data = ev.dataTransfer.getData("text");
        ev.target.appendChild(document.getElementById(data));
    }
</script>

@endsection
