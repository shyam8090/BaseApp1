@extends('base')

@section('content')
<div class="container-fluid" style="height: 400px;background-color: rgb(3, 157, 252);">
<br><br>
<br><br>
<br><br>	
<h1 align="center">
	<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading" style="font-weight: bold;"><span id="typed"></span></h1>
    </div>
</section>
</h1>
</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.9/typed.min.js" async defer></script>
<script>
    window.onload = function () {
        console.log("loaded")
        var typed = new Typed('#typed', {
            strings: ["Welcome to BaseApp"],
            backSpeed: 15,
            smartBackspace: true,
            backDelay: 1200,
            startDelay: 1000,
            typeSpeed: 25,
            loop: true,
        });
    };
</script>