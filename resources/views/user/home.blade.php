@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-tabs mb-5">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Players Ranking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Item shop Rankings</a>
                </li>
            </ul>

            <div class="card text-white bg-secondary mb-3">
                <div class="card-header">Players</div>
                <div class="card-body">
                    <table class="table table-dark">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">NAME</th>
                            <th scope="col">CLASS</th>
                            <th scope="col">BADGE</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>Brawler</td>
                                    <td><span class="badge badge-primary">Badge 1</span></td>
                                </tr>
                                @empty
                                <tr> No data </tr>
                            @endforelse
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection