@extends('layouts.app')

@section('content')



<div class="columns">
            <div class="column is-one-third is-offset-one-third m-t-100">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">
                            Join The Community
                        </h1>
                        <form class="" action="{{route('register')}}" method="POST" role="form">
                            {{csrf_field()}}

                            <div class="field">
                            
                            <label for="name" class="label">Name</label>
                            <p class="control has-icons-left has-icons-right">
                    <input class="input is-medium {{$errors->has('name') ? 'is-danger' : ''}}" type="text" name="name" 
                            id="name" placeholder="Nom et Prenom" value="{{old('name')}}" required>
                            <span class="icon is-small is-left">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                            </p>

                            @if($errors->has('name'))
                                <p class="help is-danger">{{$errors->first('name')}}</p>
                            @endif

                        </div>
                        <div class="field">
                            
                            <label for="email" class="label">Email Address</label>
                            <p class="control has-icons-left has-icons-right">
                    <input class="input is-medium {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" 
                            id="email" placeholder="name@exemple.com" value="{{old('email')}}" required>
                            <span class="icon is-small is-left">
                            <i class="fa fa-envelope"></i>
                            </span>
                            <span class="icon is-small is-right">
                            <i class="fa fa-check"></i>
                            </span>
                            </p>

                            @if($errors->has('email'))
                                <p class="help is-danger">{{$errors->first('email')}}</p>
                            @endif

                        </div>

                        <div class="columns">

                            <div class="column">
                                <div class="field">
                            
                            <label for="password" class="label">Password</label>
                            <p class="control has-icons-left has-icons-right">
                            <input class="input is-medium {{$errors->has('password') ? 'is-danger' : ''}}" 
                            type="password" name="password" placeholder="Password" id="password" required>
                            <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                            </span>
                            </p>
                            @if($errors->has('password'))
                                <p class="help is-danger">{{$errors->first('password')}}</p>
                            @endif
                            
                        </div>
                            </div>
                            <div class="column">
                                <div class="field">
                            
                            <label for="password_confirmation" class="label">Confirm Password</label>
                            <p class="control has-icons-left has-icons-right">
                            <input class="input is-medium {{$errors->has('password_confirmation') ? 'is-danger' : ''}}" 
                            type="password" name="password_confirmation" placeholder="Password" id="password_confirmation" required>
                            <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                            </span>
                            </p>
                            @if($errors->has('password'))
                                <p class="help is-danger">{{$errors->first('password')}}</p>
                            @endif
                            
                        </div>
                    </div>
                </div>
                        
                    <button class="button is-primary is-outlined is-fullwidth m-t-30">Register</button>
                    </form>
                    </div>

                </div>
                <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Already have an account? </a></h5>
            </div>
        </div>
@endsection
