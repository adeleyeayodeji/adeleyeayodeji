   //facebook share

    (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));



  window.fbAsyncInit = function () {
        FB.init({
      appId  : '228190737761400',
      status : true,
      xfbml  : true,
      version: 'v2.1'
});
window.facebookShare = function( callback ) {
    var options = ({
        method : 'share',
        href   : 'https://adeleyeayodeji.com/instagram/'
    }),
        status = '';
    FB.ui(options, function( response ){
        if (response && !response.error_code) {
            status = 'success';
            $.event.trigger('fb-share.success');
        } else {
            status = 'error';
            $.event.trigger('fb-share.error');
        }
        if(callback && typeof callback === "function") {
            callback.call(this, status);
        } else {
            return response;
        }
    });
}
    };
$('#fb').on('click', function( e ) {
    e.preventDefault();
    facebookShare(function( response ) {
        // simple function callback
        console.log(response);
    });
});
// custom jQuery events
$(document)
    .on('fb-share.success', function( e ) {
         $("#fb").html('Download');
         $("#fb").attr('id', null);
         $("#fb").attr('href', 'https://github.com/adeleyeayodeji/PHP-Instagram-Feed-With-Lightbox/archive/master.zip');
        // alert("shared successfuly - click the download button to download your file ");
    })
    .on('fb-share.error', function( e ) {
        $("#fb").html('<b class="text-danger">Error!</b> Try Sharing again to unlock download');
        // alert("unable to share");
        // console.log();
    });