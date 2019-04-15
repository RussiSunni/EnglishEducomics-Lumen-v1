@extends('layout')


@section('content')

    <div class="content">
        <div class="container-fluid text-drag">
            <div class="row justify-content-center mt-3">
                <img src="../../images/message-in-a-bottle/message-in-a-bottle.svg" class="img-fluid">
            </div>

            <div class="row mt-3">
                <div class="col-12 col-md-4">
                    <img src="../../images/message-in-a-bottle/lesson-page-2.png" class="img-fluid mx-auto d-block rounded panel">
                </div>
                <div class="col-12 col-md-4">
                    <div class="placeholder my-2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="placeholder my-2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="placeholder my-2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="placeholder my-2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="placeholder my-2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="placeholder my-2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                </div>
                <div class="col-12 col-md-4">
                    <p id="drag2" class="bg-light draggable" draggable="true" ondragstart="drag(event)">a letter</p>
                    <p id="drag6" class="bg-light" draggable="true" ondragstart="drag(event)">most of her time</p>
                    <p id="drag1" class="bg-light" draggable="true" ondragstart="drag(event)">a bottle</p>
                    <p id="drag3" class="bg-light" draggable="true" ondragstart="drag(event)">a letter</p>
                    <p id="drag5" class="bg-light" draggable="true" ondragstart="drag(event)">a letter</p>
                    <p id="drag4" class="bg-light" draggable="true" ondragstart="drag(event)">a boy named Johnny</p>    
                </div>
            </div>

            <div class="row mt-2">
                <a class="btn btn-outline-dark mx-auto" href="07" role="button">next</a>
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
    
        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
        }
    </script>
        
        


@endsection


