<?php



function flash_message($message='',$class="i"){
    switch ($class) {
        case "s":
            $active_class="success";
            break;
        case "i":
            $active_class="info";
            break;
        case "d":
            $active_class="danger";
            break;
        case "p":
            $active_class="primary";
            break;    
        default:
            $active_class="default";
            break;  
    }

    session()->flash('message',$message);
    session()->flash('class',$active_class);
}


function send_mail($class){
   // use App\Mail\$class;
    // Mail::to('pankaj@ucreate.co.in')->send(
    //     new $class
    // );
}