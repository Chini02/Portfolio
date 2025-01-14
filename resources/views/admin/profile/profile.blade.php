@extends('admin.layouts.layout')

@section('content')
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="{{ url('/dashboard') }}">Stisla</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="{{ url('/dashboard') }}">St</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li class="nav-item active">
                    <a href="{{ url('/dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                        <span>Dropdown</span></a>
                    <ul class="dropdown-menu" style="display: none;">
                        <li><a class="nav-link" href="">test</a></li>

                    </ul>
                </li>
                <li class="menu-header">Starter</li>

                <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
                <li><a class="nav-link" href="features-post-create.html"><i class="far fa-square"></i> <span>Form
                            Page</span></a></li>

                <li><a class="nav-link" href="features-profile.html"><i class="far fa-square"></i> <span>Profile</span></a>
                </li>

                <li><a class="nav-link" href="auth-login.html"><i class="far fa-square"></i> <span>Login</span></a></li>
                <li><a class="nav-link" href="auth-register.html"><i class="far fa-square"></i> <span>Register</span></a>
                </li>
                <li><a class="nav-link" href="auth-forgot-password.html"><i class="far fa-square"></i> <span>Forgot
                            password</span></a></li>

            </ul>
        </aside>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Profile</h1>
                <!-- ... breadcrumb code ... -->
            </div>
            <div class="section-body">
                <h2 class="section-title">Hi, {{ Auth::user()->name }}!</h2>
                <p class="section-lead">
                    Change information about yourself on this page.
                </p>

                <div class="row mt-sm-4">
                    <div class="col-12"> <!-- Changed to col-12 -->
                        <div class="card">
                            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                @csrf
                            </form>
                            <form method="post" action="{{ route('profile.update') }}" class="needs-validation">
                                @csrf
                                @method('patch')
                                <div class="card-header">
                                    <h4>Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label> Name</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ old('name', $user->name) }}" required="">
                                            <div class="invalid-feedback">
                                                @if ($errors->has('name'))
                                                    <code>{{ $errors->first('name') }}</code>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>email</label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ old('email', $user->email) }}" required="">
                                            <div class="invalid-feedback">
                                                @if ($errors->has('email'))
                                                    <code>{{ $errors->first('email') }}</code>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add more form fields here -->
                                </div>
                                
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>

                            <form method="post" action="{{ route('password.update') }}" class="needs-validation">
                                @csrf
        @method('put')
                                <div class="card-header">
                                    <h4>Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label>Current Password</label>
                                            <input type="password" class="form-control" name="current_password" required="">
                                            <div class="invalid-feedback">
                                                @if ($errors->has('current_password'))
                                                    <code>{{ $errors->first('current_password') }}</code>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <label>New Password</label>
                                            <input type="password" name="password" class="form-control" required="">
                                            <div class="invalid-feedback">
                                                @if ($errors->has('password'))
                                                    <code>{{ $errors->first('password') }}</code>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" name="password_confirmation" required="">
                                            <div class="invalid-feedback">
                                                @if ($errors->has('password_confirmation'))
                                                    <code>{{ $errors->first('password_confirmation') }}</code>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add more form fields here -->
                                </div>
                                
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
