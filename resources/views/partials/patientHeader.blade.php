<header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0" style="font-family: 'Times New Roman', Times, serif;">EPI Vaccination Management</h3>
        <div>
        <nav class="nav nav-masthead justify-content-center float-md-end">
        <ul class="nav">
            <li class="nav item nav-style">
            <a class="nav-link active" aria-current="page" href="{{route('patientsProfile')}}">Profile</a>
            </li>

            <li class="nav item nav-style">
            <a class="nav-link" href="{{route('schedule')}}">Schedule</a>
            </li>

            {{-- <li class="nav item nav-style">
            <a class="nav-link" href="{{route('notices')}}">Notices</a>
            </li>

            <li class="nav item nav-style">
            <a class="nav-link" href="{{route('helpline')}}">Helpline</a>
            </li> --}}

            <li class="nav item nav-style">

                @auth
                    <span class="nav-link text-dark">{{auth()->user()->name}}</span>
                    <a class="nav-link" href="{{route('logout')}}">Log Out</a>
                    @else
                    <a class="nav-link" href="{{route('SignInUp')}}">Log In</a>

                @endauth
                </li>
        </ul>
        </nav>
        </div>
    </div>
</header>

{{-- <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" href="#">Active</a>
    </li> --}}
