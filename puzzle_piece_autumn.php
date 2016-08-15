<?php
//This is an example of a namespace being created and used to define a function so as to avoid a name collision.
namespace autumn {
    function pack($wolf){
    echo "$wolf wolf.<br />";
}
\autumn\pack("Big");
\autumn\pack("Middle");
\autumn\pack("Little");
}
