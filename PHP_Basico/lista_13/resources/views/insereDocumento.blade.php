<h1>Cadastrar Documento</h1>

<hr>

<form action="{{route('documentos.inserir')}}" method="POST">

    @csrf
    
    <input type="text" name="titulo" value="" placeholder="Titulo">
    
    <br>    
    <br>
    
    <input type="number" name="tamanho" value="" placeholder="Tamanho" step="0.01">
    
    <br>    
    <br>
    
    <input type="number" name="numeroAssinaturas" value="" placeholder="Numero Assinaturas">
    
    <br>    
    <br>
    
    <input type="text" name="assinaturaResponsavel" value="" placeholder="Assinatura Responsavel">
    
    <br>    
    <br>

    <input type="number" name="qtdPaginas" value="" placeholder="Quantidade de Paginas">

    <br>    
    <br>
    
    <button type="submit">Adicionar</button>
</form>