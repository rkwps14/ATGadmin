<div>
    <header></header>
</div>

<h1 class="text-info">Hello, {{Auth::user()->name}}</h1>

<a class="dropdown-item" href="logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Logout </a>
    <form id="logout-form" action="{{url('logout')}}" method="POST" style="display: none;">
        @csrf
    </form>
