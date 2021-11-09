@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(session('response'))
                    <div class="alert alert-success">
                        {{session('response')}}
                    </div>
                @endif
             <div class="card-header">{{ __('  Dashboard') }}</div>

                <div class="card-body">
                     {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                    {{ __('You are logged in as User!') }} 
                    <form class="form-horizontal" method="POST" action="{{url('/message')}}">
                        @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="name" name="message" rows="3"></textarea>
                      </div>
                      <table class="table">
                        <thead>
                          <tr>
                              <th></th>
                            <th scope="col">Id</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Email</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                            @if(count($users)>0)
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                    <input type="checkbox" name="phone[]" class="checkbox" value="{{$user->phone}}">
                                    </td>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                  </tr>
                                @endforeach
                            @endif
                         
                        </tbody>
                      </table>
                      <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary" >
                                {{-- {{ __('Register') }} --}}Send Message
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
