
   
    
    <h3><a href="/home/hmw1">Home work</a></h3>
    <h3><a href="/home/feed">feed</a></h3>
    <?php
    if($this->get_db()===null){
        echo 'Error connection db';
    }
    else{
        echo 'Connection is succesfuli';
    }?>
