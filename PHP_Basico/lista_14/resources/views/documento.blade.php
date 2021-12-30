<h1>Meus Documentos</h1>
<a href="{{route('documentos.novo')}}">Novo Documento</a>

<hr>

@if(session('mensagem'))
    <p>{{session('mensagem')}}</p>
@endif

<ul>
    @foreach($documentos as $documento)
        <li> #{{$documento['id']}} </li> 
        <li> titulo: {{$documento['titulo']}} </li> 
        <li> tamanho: {{$documento['tamanho']}} </li> 
        <li> numeroAssinaturas: {{$documento['numeroAssinaturas']}} </li> 
        <li> assinaturaResponsavel: {{$documento['assinaturaResponsavel']}} </li> 
        <li> qtdPaginas: {{$documento['qtdPaginas']}} </li>
        <li> 
            <a href="documentos/{{$documento['id']}}">SAIBA MAIS</a> 
            <form action="{{route('documentos.remover', $documento->id)}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit">REMOVER</button>
            </form>
        </li>
        <br>
    @endforeach
</ul>
