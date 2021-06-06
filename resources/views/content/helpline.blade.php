@extends('master')

@section('content')

<div class="title text-center mb-3  bg-info text-light">
    <h3 class="font-weight-bolder">Helpline!</h3>
     </div>

{{-- profile no: 1 --}}

<div class="helpline-section">
<div class="jumbotron bg-success text-light">
        <div class="title text-center mb-3">
        <h3 class="font-weight-bolder">Dr. sakia Haque</h3>
         </div>


    <div class="row">
        <div class="col-lg-4 text-centre ">
            <img class="rounded-circle p-3" src ="data:image/jpeg;base64,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">

        </div>

        <div class="col-lg-8 ">
            <p>Lorem ipsum dolor hgj hbiugd biu98 gyig jguygi7 hyugygs bgiug giugi hg7g guygi zzt fdfytd gi jvj hvj vj yvj gg  sit amet consectetur, adipisicing elit. Quia, eius. Molestias odio pariatur corporis sit facilis! Non nemo error, possimus dolore dicta soluta nesciunt qui itaque eligendi debitis animi. Deleniti beatae eligendi sit, eveniet ullam voluptates! Vero at voluptate a provident sequi ducimus quo. Illum adipisci velit dolores mollitia nulla!</p>

            <div class="alart bg-warning alart-dismissible text-dark">
                {{-- <button class="close" data-dismiss="alart">&times;</button> --}}
                visit dr. sakia facebook page. <a href="#">Link</a>
            </div>
            {{-- <button type="button" class="close" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button> --}}
        </div>

    </div>
    </div>
</div>
<br>


{{-- profile 2 --}}
<div class="helpline-section">
    <div class="jumbotron bg-success text-light">
            <div class="title text-center mb-3">
            <h3 class="font-weight-bolder">Dr. Tuli Saha</h3>
             </div>


        <div class="row">
            <div class="col-lg-4 text-centre ">
                <img class="rounded-circle p-3" src ="data:image/jpeg;base64,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">

            </div>

            <div class="col-lg-8 ">
                <p>Lorem ipsum dolor hgj hbiugd biu98 gyig jguygi7 hyugygs bgiug giugi hg7g guygi zzt fdfytd gi jvj hvj vj yvj gg  sit amet consectetur, adipisicing elit. Quia, eius. Molestias odio pariatur corporis sit facilis! Non nemo error, possimus dolore dicta soluta nesciunt qui itaque eligendi debitis animi. Deleniti beatae eligendi sit, eveniet ullam voluptates! Vero at voluptate a provident sequi ducimus quo. Illum adipisci velit dolores mollitia nulla!</p>

                <div class="alart bg-warning alart-dismissible text-dark">
                    {{-- <button class="close" data-dismiss="alart">&times;</button> --}}
                    visit dr. Tuli Saha facebook page. <a href="#">Link</a>
                </div>
            </div>

        </div>
        </div>
    </div>

@endsection
