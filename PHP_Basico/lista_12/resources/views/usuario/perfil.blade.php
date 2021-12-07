<p>O aluno {{$usuario['nome']}} tem {{$usuario['idade']}} anos</p>


<hr>


<h2>Dados do Documento</h2>

@foreach($documentos as $documento)
    id = {{$documento['id']}} 
    titulo = {{$documento['titulo']}} 
    tamanho = {{$documento['tamanho']}} 
    numeroAssinaturas = {{$documento['numeroAssinaturas']}} 
    assinaturaResponsavel = {{$documento['assinaturaResponsavel']}} 
    qtdPaginas = {{$documento['qtdPaginas']}}
@endforeach;