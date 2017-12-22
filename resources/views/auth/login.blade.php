@extends('layouts.app')
@section('content') 
        <div class="columns">
            <div class="column is-one-third is-offset-one-third m-t-100">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title has-text-centered">
                            DEVOUEE POUR CHRIST
                        </h1>

                        <form class="" action="{{route('login')}}" method="POST" role="form">
                            {{csrf_field()}}
                        <div class="field">
                            
                            <label for="email" class="label">Email Address</label>
                            <p class="control has-icons-left has-icons-right">
                    <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" 
                            id="email" placeholder="name@exemple.com" value="{{old('email')}}">
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

                        <div class="field">
                            
                            <label for="password" class="label">Password</label>
                            <p class="control has-icons-left has-icons-right">
                            <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" 
                            type="password" name="password" id="password" placeholder="Password">
                            <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                            </span>
                            </p>
                            @if($errors->has('password'))
                                <p class="help is-danger">{{$errors->first('password')}}</p>
                            @endif
                            
                        </div>
                        <b-checkbox name="remember" class="m-t-20">Remember Me</b-checkbox>
                        <button class="button is-primary is-outlined is-fullwidth m-t-30">Log In</button>
                    </form>
                    </div>

                </div>
                <h5 class="has-text-centered m-t-20"><a href="{{route('password.request')}}" class="is-muted">Mot de passe oublié?</a></h5>
            </div>
        </div>
@endsection
