{{-- @extends('layout')


@section('content')

    <div class="content">
        <div class="container">
            <div class="row justify-content-center mt-3">
                <img src="../../images/message-in-a-bottle/message-in-a-bottle.svg" class="img-fluid">
            </div>

            <div class="row mt-3">
                <div class="col">
                    <img src="../../images/message-in-a-bottle/lesson-page-1-1.jpg" class="img-fluid mx-auto d-block panel">
                </div>
            </div>

            <div class="row mt-2">
                <a class="btn btn-outline-dark mx-auto" href="03" role="button">next</a>
            </div>
        </div>
    </div>



@endsection --}}


@extends('layout')


@section('content')


<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>



<div id="app">

	<div class="content">
			<div class="container">
				<div class="row justify-content-center mt-3">
					<img src="../../images/message-in-a-bottle/message-in-a-bottle.svg" class="img-fluid">
				</div>
	
				<div class="row mt-3">
					<div class="col">

					<router-view>
					</router-view>
				</div>
			</div>
			
				
			

            <div class="row mt-2">
                <button class="btn btn-outline-dark"><router-link to="/">01</router-link></button>
                <button class="btn btn-outline-dark"><router-link to="/02">02</router-link></button>
                <button class="btn btn-outline-dark"><router-link to="/03">03</router-link></button>
                <button class="btn btn-outline-dark"><router-link to="/04">04</router-link></button>
                <a class="btn btn-outline-dark" href="03" role="button">next</a>
            </div>
        </div>
    </div>


</div>



<script>

	// 1. Define route components.
	// These can be imported from other files
	const p01 = { 
		template: '<img src="../../images/message-in-a-bottle/lesson-page-1-1.jpg" class="img-fluid mx-auto d-block panel">' }

	const p02 = { 
		template: '<img src="../../images/message-in-a-bottle/lesson-page-1-2.jpg" class="img-fluid mx-auto d-block panel">' }

	const p03 = { 
		template: ' <img src="../../images/message-in-a-bottle/lesson-page-1-3.jpg" class="img-fluid mx-auto d-block panel">' }

	const p04 = { 
		template: '<img src="../../images/message-in-a-bottle/lesson-page-1-4.jpg" class="img-fluid mx-auto d-block panel">' }



	const routes = [
		{ path: '/', component: p01 },
		{ path: '/02', component: p02 },
		{ path: '/03', component: p03 },
		{ path: '/04', component: p04 }
	]


	const router = new VueRouter({
		routes 
	})

	
	const app = new Vue({
		router
	}).$mount('#app')

	// Now the app has started!
</script>

@endsection