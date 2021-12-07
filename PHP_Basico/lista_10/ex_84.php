<?php 

    function emailActiveClients($clients) {
        $activeClients = activeClients($clients);
        foreach ($activeClients as $activeClient) {
            email($activeClient);
        }
    }

    function activeClients() {
        return $db->find('active clients');
    }

?>