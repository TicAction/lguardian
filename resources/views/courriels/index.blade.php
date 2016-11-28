<h1>Courriel du site Edu-Portail</h1>

@foreach($emails as $email)
    <strong>
        {{$email->send_date}}
    </strong>

    {{$email->title}}

@endforeach