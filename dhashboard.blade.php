@extends('admin.admin_dashboard')
@section('content')


@if(auth()->guard('admin')->check())
    @if(auth()->guard('admin')->user()->role === 'admin')
         @include('admin.index')
    
 
    

    @elseif(auth()->guard('admin')->user()->role === 'secrt')
        @include('admin.index_S')
      @else
    

    

        <p>You do not have the required role to access this content.</p>
    @endif
@else
 
    

    <p>Please log in to access this content.</p>
@endif
    

    

@endsection