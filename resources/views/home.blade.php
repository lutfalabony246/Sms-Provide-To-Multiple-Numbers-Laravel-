@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <div class="card-header">{{ __('  Dashboard') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as User!') }} --}}
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
                            <th scope="col">Phone</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                         
                            <td>
                            <input type="checkbox" name="phone[]" class="checkbox" value="">
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
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
