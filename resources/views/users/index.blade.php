@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div>
                    <form action="{{route('users.index')}}" method="GET">
                    <label for="site-search">Search the user by name:</label>
                    <input type="search" id="site-search" name="search">

                    <button>Search</button>
                    </form>
                </div>
                <div class="news_list_block">
                    @forelse($users as $user)
                        <div class="container-fluid">
                            <div class="row d-flex  align-items-center news_item_block">
                                <div class="user_item_content_block">
                                    <h2 class="user_list_title">
                                        {{$user->name}}, {{$user->id}}
                                    </h2>
                                    <div>
                                        <span class="news_date">created {{$user->getFormattedDate()}}</span>
                                        <div>
                                            <h4>roles </h4>
                                            @foreach($user->roles as $role)
                                                <span class="news_format ">{{$role->name}}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p> Users not found</p>
                    @endforelse
                </div>
            </div>

            <div class="col-12 mt-4">
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
