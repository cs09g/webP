<?php 
    function getInform($nickName, $phone){
        $inform = $nickName.','.$phone.'<br />';
        return $inform;
    }
    echo getInform('chase', '1234');
?>