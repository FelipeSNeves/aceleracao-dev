<h1>Assinaturas</h1>

<hr>

<ul>
    @foreach($assinaturas as $assinatura)
        <li> #{{$assinatura['id']}} </li> 
        <li> qtdCaracteresAssinatura: {{$assinatura['qtdCaracteresAssinatura']}} </li> 
        <li> assinaturaPadrao: {{$assinatura['assinaturaPadrao']}} </li> 
        <li> qtdVezesAssinaturaUsada: {{$assinatura['qtdVezesAssinaturaUsada']}} </li> 
        <li> <a href="assinatura/{{$assinatura['id']}}">SAIBA MAIS</a> </li>
        <br>
    @endforeach
</ul>
