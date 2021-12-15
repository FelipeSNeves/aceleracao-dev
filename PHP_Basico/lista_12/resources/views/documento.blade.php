<h1>Meus Documentos</h1>

<hr>

<ul>
    @foreach($documentos as $documento)
        <li> #{{$documento['id']}} </li> 
        <li> titulo: {{$documento['titulo']}} </li> 
        <li> tamanho: {{$documento['tamanho']}} </li> 
        <li> numeroAssinaturas: {{$documento['numeroAssinaturas']}} </li> 
        <li> assinaturaResponsavel: {{$documento['assinaturaResponsavel']}} </li> 
        <li> qtdPaginas: {{$documento['qtdPaginas']}} </li>
        <li> <a href="documentos/{{$documento['id']}}">SAIBA MAIS</a> </li>
        <br>
    @endforeach
</ul>
