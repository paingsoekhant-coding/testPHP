<?php 

class adminExeception extends Exception {}
class userExeception extends Exception {}

$role = "guest";

try{
    if($role == "admin"){
        throw new adminExeception("This is admin");
    }
    else{
        throw new adminExeception("Access Denied!", 404);
    }

}catch(adminExeception $e){
echo $e->getMessage ();
}


// class exception {
//     implmention
// }

// fatal error 
// down 
// notice 

// warning