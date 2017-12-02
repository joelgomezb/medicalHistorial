	<div class="row">
		<div class="col-md-2">
<nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('/home') }}">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>

		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Patients<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="{{ url('/patient') }}">New</a></li>
            <li><a href="{{ url('/lists')}}">Lists</a></li>
          </ul>
		</li>          

        <li ><a href="#">Tags<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>

		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Users<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="{{ url('/') }}">Admin</a></li>
            <li><a href="{{ url('/')}}">Lists</a></li>
          </ul>
		</li>          

      </ul>
    </div>
  </div>
</nav>
</div>
