@extends('dashboard.layouts.app')

@section('content')

    <div class="content-body">
        <div class="container">

        <div class="card col-md-8 mx-auto">
            <div class="card-body">
                <input type="text" class="form-control form-control-lg" placeholder="Search...">
            </div>
        </div>

        <div class="col-md-12">

        <div class="card">
            <div class="card-body">
            <h6>All Post</h6>

                <table class="table">
                    <thead>
                        <tr>
                            <td>Title</td>
                            <td>Status</td>
                            <td>Last Update</td>
                            <td>More</td>
                        </tr>
                    </thead>
                    <tbody>

                    @forelse($all_posts as $post)

                    <tr>
                            <td>
                                {{$post->post_title}}
                            </td>
                            <td>
                                <span class="badge badge-sm badge-{{$post->status == 'live'?'success':'secondary'}}">{{$post->status}}</span>
                            </td>
                            <td>
                                {{$post->updated_at->diffForHumans()}}
                            </td>
                            <td>
                                <a  href="{{route('author.edit_post', $post->post_code)}}" class="btn btn-primary shadow">view details</a>
                            </td>
                        </tr>

                    @empty

                        <div class="container text-center">

                        <h4 class="text-center">No post yet..</h4>

                                <a href="{{route('create_post')}}" class="btn btn-primary shadow">create post</a>

                        </div>

                    @endforelse




                    </tbody>
                </table>

            </div>
        </div>

        </div>

        </div>
    </div>


@endsection