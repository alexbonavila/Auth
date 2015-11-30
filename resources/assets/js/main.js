/**
 * Created by alumne on 17/11/15.
 */

var Vue = require('vue');

var vm=new Vue({

    el: '#email',
    data: {
        placeholder:"youremail@gmail.com",
        url: "http://auth.app/checkEmailsExists"
    },
    methods:{

        checkEmailsExists: function(){
            var email=$('email').value();
            console.debug("checkEmailsExists EXECUTED!");
            console.debug("A punt de cridar: ");
            console.debug(this.url);
            console.debug(email);
            var url=this.url+'?email=' +email;
            console.debug(url);

            $ajax(url).done(function(data){
                //ok
            }).fail(function(data){
                //error
                alert("NO VA");
            }).always(function(data){
                //always
                console.debug("Xivato");
            });
        }

    }

});