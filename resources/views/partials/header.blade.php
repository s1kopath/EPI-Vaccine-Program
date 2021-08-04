<header class="mb-auto ">

    <h3 class="float-md-start mb-0 " style="font-family: 'Times New Roman', Times, serif;">EPI Vaccination Management
    </h3>
    <div>
        <nav class="nav nav-masthead justify-content-center float-md-end">
            <ul class="nav ">
                <li class="nav item nav-style">
                    <a class="nav-link " aria-current="page" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav item nav-style">
                    <a class="nav-link " href="{{ route('notices') }}">Notices</a>
                </li>

                {{-- <li class="nav item nav-style">
            <a class="nav-link " href="{{route('services')}}">Services</a>
            </li> --}}

                <li class="nav item nav-style">
                    <a class="nav-link " href="{{ route('helpline') }}">Helpline</a>
                </li>

                <li class="nav item nav-style">
                    {{-- <a class="nav-link" href="{{route('SignInUp')}}">Sing In</a> --}}
                    <div class="dropdown nav-link">
                        <a class="text-decoration-none dropdown-toggle " href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false" data-interval="50">
                            Sign In
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" data-toggle="tab" class="dropdown-link"
                                    href="{{ route('healthWorkerSignInUp') }}">Healthworker & Admin</a></li>
                            <li><a class="dropdown-item" data-toggle="tab" class="dropdown-link"
                                    href="{{ route('patientsSignInUp') }}">Patients</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>

</header>

{{-- <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" href="#">Active</a>
    </li> --}}
