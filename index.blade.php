@extends('admin.admin_dashboard')
@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>

                    <div class="card-body">
                        <p>Hello, Admin!</p>
                        
                        <p>Welcome to your dashboard where you hold the key to manage products with precision. As an administrator with the "admin" role, you have the following permissions:</p>
                        
                        <ul>
                            @foreach($adminPermissions as $permission)
                                <li>{{ $permission->name }}</li>
                            @endforeach
                        </ul>
                        
                        <p>Your role ensures the integrity and relevance of our product offerings. Feel empowered as you navigate this interface, making impactful decisions that drive our product ecosystem forward.</p>
                        
                        <p>Remember, your expertise is invaluable, and your actions contribute to our shared success.</p>
                        
                        <p>Thank you for being a vital part of our administrative team. Here's to effective product management and a rewarding experience within the dashboard!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection