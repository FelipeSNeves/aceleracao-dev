<?php 

    class Cliente
    {
        public function is_valid(){}
    }

    class ClienteRepository
    {
        public function adicionarCliente(){}
    }

    class ClienteService
    {
        public function adicionarCliente($cliente, $repo)
        {
            if (!$cliente->is_valid()) {
                return 'Dados inválidos';
            }

            if ($repo->adicionarCliente($cliente)) {
                return 'Cliente cadastrado com sucesso';
            } else {
                return 'Error';
            }
        }
    }

?>