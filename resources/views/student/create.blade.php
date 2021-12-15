@extends('layout.base')

@section('title', 'Ajouter un étudiant')

<style>
    .box {
        margin: 0 auto;
        width: 700px;
    }
    
</style>

@section('content')
    <div class="box">
        @if ($errors->any())
            <article class="message is-danger">
                <div class="message-header">
                <p>Problème dans le formulaire</p>
                </div>
                <div class="message-body">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </article>
        @endif
        <form action="{{ route('students.store') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $student->id }}">
            <div class="field">
                <label class="label">Code INE</label>
                <div class="control">
                <input value="{{ old('ine', $student->ine) }}" name="ine" class="input" type="text" placeholder="Entrer le code INE de l'étudiant">
                </div>
            </div>
            <div class="field">
                <label class="label">Nom de famille</label>
                <div class="control">
                <input value="{{ old('lastname', $student->lastname) }}" name="lastname" class="input" type="text" placeholder="Entrer le nom de famille de l'étudiant">
                </div>
            </div>
            <div class="field">
                <label class="label">Prénom</label>
                <div class="control">
                <input value="{{ old('name', $student->name) }}" name="name" class="input" type="text" placeholder="Entrer le prénom de l'étudiant">
                </div>
            </div>
            <div class="field">
                <label class="label">Date de naissance</label>
                <div class="control">
                <input value="{{ old('birthdate', $student->birthdate) }}" name="birthdate" class="input" type="text" placeholder="Ex : 01/01/2000">
                </div>
            </div>
            <div class="field">
                <label class="label">Diplôme</label>
                <div class="control">
                <input value="{{ old('degree', $student->degree) }}" name="degree" class="input" type="text" placeholder="Entrer le diplôme suivi par l'étudiant">
                </div>
            </div>
            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                <input value="{{ old('mail', $student->mail) }}" name="mail" class="input" type="email" placeholder="Entrer le mail de l'étudiant">
                </div>
            </div>
            <div class="field">
                <label class="label">Téléphone</label>
                <div class="control">
                <input value="{{ old('phone', $student->phone) }}" name="phone" class="input" type="tel" placeholder="Entrer le numéro de téléphone de l'étudiant">
                </div>
            </div>
            <div class="field">
                <label class="label">Nationalité</label>
                <div class="control">
                <input value="{{ old('nationality', $student->nationality) }}" name="nationality" class="input" type="text" placeholder="Entrer la nationalité de l'étudiant">
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                <button class="button is-primary">Soumettre</button>
                </div>
            </div>
        </form>
    </div>
@endsection