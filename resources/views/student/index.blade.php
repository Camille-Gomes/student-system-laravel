@extends('layout.base')

@section('title', 'Students')

@section('content')

<link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
            integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

<style>
    .margin {
      margin: 0 auto
    }
    .notification {
        width: 500px;
        margin-top: 30px;
    }

    .button {
        margin-left: 10px
    }
</style>

@if(session()->get('success'))
    <div class="notification is-primary is-light">
      {{ session()->get('success') }}  
    </div>
@endif

@if(session()->get('edit'))
    <div class="notification is-warning is-light">
      {{ session()->get('edit') }}  
    </div>
@endif

<table class="table margin is-hoverable is-striped">
    <thead>
        <tr>
            <th>code INE</th>
            <th>Nom de famille</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Diplôme</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Nationalité</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $students as $student )
            <tr>
                <td>{{ $student->ine }}</td>
                <td>{{ $student->lastname }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->birthdate }}</td>
                <td>{{ $student->degree }}</td>
                <td>{{ $student->mail }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->nationality }}</td>
                <td>
                    <a href="{{ route('students.edit', [
                        'student' => $student->id]) }}">
                        <button class="button is-warning">
                            <i class="fas fa-edit"></i>
                        </button>
                    </a>
                </td>
                <td>
                    <form action="{{ route('students.destroy', $student->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="button is-danger"><i class="fas fa-times"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection


