@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="news_list_block">
                    @forelse($roles as $role)
                        <div>
                            <div class="row d-flex  align-items-center news_item_block">
                                <div class="user_item_content_block">
                                    <h2 class="user_list_title">
                                        {{$role->name}}, {{$role->id}}
                                    </h2>
                                </div>
                                <h4>permissions </h4>
                                @if($role->name == 'Super-Admin')
                                    <span style="color: #939357">All</span>
                                @else
                                    @foreach($role->permissions as $permission)
                                        <span  style="color: #939357" class="news_format ">{{$permission->name}}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                </div>
                @empty
                    <p> Roles not found</p>
                @endforelse
            </div>
        </div>

        <div class="col-12 mt-4">
            {{ $roles->links() }}
        </div>
    </div>
    </div>
@endsection
