<h1>Assinaturas</h1>

<a href="{{route('assinatura.novo')}}">Nova Assinatura</a>

<hr>

@if(session('mensagem'))
    <p>{{session('mensagem')}}</p>
    <hr>
@endif


<ul>
    @foreach($assinaturas as $assinatura)
        <li> #{{$assinatura['id']}} </li> 
        <li> qtdCaracteresAssinatura: {{$assinatura['qtdCaracteresAssinatura']}} </li> 
        <li> assinaturaPadrao: {{$assinatura['assinaturaPadrao']}} </li> 
        <li> qtdVezesAssinaturaUsada: {{$assinatura['qtdVezesAssinaturaUsada']}} </li> 
        <li> 
            <a href="assinatura/{{$assinatura['id']}}">SAIBA MAIS</a> 
            <form action="{{route('assinatura.remover', $assinatura ?? ''->id)}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit">REMOVER</button>
            </form>
        </li>
        <br>
    @endforeach
</ul>
