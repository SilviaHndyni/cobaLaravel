@extends('layout/main')

@section('title', '(Shop)Belajar Laravel')

@section('container')
    <h1>haul shop</h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Desc</th>
                <th scope="col">Price</th>
                <th scope="col">Stock</th>
                <th scope="col">Aksi</th>
              </tr>
        </thead>
        <tbody>
            <tr>
              <th scope="row">1</th>
              <td>lala</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>lala</td>
              <td>
                  <a href="" class="badge badge-success">Edit</a>
                  <a href="" class="badge badge-danger">Delete</a>
              </td>
            </tr>
            </tbody>
    </table>

@endsection