@extends('layouts.admin')


@section("content")
<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4 border-bottom-primary">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{ __("Session") }}</h6>
                <div class="dropdown no-arrow">

                    <x-CreateButton path="{{ route('session.create') }}" />
                    
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="text-center">
    
                    
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __("Title") }}</th>
                        <th scope="col">{{ __("Action") }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($sessions as $session)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $session->title }}</td>
                                
                                <td>
                                    <div class="btn-group" role="group" aria-label="{{ __("Action Buttons ") }}">
                                        <x-EditButton itemId="{{ $session->id }}" path="session.edit" />
                                        <x-DeleteButton itemId="{{ $session->id }}" path="session.destroy" />                                    
                                    </div>
                                </td>
                            </tr>
                        @empty
                            
                        @endforelse                        
                    </tbody>
                </table>
                
                <hr/>
                <div class="text-center">
                    {!! $sessions->links() !!}
                </div>

                </div>
            </div>
        </div>
    </div>


@endsection