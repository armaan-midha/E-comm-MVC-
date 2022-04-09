<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total = ProductController::cartItem();
}
?>
<style>
  #nav-bar{
    position: sticky;
}
.navbar
{
    background-image: linear-gradient(to right, #a517ba,#5f1178 );
    padding: 0;

}
.navbar-brand{
    height: 40px;
    padding-left: 20px;
    color:#fff;!important
}
.nav>li>a{
  color:#fff;!important
}
.nav>li>a:focus, .nav>li>a:hover{
  color:#5f1178;
}
.search-box{
   font-weight: 600; font-size: 18px; margin-top: 15px;
}
.dropdown-menu>li>a{
  color:#5f1178;
  font-weight: 800; text-align: center; font-size: 18px; margin-top: 15px;  text-transform: capitalize;
}
</style>
<nav class="navbar">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="color: #fff; font-weight: 600; margin-top: 15px;>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only>Toggle navigation</span>
        <span class="icon-bar></span>
        <span class="icon-bar></span>
        <span class="icon-bar></span>
      </button>
      <a class="navbar-brand" href="/">E-comm</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <!-- <li class " style="font-weight: 600; text-align: center; font-size: 18px; margin-top: 15px;  text-transform: capitalize;"><a href="/">Home</a></li> -->
        <li class " style="font-weight: 600; text-align: center; font-size: 18px; margin-top: 15px;  text-transform: capitalize;"><a href="/myorders">Orders</a></li>
        <li><a href="#"></a></li>
      </ul>
      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default"style="color:grey; font-weight: 600; text-align: center; font-size: 18px; margin-top: 15px;  text-transform: capitalize;">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li style="font-weight: 600; text-align: center; font-size: 18px; margin-top: 15px;  text-transform: capitalize;"><a href="/cartlist">cart({{$total}})</a></li>
        @if(Session::has('user'))
        <li class="dropdown">
        <a class="dropdown-toggle" style="font-weight: 600; text-align: center; font-size: 18px; margin-top: 15px;  text-transform: capitalize;" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li style="font-weight: 600; text-align: center; font-size: 18px; margin-top: 15px;  text-transform: capitalize;"><a href="/logout">Logout</a></li>
        </ul>
      </li>
      @else
      <li style="font-weight: 600; text-align: center; font-size: 18px; margin-top: 15px;  text-transform: capitalize;"><a href="/login">Login</a></li>
      <li style="font-weight: 600; text-align: center; font-size: 18px; margin-top: 15px;  text-transform: capitalize;"><a href="/register">Register</a></li>
      @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>