@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="news_list_block">
                    @forelse($permissions as $permission)
                        <div class="container-fluid">
                            <div class="row d-flex  align-items-center news_item_block">
                                <div class="user_item_content_block">
                                    <h2 class="user_list_title">
                                        {{$permission->name}}, {{$permission->id}}
                                    </h2>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p> Permissions not found</p>
                    @endforelse
                </div>
            </div>

            <div class="col-12 mt-4">
                {{ $permissions->links() }}
            </div>
        </div>
    </div>
@endsection
